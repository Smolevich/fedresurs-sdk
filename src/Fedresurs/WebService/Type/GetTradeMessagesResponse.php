<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetTradeMessagesResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfTradePlace
     */
    private $GetTradeMessagesResult;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfTradePlace|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetTradeMessagesResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfTradePlace
     */
    public function getGetTradeMessagesResult()
    {
        return $this->GetTradeMessagesResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfTradePlace $GetTradeMessagesResult
     * @return GetTradeMessagesResponse
     */
    public function withGetTradeMessagesResult($GetTradeMessagesResult)
    {
        $new = clone $this;
        $new->GetTradeMessagesResult = $GetTradeMessagesResult;

        return $new;
    }


}

