<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetArbitrManagerRegisterResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\AMList
     */
    private $GetArbitrManagerRegisterResult;

    /**
     * @return \Fedresurs\WebService\Type\AMList|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetArbitrManagerRegisterResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\AMList
     */
    public function getGetArbitrManagerRegisterResult()
    {
        return $this->GetArbitrManagerRegisterResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\AMList $GetArbitrManagerRegisterResult
     * @return GetArbitrManagerRegisterResponse
     */
    public function withGetArbitrManagerRegisterResult($GetArbitrManagerRegisterResult)
    {
        $new = clone $this;
        $new->GetArbitrManagerRegisterResult = $GetArbitrManagerRegisterResult;

        return $new;
    }


}

