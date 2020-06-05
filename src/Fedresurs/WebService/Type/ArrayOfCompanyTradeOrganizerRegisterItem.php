<?php

namespace Fedresurs\WebService\Type;

class ArrayOfCompanyTradeOrganizerRegisterItem
{

    /**
     * @var \Fedresurs\WebService\Type\CompanyTradeOrganizerRegisterItem
     */
    private $TradeOrganizer;

    /**
     * @return \Fedresurs\WebService\Type\CompanyTradeOrganizerRegisterItem
     */
    public function getTradeOrganizer()
    {
        return $this->TradeOrganizer;
    }

    /**
     * @param \Fedresurs\WebService\Type\CompanyTradeOrganizerRegisterItem $TradeOrganizer
     * @return ArrayOfCompanyTradeOrganizerRegisterItem
     */
    public function withTradeOrganizer($TradeOrganizer)
    {
        $new = clone $this;
        $new->TradeOrganizer = $TradeOrganizer;

        return $new;
    }


}

