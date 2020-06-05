<?php

namespace Fedresurs\WebService\Type;

class GetTradeMessagesByTradeResponse
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfTradePlace
     */
    private $GetTradeMessagesByTradeResult;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfTradePlace
     */
    public function getGetTradeMessagesByTradeResult()
    {
        return $this->GetTradeMessagesByTradeResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfTradePlace $GetTradeMessagesByTradeResult
     * @return GetTradeMessagesByTradeResponse
     */
    public function withGetTradeMessagesByTradeResult($GetTradeMessagesByTradeResult)
    {
        $new = clone $this;
        $new->GetTradeMessagesByTradeResult = $GetTradeMessagesByTradeResult;

        return $new;
    }


}

