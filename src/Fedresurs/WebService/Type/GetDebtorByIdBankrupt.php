<?php

namespace Fedresurs\WebService\Type;

class GetDebtorByIdBankrupt
{

    /**
     * @var int
     */
    private $idBankrupt;

    /**
     * @return int
     */
    public function getIdBankrupt()
    {
        return $this->idBankrupt;
    }

    /**
     * @param int $idBankrupt
     * @return GetDebtorByIdBankrupt
     */
    public function withIdBankrupt($idBankrupt)
    {
        $new = clone $this;
        $new->idBankrupt = $idBankrupt;

        return $new;
    }


}

