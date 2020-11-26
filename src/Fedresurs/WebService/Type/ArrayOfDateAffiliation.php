<?php

namespace Fedresurs\WebService\Type;

class ArrayOfDateAffiliation
{

    /**
     * @var \Fedresurs\WebService\Type\DateAffiliation
     */
    private $DateAffiliation;

    /**
     * @return \Fedresurs\WebService\Type\DateAffiliation
     */
    public function getDateAffiliation()
    {
        return $this->DateAffiliation;
    }

    /**
     * @param \Fedresurs\WebService\Type\DateAffiliation $DateAffiliation
     * @return ArrayOfDateAffiliation
     */
    public function withDateAffiliation($DateAffiliation)
    {
        $new = clone $this;
        $new->DateAffiliation = $DateAffiliation;

        return $new;
    }


}

