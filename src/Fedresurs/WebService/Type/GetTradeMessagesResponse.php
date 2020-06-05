<?php

namespace Fedresurs\WebService\Type;

class GetTradeMessagesResponse
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfTradePlace
     */
    private $GetTradeMessagesResult;

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

