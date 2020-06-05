<?php

namespace Fedresurs\WebService\Type;

class GetMessageContent
{

    /**
     * @var int
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return GetMessageContent
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }


}

