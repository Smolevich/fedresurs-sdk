<?php

namespace Fedresurs\WebService\Type;

class GetDebtorMessagesContentForPeriodByIdBankruptResponse
{

    /**
     * @var string
     */
    private $GetDebtorMessagesContentForPeriodByIdBankruptResult;

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

