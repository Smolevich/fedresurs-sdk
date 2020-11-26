<?php

namespace Fedresurs\WebService\Type;

class ArrayOfLegalCaseInfo
{

    /**
     * @var \Fedresurs\WebService\Type\LegalCaseInfo
     */
    private $LegalCaseInfo;

    /**
     * @return \Fedresurs\WebService\Type\LegalCaseInfo
     */
    public function getLegalCaseInfo()
    {
        return $this->LegalCaseInfo;
    }

    /**
     * @param \Fedresurs\WebService\Type\LegalCaseInfo $LegalCaseInfo
     * @return ArrayOfLegalCaseInfo
     */
    public function withLegalCaseInfo($LegalCaseInfo)
    {
        $new = clone $this;
        $new->LegalCaseInfo = $LegalCaseInfo;

        return $new;
    }


}

