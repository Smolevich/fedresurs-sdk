<?php

namespace Fedresurs\WebService\Type;

class SROList
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfSroRegisterItem
     */
    private $SROList;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfSroRegisterItem
     */
    public function getSROList()
    {
        return $this->SROList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfSroRegisterItem $SROList
     * @return SROList
     */
    public function withSROList($SROList)
    {
        $new = clone $this;
        $new->SROList = $SROList;

        return $new;
    }


}

