<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetDebtorByIdBankruptResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorRegisterItem
     */
    private $GetDebtorByIdBankruptResult;

    /**
     * @return \Fedresurs\WebService\Type\DebtorRegisterItem|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetDebtorByIdBankruptResult;
    }

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

