<?php

namespace Fedresurs\WebService\Type;

class ArrayOfTradeMessage
{

    /**
     * @var \Fedresurs\WebService\Type\TradeMessage
     */
    private $TradeMessage;

    /**
     * @return \Fedresurs\WebService\Type\TradeMessage
     */
    public function getTradeMessage()
    {
        return $this->TradeMessage;
    }

    /**
     * @param \Fedresurs\WebService\Type\TradeMessage $TradeMessage
     * @return ArrayOfTradeMessage
     */
    public function withTradeMessage($TradeMessage)
    {
        $new = clone $this;
        $new->TradeMessage = $TradeMessage;

        return $new;
    }


}

