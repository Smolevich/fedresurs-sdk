<?php

namespace Fedresurs\WebService\Type;

class GetTradeMessagesByTrade
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
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $tradePlaceInn;

    /**
     * @return \DateTimeInterface
     */
    public function getStartFrom()
    {
        return $this->startFrom;
    }

    /**
     * @param \DateTimeInterface $startFrom
     * @return GetTradeMessagesByTrade
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
     * @return GetTradeMessagesByTrade
     */
    public function withEndTo($endTo)
    {
        $new = clone $this;
        $new->endTo = $endTo;

        return $new;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return GetTradeMessagesByTrade
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getTradePlaceInn()
    {
        return $this->tradePlaceInn;
    }

    /**
     * @param string $tradePlaceInn
     * @return GetTradeMessagesByTrade
     */
    public function withTradePlaceInn($tradePlaceInn)
    {
        $new = clone $this;
        $new->tradePlaceInn = $tradePlaceInn;

        return $new;
    }


}

