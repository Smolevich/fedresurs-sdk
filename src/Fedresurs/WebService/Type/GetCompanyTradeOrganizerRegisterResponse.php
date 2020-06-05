<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetCompanyTradeOrganizerRegisterResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\TradeOrganizerList
     */
    private $GetCompanyTradeOrganizerRegisterResult;

    /**
     * @return \Fedresurs\WebService\Type\TradeOrganizerList|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetCompanyTradeOrganizerRegisterResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\TradeOrganizerList
     */
    public function getGetCompanyTradeOrganizerRegisterResult()
    {
        return $this->GetCompanyTradeOrganizerRegisterResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\TradeOrganizerList $GetCompanyTradeOrganizerRegisterResult
     * @return GetCompanyTradeOrganizerRegisterResponse
     */
    public function withGetCompanyTradeOrganizerRegisterResult($GetCompanyTradeOrganizerRegisterResult)
    {
        $new = clone $this;
        $new->GetCompanyTradeOrganizerRegisterResult = $GetCompanyTradeOrganizerRegisterResult;

        return $new;
    }


}

