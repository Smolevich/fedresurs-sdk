<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetSroRegisterResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\SROList
     */
    private $GetSroRegisterResult;

    /**
     * @return \Fedresurs\WebService\Type\SROList|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetSroRegisterResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\SROList
     */
    public function getGetSroRegisterResult()
    {
        return $this->GetSroRegisterResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\SROList $GetSroRegisterResult
     * @return GetSroRegisterResponse
     */
    public function withGetSroRegisterResult($GetSroRegisterResult)
    {
        $new = clone $this;
        $new->GetSroRegisterResult = $GetSroRegisterResult;

        return $new;
    }


}

