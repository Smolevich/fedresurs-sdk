<?php

namespace Fedresurs\WebService\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ArrayOfTradePlace implements ResultInterface
{

    /**
     * @var \Fedresurs\WebService\Type\TradePlace
     */
    private $TradePlace;

    /**
     * @return \Fedresurs\WebService\Type\TradePlace
     */
    public function getTradePlace()
    {
        return $this->TradePlace;
    }

    /**
     * @param \Fedresurs\WebService\Type\TradePlace $TradePlace
     * @return ArrayOfTradePlace
     */
    public function withTradePlace($TradePlace)
    {
        $new = clone $this;
        $new->TradePlace = $TradePlace;

        return $new;
    }


}
