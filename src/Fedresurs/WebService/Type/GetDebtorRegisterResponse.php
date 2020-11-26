<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetDebtorRegisterResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var \Fedresurs\WebService\Type\DebtorList
     */
    private $GetDebtorRegisterResult;

    /**
     * @return \Fedresurs\WebService\Type\DebtorList|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetDebtorRegisterResult;
    }

    /**
     * @return \Fedresurs\WebService\Type\DebtorList
     */
    public function getGetDebtorRegisterResult()
    {
        return $this->GetDebtorRegisterResult;
    }

    /**
     * @param \Fedresurs\WebService\Type\DebtorList $GetDebtorRegisterResult
     * @return GetDebtorRegisterResponse
     */
    public function withGetDebtorRegisterResult($GetDebtorRegisterResult)
    {
        $new = clone $this;
        $new->GetDebtorRegisterResult = $GetDebtorRegisterResult;

        return $new;
    }


}

