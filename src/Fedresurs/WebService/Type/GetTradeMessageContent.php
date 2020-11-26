<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\RequestInterface;

class GetTradeMessageContent implements RequestInterface
{

    /**
     * @var int
     */
    private $idTradeMessage;

    public function __construct(int $idTradeMessage)
    {
        $this->idTradeMessage = $idTradeMessage;
    }

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

