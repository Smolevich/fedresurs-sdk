<?php

namespace Fedresurs\WebService\Type;

class GetArbitrManagerRegisterResponse
{

    /**
     * @var \Fedresurs\WebService\Type\AMList
     */
    private $GetArbitrManagerRegisterResult;

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

