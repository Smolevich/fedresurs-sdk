<?php

namespace Fedresurs\WebService\Type;

class TradeOrganizerList
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfCompanyTradeOrganizerRegisterItem
     */
    private $TradeOrganizerList;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfCompanyTradeOrganizerRegisterItem
     */
    public function getTradeOrganizerList()
    {
        return $this->TradeOrganizerList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfCompanyTradeOrganizerRegisterItem $TradeOrganizerList
     * @return TradeOrganizerList
     */
    public function withTradeOrganizerList($TradeOrganizerList)
    {
        $new = clone $this;
        $new->TradeOrganizerList = $TradeOrganizerList;

        return $new;
    }


}

