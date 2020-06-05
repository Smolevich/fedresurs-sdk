<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fedresurs\WebService\Type\GetDebtorsByLastPublicationPeriod;
use Http\Adapter\Guzzle6\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use \DateTime;
use Fedresurs\WebService\WebServiceClientFactory;

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
$startDate = new DateTime('-5 day');
$endDate = new DateTime('now');
$response = $client->getDebtorsByLastPublicationPeriod(new GetDebtorsByLastPublicationPeriod($startDate,$endDate));
var_dump($response->getGetDebtorsByLastPublicationPeriodResult());
