<?php

namespace Fedresurs\WebService\Type;

class GetDebtorsByLastPublicationPeriodResponse
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorList
     */
    private $GetDebtorsByLastPublicationPeriodResult;

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

