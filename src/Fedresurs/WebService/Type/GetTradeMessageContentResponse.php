<?php

namespace Fedresurs\WebService\Type;

class GetTradeMessageContentResponse
{

    /**
     * @var string
     */
    private $GetTradeMessageContentResult;

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

