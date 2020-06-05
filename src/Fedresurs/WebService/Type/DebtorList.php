<?php

namespace Fedresurs\WebService\Type;

class DebtorList
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfChoice1
     */
    private $DebtorList;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfChoice1
     */
    public function getDebtorList()
    {
        return $this->DebtorList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfChoice1 $DebtorList
     * @return DebtorList
     */
    public function withDebtorList($DebtorList)
    {
        $new = clone $this;
        $new->DebtorList = $DebtorList;

        return $new;
    }


}

