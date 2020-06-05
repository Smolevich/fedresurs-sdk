<?php

namespace Fedresurs\WebService\Type;

class DebtorCompany
{

    /**
     * @var string
     */
    private $FullName;

    /**
     * @var string
     */
    private $ShortName;

    /**
     * @var string
     */
    private $OGRN;

    /**
     * @var string
     */
    private $LegalAddress;

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param string $FullName
     * @return DebtorCompany
     */
    public function withFullName($FullName)
    {
        $new = clone $this;
        $new->FullName = $FullName;

        return $new;
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        return $this->ShortName;
    }

    /**
     * @param string $ShortName
     * @return DebtorCompany
     */
    public function withShortName($ShortName)
    {
        $new = clone $this;
        $new->ShortName = $ShortName;

        return $new;
    }

    /**
     * @return string
     */
    public function getOGRN()
    {
        return $this->OGRN;
    }

    /**
     * @param string $OGRN
     * @return DebtorCompany
     */
    public function withOGRN($OGRN)
    {
        $new = clone $this;
        $new->OGRN = $OGRN;

        return $new;
    }

    /**
     * @return string
     */
    public function getLegalAddress()
    {
        return $this->LegalAddress;
    }

    /**
     * @param string $LegalAddress
     * @return DebtorCompany
     */
    public function withLegalAddress($LegalAddress)
    {
        $new = clone $this;
        $new->LegalAddress = $LegalAddress;

        return $new;
    }


}

