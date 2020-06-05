<?php

namespace Fedresurs\WebService\Type;

class GetMessageContentResponse
{

    /**
     * @var string
     */
    private $GetMessageContentResult;

    /**
     * @return string
     */
    public function getGetMessageContentResult()
    {
        return $this->GetMessageContentResult;
    }

    /**
     * @param string $GetMessageContentResult
     * @return GetMessageContentResponse
     */
    public function withGetMessageContentResult($GetMessageContentResult)
    {
        $new = clone $this;
        $new->GetMessageContentResult = $GetMessageContentResult;

        return $new;
    }


}

