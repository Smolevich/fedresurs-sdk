<?php

namespace Fedresurs\WebService\Type;

class GetSroRegister
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
     * @return GetSroRegister
     */
    public function withDate($date)
    {
        $new = clone $this;
        $new->date = $date;

        return $new;
    }


}

