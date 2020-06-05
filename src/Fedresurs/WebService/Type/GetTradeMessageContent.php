<?php

namespace Fedresurs\WebService\Type;

class GetTradeMessageContent
{

    /**
     * @var int
     */
    private $idTradeMessage;

    /**
     * @return int
     */
    public function getIdTradeMessage()
    {
        return $this->idTradeMessage;
    }

    /**
     * @param int $idTradeMessage
     * @return GetTradeMessageContent
     */
    public function withIdTradeMessage($idTradeMessage)
    {
        $new = clone $this;
        $new->idTradeMessage = $idTradeMessage;

        return $new;
    }


}

