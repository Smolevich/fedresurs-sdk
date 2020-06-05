<?php

namespace Fedresurs\WebService\Type;


use \DateTime;
use Phpro\SoapClient\Type\RequestInterface;

class GetDebtorsByLastPublicationPeriod implements RequestInterface
{

    /**
     * @var \DateTimeInterface
     */
    private $startDate;

    /**
     * @var \DateTimeInterface
     */
    private $endDate;

    public function __construct(\DateTime $startDate, \DateTime $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
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
     * @return GetDebtorsByLastPublicationPeriod
     */
    public function withStartDate($startDate)
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return GetDebtorsByLastPublicationPeriod
     */
    public function withEndDate($endDate)
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }


}

