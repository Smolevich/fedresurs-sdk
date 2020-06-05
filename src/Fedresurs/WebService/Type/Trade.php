<?php

namespace Fedresurs\WebService\Type;

class Trade
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfTradeMessage
     */
    private $MessageList;

    /**
     * @var string
     */
    private $ID_External;

    /**
     * @var int
     */
    private $ID_EFRSB;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfTradeMessage
     */
    public function getMessageList()
    {
        return $this->MessageList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfTradeMessage $MessageList
     * @return Trade
     */
    public function withMessageList($MessageList)
    {
        $new = clone $this;
        $new->MessageList = $MessageList;

        return $new;
    }

    /**
     * @return string
     */
    public function getID_External()
    {
        return $this->ID_External;
    }

    /**
     * @param string $ID_External
     * @return Trade
     */
    public function withID_External($ID_External)
    {
        $new = clone $this;
        $new->ID_External = $ID_External;

        return $new;
    }

    /**
     * @return int
     */
    public function getID_EFRSB()
    {
        return $this->ID_EFRSB;
    }

    /**
     * @param int $ID_EFRSB
     * @return Trade
     */
    public function withID_EFRSB($ID_EFRSB)
    {
        $new = clone $this;
        $new->ID_EFRSB = $ID_EFRSB;

        return $new;
    }


}

