<?php

namespace Fedresurs\WebService\Type;

class CompanyTradeOrganizerRegisterItem
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
    private $INN;

    /**
     * @var string
     */
    private $OGRN;

    /**
     * @var \DateTimeInterface
     */
    private $DateLastModif;

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param string $FullName
     * @return CompanyTradeOrganizerRegisterItem
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
     * @return CompanyTradeOrganizerRegisterItem
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
    public function getINN()
    {
        return $this->INN;
    }

    /**
     * @param string $INN
     * @return CompanyTradeOrganizerRegisterItem
     */
    public function withINN($INN)
    {
        $new = clone $this;
        $new->INN = $INN;

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
     * @return CompanyTradeOrganizerRegisterItem
     */
    public function withOGRN($OGRN)
    {
        $new = clone $this;
        $new->OGRN = $OGRN;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateLastModif()
    {
        return $this->DateLastModif;
    }

    /**
     * @param \DateTimeInterface $DateLastModif
     * @return CompanyTradeOrganizerRegisterItem
     */
    public function withDateLastModif($DateLastModif)
    {
        $new = clone $this;
        $new->DateLastModif = $DateLastModif;

        return $new;
    }


}

