<?php

namespace Fedresurs\WebService\Type;

class GetDebtorRegisterResponse
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorList
     */
    private $GetDebtorRegisterResult;

    /**
     * @return \Fedresurs\WebService\Type\DebtorList
     */
    public function getGetDebtorRegisterResult()
    {
        return $this->GetDebtorRegisterResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorList $GetDebtorRegisterResult
     * @return GetDebtorRegisterResponse
     */
    public function withGetDebtorRegisterResult($GetDebtorRegisterResult)
    {
        $new = clone $this;
        $new->GetDebtorRegisterResult = $GetDebtorRegisterResult;

        return $new;
    }


}

