<?php

namespace Fedresurs\WebService\Type;

class GetTradeMessages
{

    /**
     * @var \DateTimeInterface
     */
    private $startFrom;

    /**
     * @var \DateTimeInterface
     */
    private $endTo;

    /**
     * @return \DateTimeInterface
     */
    public function getStartFrom()
    {
        return $this->startFrom;
    }

    /**
     * @param \DateTimeInterface $startFrom
     * @return GetTradeMessages
     */
    public function withStartFrom($startFrom)
    {
        $new = clone $this;
        $new->startFrom = $startFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndTo()
    {
        return $this->endTo;
    }

    /**
     * @param \DateTimeInterface $endTo
     * @return GetTradeMessages
     */
    public function withEndTo($endTo)
    {
        $new = clone $this;
        $new->endTo = $endTo;

        return $new;
    }


}

