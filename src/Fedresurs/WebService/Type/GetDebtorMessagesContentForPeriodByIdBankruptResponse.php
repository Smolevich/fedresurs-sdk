<?php

namespace Fedresurs\WebService\Type;


use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Type\ResultProviderInterface;

class GetDebtorMessagesContentForPeriodByIdBankruptResponse implements ResultInterface, ResultProviderInterface
{

    /**
     * @var string
     */
    private $GetDebtorMessagesContentForPeriodByIdBankruptResult;

    /**
     * @return string|ResultInterface
     */
    public function getResult() : \Phpro\SoapClient\Type\ResultInterface
    {
        return $this->GetDebtorMessagesContentForPeriodByIdBankruptResult;
    }

    /**
     * @return string
     */
    public function getGetDebtorMessagesContentForPeriodByIdBankruptResult()
    {
        return $this->GetDebtorMessagesContentForPeriodByIdBankruptResult;
    }

    /**
     * @param string $GetDebtorMessagesContentForPeriodByIdBankruptResult
     * @return GetDebtorMessagesContentForPeriodByIdBankruptResponse
     */
    public function withGetDebtorMessagesContentForPeriodByIdBankruptResult($GetDebtorMessagesContentForPeriodByIdBankruptResult)
    {
        $new = clone $this;
        $new->GetDebtorMessagesContentForPeriodByIdBankruptResult = $GetDebtorMessagesContentForPeriodByIdBankruptResult;

        return $new;
    }


}

