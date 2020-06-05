<?php

namespace Fedresurs\WebService\Type;

class GetCompanyTradeOrganizerRegister
{

    /**
     * @var \DateTimeInterface
     */
    private $date;

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTimeInterface $date
     * @return GetCompanyTradeOrganizerRegister
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }


}

