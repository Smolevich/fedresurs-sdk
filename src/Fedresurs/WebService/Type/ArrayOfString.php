<?php

namespace Fedresurs\WebService\Type;

class ArrayOfString
{

    /**
     * @var string
     */
    private $NameHistoryItem;

    /**
     * @return string
     */
    public function getNameHistoryItem()
    {
        return $this->NameHistoryItem;
    }

    /**
     * @param string $NameHistoryItem
     * @return ArrayOfString
     */
    public function withNameHistoryItem($NameHistoryItem)
    {
        $new = clone $this;
        $new->NameHistoryItem = $NameHistoryItem;

        return $new;
    }


}

