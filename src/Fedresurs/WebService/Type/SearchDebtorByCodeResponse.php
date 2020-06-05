<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class SearchDebtorByCodeResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorList
     */
    private $SearchDebtorByCodeResult;

    /**
     * @return \Fedresurs\WebService\Type\DebtorList|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->SearchDebtorByCodeResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\DebtorList
     */
    public function getSearchDebtorByCodeResult()
    {
        return $this->SearchDebtorByCodeResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorList $SearchDebtorByCodeResult
     * @return SearchDebtorByCodeResponse
     */
    public function withSearchDebtorByCodeResult($SearchDebtorByCodeResult)
    {
        $new = clone $this;
        $new->SearchDebtorByCodeResult = $SearchDebtorByCodeResult;

        return $new;
    }


}

