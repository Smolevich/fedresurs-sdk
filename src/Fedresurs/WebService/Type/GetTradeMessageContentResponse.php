<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetTradeMessageContentResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var string
     */
    private $GetTradeMessageContentResult;

    /**
     * @return string|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetTradeMessageContentResult;
    }

    /**
     * @return string
     */
    public function getGetTradeMessageContentResult()
    {
        return $this->GetTradeMessageContentResult;
    }

    /**
     * @param string $GetTradeMessageContentResult
     * @return GetTradeMessageContentResponse
     */
    public function withGetTradeMessageContentResult($GetTradeMessageContentResult)
    {
        $new = clone $this;
        $new->GetTradeMessageContentResult = $GetTradeMessageContentResult;

        return $new;
    }


}

