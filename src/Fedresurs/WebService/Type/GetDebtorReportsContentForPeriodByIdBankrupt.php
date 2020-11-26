<?php

namespace Fedresurs\WebService\Type;

class GetDebtorReportsContentForPeriodByIdBankrupt
{

    /**
     * @var int
     */
    private $idBankrupt;

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @return int
     */
    public function getIdBankrupt()
    {
        return $this->idBankrupt;
    }

    /**
     * @param int $idBankrupt
     * @return GetDebtorReportsContentForPeriodByIdBankrupt
     */
    public function withIdBankrupt($idBankrupt)
    {
        $new = clone $this;
        $new->idBankrupt = $idBankrupt;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return GetDebtorReportsContentForPeriodByIdBankrupt
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }


}

