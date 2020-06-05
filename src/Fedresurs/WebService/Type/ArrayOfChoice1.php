<?php

namespace Fedresurs\WebService\Type;

class ArrayOfChoice1
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorPerson
     */
    private $DebtorPerson;

    /**
     * @var \Fedresurs\WebService\Type\DebtorCompany
     */
    private $DebtorCompany;

    /**
     * @return \Fedresurs\WebService\Type\DebtorPerson
     */
    public function getDebtorPerson()
    {
        return $this->DebtorPerson;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorPerson $DebtorPerson
     * @return ArrayOfChoice1
     */
    public function withDebtorPerson($DebtorPerson)
    {
        $new = clone $this;
        $new->DebtorPerson = $DebtorPerson;

        return $new;
    }

    /**
     * @return \Fedresurs\WebService\Type\DebtorCompany
     */
    public function getDebtorCompany()
    {
        return $this->DebtorCompany;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorCompany $DebtorCompany
     * @return ArrayOfChoice1
     */
    public function withDebtorCompany($DebtorCompany)
    {
        $new = clone $this;
        $new->DebtorCompany = $DebtorCompany;

        return $new;
    }


}

