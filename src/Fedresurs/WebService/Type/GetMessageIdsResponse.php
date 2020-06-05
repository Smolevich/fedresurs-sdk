<?php

namespace Fedresurs\WebService\Type;

class GetMessageIdsResponse
{

    /**
     * @var \Fedresurs\WebService\Type\ArrayOfInt
     */
    private $GetMessageIdsResult;

    /**
     * @return \Fedresurs\WebService\Type\ArrayOfInt
     */
    public function getGetMessageIdsResult()
    {
        return $this->GetMessageIdsResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\ArrayOfInt $GetMessageIdsResult
     * @return GetMessageIdsResponse
     */
    public function withGetMessageIdsResult($GetMessageIdsResult)
    {
        $new = clone $this;
        $new->GetMessageIdsResult = $GetMessageIdsResult;

        return $new;
    }


}

