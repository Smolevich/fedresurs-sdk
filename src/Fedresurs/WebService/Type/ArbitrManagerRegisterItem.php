<?php

namespace Fedresurs\WebService\Type;

class ArbitrManagerRegisterItem
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfDateAffiliation
     */
    private $DateAffiliations;

    /**
     * @var string
     */
    private $ArbitrManagerID;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $MiddleName;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $RegNum;

    /**
     * @var string
     */
    private $INN;

    /**
     * @var string
     */
    private $OGRNIP;

    /**
     * @var string
     */
    private $SNILS;

    /**
     * @var string
     */
    private $SRORegNum;

    /**
     * @var \DateTimeInterface
     */
    private $DateLastModif;

    /**
     * @var string
     */
    private $Region;

    /**
     * @var \DateTimeInterface
     */
    private $DateReg;

    /**
     * @var \DateTimeInterface
     */
    private $SRORegDate;

    /**
     * @var \DateTimeInterface
     */
    private $DateDelete;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfDateAffiliation
     */
    public function getDateAffiliations()
    {
        return $this->DateAffiliations;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfDateAffiliation $DateAffiliations
     * @return ArbitrManagerRegisterItem
     */
    public function withDateAffiliations($DateAffiliations)
    {
        $new = clone $this;
        $new->DateAffiliations = $DateAffiliations;

        return $new;
    }

    /**
     * @return string
     */
    public function getArbitrManagerID()
    {
        return $this->ArbitrManagerID;
    }

    /**
     * @param string $ArbitrManagerID
     * @return ArbitrManagerRegisterItem
     */
    public function withArbitrManagerID($ArbitrManagerID)
    {
        $new = clone $this;
        $new->ArbitrManagerID = $ArbitrManagerID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return ArbitrManagerRegisterItem
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return ArbitrManagerRegisterItem
     */
    public function withMiddleName($MiddleName)
    {
        $new = clone $this;
        $new->MiddleName = $MiddleName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return ArbitrManagerRegisterItem
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegNum()
    {
        return $this->RegNum;
    }

    /**
     * @param string $RegNum
     * @return ArbitrManagerRegisterItem
     */
    public function withRegNum($RegNum)
    {
        $new = clone $this;
        $new->RegNum = $RegNum;

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
     * @return ArbitrManagerRegisterItem
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
    public function getOGRNIP()
    {
        return $this->OGRNIP;
    }

    /**
     * @param string $OGRNIP
     * @return ArbitrManagerRegisterItem
     */
    public function withOGRNIP($OGRNIP)
    {
        $new = clone $this;
        $new->OGRNIP = $OGRNIP;

        return $new;
    }

    /**
     * @return string
     */
    public function getSNILS()
    {
        return $this->SNILS;
    }

    /**
     * @param string $SNILS
     * @return ArbitrManagerRegisterItem
     */
    public function withSNILS($SNILS)
    {
        $new = clone $this;
        $new->SNILS = $SNILS;

        return $new;
    }

    /**
     * @return string
     */
    public function getSRORegNum()
    {
        return $this->SRORegNum;
    }

    /**
     * @param string $SRORegNum
     * @return ArbitrManagerRegisterItem
     */
    public function withSRORegNum($SRORegNum)
    {
        $new = clone $this;
        $new->SRORegNum = $SRORegNum;

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
     * @return ArbitrManagerRegisterItem
     */
    public function withDateLastModif($DateLastModif)
    {
        $new = clone $this;
        $new->DateLastModif = $DateLastModif;

        return $new;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * @param string $Region
     * @return ArbitrManagerRegisterItem
     */
    public function withRegion($Region)
    {
        $new = clone $this;
        $new->Region = $Region;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateReg()
    {
        return $this->DateReg;
    }

    /**
     * @param \DateTimeInterface $DateReg
     * @return ArbitrManagerRegisterItem
     */
    public function withDateReg($DateReg)
    {
        $new = clone $this;
        $new->DateReg = $DateReg;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSRORegDate()
    {
        return $this->SRORegDate;
    }

    /**
     * @param \DateTimeInterface $SRORegDate
     * @return ArbitrManagerRegisterItem
     */
    public function withSRORegDate($SRORegDate)
    {
        $new = clone $this;
        $new->SRORegDate = $SRORegDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateDelete()
    {
        return $this->DateDelete;
    }

    /**
     * @param \DateTimeInterface $DateDelete
     * @return ArbitrManagerRegisterItem
     */
    public function withDateDelete($DateDelete)
    {
        $new = clone $this;
        $new->DateDelete = $DateDelete;

        return $new;
    }


}

