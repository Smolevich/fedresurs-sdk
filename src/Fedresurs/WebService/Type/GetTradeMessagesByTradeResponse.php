<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetTradeMessagesByTradeResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfTradePlace
     */
    private $GetTradeMessagesByTradeResult;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfTradePlace|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetTradeMessagesByTradeResult;
    }

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

