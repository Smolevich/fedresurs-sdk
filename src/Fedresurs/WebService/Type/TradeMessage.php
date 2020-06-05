<?php

namespace Fedresurs\WebService\Type;

class TradeMessage
{

    /**
     * @var int
     */
    private $ID;

    /**
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return TradeMessage
     */
    public function withID($ID)
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }


}

