<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetMessageIdsResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfInt
     */
    private $GetMessageIdsResult;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfInt|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetMessageIdsResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfInt
     */
    public function getGetMessageIdsResult()
    {
        return $this->GetMessageIdsResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfInt $GetMessageIdsResult
     * @return GetMessageIdsResponse
     */
    public function withGetMessageIdsResult($GetMessageIdsResult)
    {
        $new = clone $this;
        $new->GetMessageIdsResult = $GetMessageIdsResult;

        return $new;
    }


}

