<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetDebtorsByLastPublicationPeriodResponse implements ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorList
     */
    private $GetDebtorsByLastPublicationPeriodResult;

    /**
     * @return \Fedresurs\WebService\Type\DebtorList|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetDebtorsByLastPublicationPeriodResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\DebtorList
     */
    public function getGetDebtorsByLastPublicationPeriodResult()
    {
        return $this->GetDebtorsByLastPublicationPeriodResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorList $GetDebtorsByLastPublicationPeriodResult
     * @return GetDebtorsByLastPublicationPeriodResponse
     */
    public function withGetDebtorsByLastPublicationPeriodResult($GetDebtorsByLastPublicationPeriodResult)
    {
        $new = clone $this;
        $new->GetDebtorsByLastPublicationPeriodResult = $GetDebtorsByLastPublicationPeriodResult;

        return $new;
    }


}

