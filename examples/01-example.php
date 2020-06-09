<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fedresurs\WebService\Type\GetDebtorsByLastPublicationPeriod;
use Fedresurs\WebService\Type\GetTradeMessages;
use Http\Adapter\Guzzle6\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Fedresurs\WebService\WebServiceClientFactory;
use \Fedresurs\WebService\Type\GetTradeMessageContent;

$config = json_decode(file_get_contents(__DIR__ . '/../config/credentials.json'), true);

if (empty($config)) {
    throw new Exception('Empty config');
}

$handler = HttPlugHandle::createForClient(
    Client::createWithConfig([
        'headers' => ['User-Agent' => 'testing/1.0'],
        'auth' => [$config['username'], $config['password'], 'digest']
    ])
);

$client = WebServiceClientFactory::factory(__DIR__ . '/../schema/schema.wsdl', $handler);
$startDate = new DateTime('-10 day');
$endDate = new DateTime('now');
$response = $client->getDebtorsByLastPublicationPeriod(new GetDebtorsByLastPublicationPeriod($startDate,$endDate));
$companies = $response->getDebtorList()->getDebtorCompany();


# Get companies
/**
 * @var \Fedresurs\WebService\Type\DebtorCompany $company
 */
foreach ($companies as $company) {
    echo sprintf('Company full_name %s, INN %s, bankruptId %s',
        $company->getFullName(),
        $company->getINN(),
        $company->getBankruptId()
    ).PHP_EOL;
}

# Get trades
$response = $client->getTradeMessages(new GetTradeMessages($startDate,  $endDate));
$tradePlaces = $response->getTradePlace();

/**
 * @var \Fedresurs\WebService\Type\TradePlace $tradePlace
 */
foreach ($tradePlaces as $tradePlace) {
    echo sprintf('Trade_place name %s, site %s', $tradePlace->getName(), $tradePlace->getSite()).PHP_EOL;
    $trades = $tradePlace->getTradeList()->getTrade();
    /**
     * @var \Fedresurs\WebService\Type\Trade $trade
     */
    foreach ($trades as $trade) {
        $messageList = $trade->getMessageList()->getTradeMessage();

        echo  sprintf("\tTrade id %s, ID_EFRSB %s",
            $trade->getID_External(),
            $trade->getID_EFRSB()
        ).PHP_EOL;

        /** @var \Fedresurs\WebService\Type\TradeMessage $message */
        foreach ($messageList as $message) {
            echo sprintf("\t\tMessage id %s for trade id %s",
                $message->getID(),
                $trade->getID_EFRSB()
            ).PHP_EOL;
            try {
                $tradeContent = $client->getTradeMessageContent(new GetTradeMessageContent($message->getID()));
                file_put_contents(sprintf('trade_message_content_%s.txt', $message->getID()), $tradeContent->getResult());
                exit;
            } catch (Exception $e) {
                echo $e->getMessage().PHP_EOL;
            }
        }
    }

}
