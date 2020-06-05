<?php

namespace Fedresurs\WebService\Type;

class DebtorRegisterItem
{

    /**
     * @var \DateTimeInterface
     */
    private $LastMessageDate;

    /**
     * @var \DateTimeInterface
     */
    private $LastReportDate;

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfLegalCaseInfo
     */
    private $LegalCaseList;

    /**
     * @var string
     */
    private $Category;

    /**
     * @var string
     */
    private $CategoryCode;

    /**
     * @var string
     */
    private $Region;

    /**
     * @var \DateTimeInterface
     */
    private $DateLastModif;

    /**
     * @var string
     */
    private $INN;

    /**
     * @var int
     */
    private $BankruptId;

    /**
     * @return \DateTimeInterface
     */
    public function getLastMessageDate()
    {
        return $this->LastMessageDate;
    }

    /**
     * @param \DateTimeInterface $LastMessageDate
     * @return DebtorRegisterItem
     */
    public function withLastMessageDate($LastMessageDate)
    {
        $new = clone $this;
        $new->LastMessageDate = $LastMessageDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastReportDate()
    {
        return $this->LastReportDate;
    }

    /**
     * @param \DateTimeInterface $LastReportDate
     * @return DebtorRegisterItem
     */
    public function withLastReportDate($LastReportDate)
    {
        $new = clone $this;
        $new->LastReportDate = $LastReportDate;

        return $new;
    }

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfLegalCaseInfo
     */
    public function getLegalCaseList()
    {
        return $this->LegalCaseList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfLegalCaseInfo $LegalCaseList
     * @return DebtorRegisterItem
     */
    public function withLegalCaseList($LegalCaseList)
    {
        $new = clone $this;
        $new->LegalCaseList = $LegalCaseList;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return DebtorRegisterItem
     */
    public function withCategory($Category)
    {
        $new = clone $this;
        $new->Category = $Category;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->CategoryCode;
    }

    /**
     * @param string $CategoryCode
     * @return DebtorRegisterItem
     */
    public function withCategoryCode($CategoryCode)
    {
        $new = clone $this;
        $new->CategoryCode = $CategoryCode;

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
     * @return DebtorRegisterItem
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
    public function getDateLastModif()
    {
        return $this->DateLastModif;
    }

    /**
     * @param \DateTimeInterface $DateLastModif
     * @return DebtorRegisterItem
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
    public function getINN()
    {
        return $this->INN;
    }

    /**
     * @param string $INN
     * @return DebtorRegisterItem
     */
    public function withINN($INN)
    {
        $new = clone $this;
        $new->INN = $INN;

        return $new;
    }

    /**
     * @return int
     */
    public function getBankruptId()
    {
        return $this->BankruptId;
    }

    /**
     * @param int $BankruptId
     * @return DebtorRegisterItem
     */
    public function withBankruptId($BankruptId)
    {
        $new = clone $this;
        $new->BankruptId = $BankruptId;

        return $new;
    }


}

