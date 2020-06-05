<?php

namespace Fedresurs\WebService\Type;

class SearchDebtorByCodeResponse
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorList
     */
    private $SearchDebtorByCodeResult;

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

