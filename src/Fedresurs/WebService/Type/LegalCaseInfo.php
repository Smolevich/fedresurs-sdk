<?php

namespace Fedresurs\WebService\Type;

class LegalCaseInfo
{

    /**
     * @var string
     */
    private $Number;

    /**
     * @var \DateTimeInterface
     */
    private $DateCreate;

    /**
     * @var string
     */
    private $Court;

    /**
     * @var string
     */
    private $ApplicantType;

    /**
     * @var bool
     */
    private $IsApplicantCreditOrg;

    /**
     * @var bool
     */
    private $IsLiabilitySecured;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * @param string $Number
     * @return LegalCaseInfo
     */
    public function withNumber($Number)
    {
        $new = clone $this;
        $new->Number = $Number;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateCreate()
    {
        return $this->DateCreate;
    }

    /**
     * @param \DateTimeInterface $DateCreate
     * @return LegalCaseInfo
     */
    public function withDateCreate($DateCreate)
    {
        $new = clone $this;
        $new->DateCreate = $DateCreate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourt()
    {
        return $this->Court;
    }

    /**
     * @param string $Court
     * @return LegalCaseInfo
     */
    public function withCourt($Court)
    {
        $new = clone $this;
        $new->Court = $Court;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplicantType()
    {
        return $this->ApplicantType;
    }

    /**
     * @param string $ApplicantType
     * @return LegalCaseInfo
     */
    public function withApplicantType($ApplicantType)
    {
        $new = clone $this;
        $new->ApplicantType = $ApplicantType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsApplicantCreditOrg()
    {
        return $this->IsApplicantCreditOrg;
    }

    /**
     * @param bool $IsApplicantCreditOrg
     * @return LegalCaseInfo
     */
    public function withIsApplicantCreditOrg($IsApplicantCreditOrg)
    {
        $new = clone $this;
        $new->IsApplicantCreditOrg = $IsApplicantCreditOrg;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsLiabilitySecured()
    {
        return $this->IsLiabilitySecured;
    }

    /**
     * @param bool $IsLiabilitySecured
     * @return LegalCaseInfo
     */
    public function withIsLiabilitySecured($IsLiabilitySecured)
    {
        $new = clone $this;
        $new->IsLiabilitySecured = $IsLiabilitySecured;

        return $new;
    }


}

