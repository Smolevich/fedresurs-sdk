<?php

namespace Fedresurs\WebService\Type;

class SearchDebtorByCode
{

    /**
     * @var string
     */
    private $codeType;

    /**
     * @var string
     */
    private $codeValue;

    /**
     * @return string
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * @param string $codeType
     * @return SearchDebtorByCode
     */
    public function withCodeType($codeType)
    {
        $new = clone $this;
        $new->codeType = $codeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodeValue()
    {
        return $this->codeValue;
    }

    /**
     * @param string $codeValue
     * @return SearchDebtorByCode
     */
    public function withCodeValue($codeValue)
    {
        $new = clone $this;
        $new->codeValue = $codeValue;

        return $new;
    }


}

