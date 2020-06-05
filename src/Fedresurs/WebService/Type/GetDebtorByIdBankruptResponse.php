<?php

namespace Fedresurs\WebService\Type;

class GetDebtorByIdBankruptResponse
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorRegisterItem
     */
    private $GetDebtorByIdBankruptResult;

    /**
     * @return \Fedresurs\WebService\Type\DebtorRegisterItem
     */
    public function getGetDebtorByIdBankruptResult()
    {
        return $this->GetDebtorByIdBankruptResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorRegisterItem $GetDebtorByIdBankruptResult
     * @return GetDebtorByIdBankruptResponse
     */
    public function withGetDebtorByIdBankruptResult($GetDebtorByIdBankruptResult)
    {
        $new = clone $this;
        $new->GetDebtorByIdBankruptResult = $GetDebtorByIdBankruptResult;

        return $new;
    }


}

