<?php

namespace Fedresurs\WebService\Type;

class ArrayOfArbitrManagerRegisterItem
{

    /**
     * @var \Fedresurs\WebService\Type\ArbitrManagerRegisterItem
     */
    private $ArbitrManager;

    /**
     * @return \Fedresurs\WebService\Type\ArbitrManagerRegisterItem
     */
    public function getArbitrManager()
    {
        return $this->ArbitrManager;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArbitrManagerRegisterItem $ArbitrManager
     * @return ArrayOfArbitrManagerRegisterItem
     */
    public function withArbitrManager($ArbitrManager)
    {
        $new = clone $this;
        $new->ArbitrManager = $ArbitrManager;

        return $new;
    }


}

