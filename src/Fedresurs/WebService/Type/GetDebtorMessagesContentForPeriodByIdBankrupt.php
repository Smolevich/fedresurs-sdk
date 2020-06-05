<?php

namespace Fedresurs\WebService\Type;

class GetDebtorMessagesContentForPeriodByIdBankrupt
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
     * @return GetDebtorMessagesContentForPeriodByIdBankrupt
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
     * @return GetDebtorMessagesContentForPeriodByIdBankrupt
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }


}

