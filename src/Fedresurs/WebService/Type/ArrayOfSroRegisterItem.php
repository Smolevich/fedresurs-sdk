<?php

namespace Fedresurs\WebService\Type;

class ArrayOfSroRegisterItem
{

    /**
     * @var \Fedresurs\WebService\Type\SroRegisterItem
     */
    private $SRO;

    /**
     * @return \Fedresurs\WebService\Type\SroRegisterItem
     */
    public function getSRO()
    {
        return $this->SRO;
    }

    /**
     * @param \Fedresurs\WebService\Type\SroRegisterItem $SRO
     * @return ArrayOfSroRegisterItem
     */
    public function withSRO($SRO)
    {
        $new = clone $this;
        $new->SRO = $SRO;

        return $new;
    }


}

