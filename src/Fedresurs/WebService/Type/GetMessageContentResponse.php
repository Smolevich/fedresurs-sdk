<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetMessageContentResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var string
     */
    private $GetMessageContentResult;

    /**
     * @return string|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetMessageContentResult;
    }

    /**
     * @return string
     */
    public function getGetMessageContentResult()
    {
        return $this->GetMessageContentResult;
    }

    /**
     * @param string $GetMessageContentResult
     * @return GetMessageContentResponse
     */
    public function withGetMessageContentResult($GetMessageContentResult)
    {
        $new = clone $this;
        $new->GetMessageContentResult = $GetMessageContentResult;

        return $new;
    }


}

