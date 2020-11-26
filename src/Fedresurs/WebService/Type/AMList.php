<?php

namespace Fedresurs\WebService\Type;

class AMList
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfArbitrManagerRegisterItem
     */
    private $AMList;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfArbitrManagerRegisterItem
     */
    public function getAMList()
    {
        return $this->AMList;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfArbitrManagerRegisterItem $AMList
     * @return AMList
     */
    public function withAMList($AMList)
    {
        $new = clone $this;
        $new->AMList = $AMList;

        return $new;
    }


}

