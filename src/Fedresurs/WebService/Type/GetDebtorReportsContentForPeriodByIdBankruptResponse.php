<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetDebtorReportsContentForPeriodByIdBankruptResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var string
     */
    private $GetDebtorReportsContentForPeriodByIdBankruptResult;

    /**
     * @return string|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetDebtorReportsContentForPeriodByIdBankruptResult;
    }

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

