<?php

namespace Fedresurs\WebService\Type;

class DebtorPerson
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfString
     */
    private $NameHistory;

    /**
     * @var string
     */
    private $LastName;

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
    private $OGRNIP;

    /**
     * @var string
     */
    private $Birthdate;

    /**
     * @var string
     */
    private $Birthplace;

    /**
     * @var string
     */
    private $SNILS;

    /**
     * @var string
     */
    private $Address;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfString
     */
    public function getNameHistory()
    {
        return $this->NameHistory;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfString $NameHistory
     * @return DebtorPerson
     */
    public function withNameHistory($NameHistory)
    {
        $new = clone $this;
        $new->NameHistory = $NameHistory;

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
     * @return DebtorPerson
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
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return DebtorPerson
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
     * @return DebtorPerson
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
    public function getOGRNIP()
    {
        return $this->OGRNIP;
    }

    /**
     * @param string $OGRNIP
     * @return DebtorPerson
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
    public function getBirthdate()
    {
        return $this->Birthdate;
    }

    /**
     * @param string $Birthdate
     * @return DebtorPerson
     */
    public function withBirthdate($Birthdate)
    {
        $new = clone $this;
        $new->Birthdate = $Birthdate;

        return $new;
    }

    /**
     * @return string
     */
    public function getBirthplace()
    {
        return $this->Birthplace;
    }

    /**
     * @param string $Birthplace
     * @return DebtorPerson
     */
    public function withBirthplace($Birthplace)
    {
        $new = clone $this;
        $new->Birthplace = $Birthplace;

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
     * @return DebtorPerson
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
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return DebtorPerson
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }


}

