<?php

namespace Fedresurs\WebService\Type;

class GetCompanyTradeOrganizerRegisterResponse
{

    /**
     * @var \Fedresurs\WebService\Type\TradeOrganizerList
     */
    private $GetCompanyTradeOrganizerRegisterResult;

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

