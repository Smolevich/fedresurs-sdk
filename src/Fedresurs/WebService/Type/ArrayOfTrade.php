<?php

namespace Fedresurs\WebService\Type;

class ArrayOfTrade
{

    /**
     * @var \Fedresurs\WebService\Type\Trade
     */
    private $Trade;

    /**
     * @return \Fedresurs\WebService\Type\Trade
     */
    public function getTrade()
    {
        return $this->Trade;
    }

    /**
     * @param \Fedresurs\WebService\Type\Trade $Trade
     * @return ArrayOfTrade
     */
    public function withTrade($Trade)
    {
        $new = clone $this;
        $new->Trade = $Trade;

        return $new;
    }


}

