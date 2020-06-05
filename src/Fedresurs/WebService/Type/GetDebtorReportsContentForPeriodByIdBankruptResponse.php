<?php

namespace Fedresurs\WebService\Type;

class GetDebtorReportsContentForPeriodByIdBankruptResponse
{

    /**
     * @var string
     */
    private $GetDebtorReportsContentForPeriodByIdBankruptResult;

    /**
     * @return string
     */
    public function getGetDebtorReportsContentForPeriodByIdBankruptResult()
    {
        return $this->GetDebtorReportsContentForPeriodByIdBankruptResult;
    }

    /**
     * @param string $GetDebtorReportsContentForPeriodByIdBankruptResult
     * @return GetDebtorReportsContentForPeriodByIdBankruptResponse
     */
    public function withGetDebtorReportsContentForPeriodByIdBankruptResult($GetDebtorReportsContentForPeriodByIdBankruptResult)
    {
        $new = clone $this;
        $new->GetDebtorReportsContentForPeriodByIdBankruptResult = $GetDebtorReportsContentForPeriodByIdBankruptResult;

        return $new;
    }


}

