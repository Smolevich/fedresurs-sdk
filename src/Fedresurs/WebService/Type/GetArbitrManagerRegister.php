<?php

namespace Fedresurs\WebService\Type;

class GetArbitrManagerRegister
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
     * @return GetArbitrManagerRegister
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }


}

