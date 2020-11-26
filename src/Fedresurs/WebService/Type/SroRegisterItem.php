<?php

namespace Fedresurs\WebService\Type;

class SroRegisterItem
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfArbitrManagerRegisterItem
     */
    private $AMList;

    /**
     * @var int
     */
    private $SROID;

    /**
     * @var string
     */
    private $FullName;

    /**
     * @var string
     */
    private $RegNum;

    /**
     * @var \DateTimeInterface
     */
    private $DateReg;

    /**
     * @var string
     */
    private $INN;

    /**
     * @var string
     */
    private $UrAdress;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var \DateTimeInterface
     */
    private $DateExclude;

    /**
     * @var string
     */
    private $CauseExclude;

    /**
     * @var \DateTimeInterface
     */
    private $DateLastModif;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfArbitrManagerRegisterItem
     */
    public function getAMList()
    {
        return $this->AMList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfArbitrManagerRegisterItem $AMList
     * @return SroRegisterItem
     */
    public function withAMList($AMList)
    {
        $new = clone $this;
        $new->AMList = $AMList;

        return $new;
    }

    /**
     * @return int
     */
    public function getSROID()
    {
        return $this->SROID;
    }

    /**
     * @param int $SROID
     * @return SroRegisterItem
     */
    public function withSROID($SROID)
    {
        $new = clone $this;
        $new->SROID = $SROID;

        return $new;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * @param string $FullName
     * @return SroRegisterItem
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
    public function getRegNum()
    {
        return $this->RegNum;
    }

    /**
     * @param string $RegNum
     * @return SroRegisterItem
     */
    public function withRegNum($RegNum)
    {
        $new = clone $this;
        $new->RegNum = $RegNum;

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
     * @return SroRegisterItem
     */
    public function withDateReg($DateReg)
    {
        $new = clone $this;
        $new->DateReg = $DateReg;

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
     * @return SroRegisterItem
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
    public function getUrAdress()
    {
        return $this->UrAdress;
    }

    /**
     * @param string $UrAdress
     * @return SroRegisterItem
     */
    public function withUrAdress($UrAdress)
    {
        $new = clone $this;
        $new->UrAdress = $UrAdress;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return SroRegisterItem
     */
    public function withPhone($Phone)
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateExclude()
    {
        return $this->DateExclude;
    }

    /**
     * @param \DateTimeInterface $DateExclude
     * @return SroRegisterItem
     */
    public function withDateExclude($DateExclude)
    {
        $new = clone $this;
        $new->DateExclude = $DateExclude;

        return $new;
    }

    /**
     * @return string
     */
    public function getCauseExclude()
    {
        return $this->CauseExclude;
    }

    /**
     * @param string $CauseExclude
     * @return SroRegisterItem
     */
    public function withCauseExclude($CauseExclude)
    {
        $new = clone $this;
        $new->CauseExclude = $CauseExclude;

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
     * @return SroRegisterItem
     */
    public function withDateLastModif($DateLastModif)
    {
        $new = clone $this;
        $new->DateLastModif = $DateLastModif;

        return $new;
    }


}

