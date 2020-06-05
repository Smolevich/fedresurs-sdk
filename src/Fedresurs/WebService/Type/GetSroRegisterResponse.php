<?php

namespace Fedresurs\WebService\Type;

class GetSroRegisterResponse
{

    /**
     * @var \Fedresurs\WebService\Type\SROList
     */
    private $GetSroRegisterResult;

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

