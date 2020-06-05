<?php

namespace Fedresurs\WebService;

use Fedresurs\WebService\Type;
use Fedresurs\WebService\Type\DebtorList;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class WebServiceClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetMessageIds $parameters
     * @return ResultInterface|Type\GetMessageIdsResponse
     * @throws SoapException
     */
    public function getMessageIds(\Fedresurs\WebService\Type\GetMessageIds $parameters) : \Fedresurs\WebService\Type\GetMessageIdsResponse
    {
        return $this->call('GetMessageIds', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetMessageContent $parameters
     * @return ResultInterface|Type\GetMessageContentResponse
     * @throws SoapException
     */
    public function getMessageContent(\Fedresurs\WebService\Type\GetMessageContent $parameters) : \Fedresurs\WebService\Type\GetMessageContentResponse
    {
        return $this->call('GetMessageContent', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTradeMessageContent $parameters
     * @return ResultInterface|Type\GetTradeMessageContentResponse
     * @throws SoapException
     */
    public function getTradeMessageContent(\Fedresurs\WebService\Type\GetTradeMessageContent $parameters) : \Fedresurs\WebService\Type\GetTradeMessageContentResponse
    {
        return $this->call('GetTradeMessageContent', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTradeMessages $parameters
     * @return ResultInterface|Type\GetTradeMessagesResponse
     * @throws SoapException
     */
    public function getTradeMessages(\Fedresurs\WebService\Type\GetTradeMessages $parameters) : Type\ArrayOfTradePlace
    {
        return $this->call('GetTradeMessages', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTradeMessagesByTrade $parameters
     * @return ResultInterface|Type\GetTradeMessagesByTradeResponse
     * @throws SoapException
     */
    public function getTradeMessagesByTrade(\Fedresurs\WebService\Type\GetTradeMessagesByTrade $parameters) : \Fedresurs\WebService\Type\GetTradeMessagesByTradeResponse
    {
        return $this->call('GetTradeMessagesByTrade', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetArbitrManagerRegister $parameters
     * @return ResultInterface|Type\GetArbitrManagerRegisterResponse
     * @throws SoapException
     */
    public function getArbitrManagerRegister(\Fedresurs\WebService\Type\GetArbitrManagerRegister $parameters) : \Fedresurs\WebService\Type\GetArbitrManagerRegisterResponse
    {
        return $this->call('GetArbitrManagerRegister', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDebtorRegister $parameters
     * @return ResultInterface|Type\GetDebtorRegisterResponse
     * @throws SoapException
     */
    public function getDebtorRegister(\Fedresurs\WebService\Type\GetDebtorRegister $parameters) : \Fedresurs\WebService\Type\GetDebtorRegisterResponse
    {
        return $this->call('GetDebtorRegister', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetCompanyTradeOrganizerRegister $parameters
     * @return ResultInterface|Type\GetCompanyTradeOrganizerRegisterResponse
     * @throws SoapException
     */
    public function getCompanyTradeOrganizerRegister(\Fedresurs\WebService\Type\GetCompanyTradeOrganizerRegister $parameters) : \Fedresurs\WebService\Type\GetCompanyTradeOrganizerRegisterResponse
    {
        return $this->call('GetCompanyTradeOrganizerRegister', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetSroRegister $parameters
     * @return ResultInterface|Type\GetSroRegisterResponse
     * @throws SoapException
     */
    public function getSroRegister(\Fedresurs\WebService\Type\GetSroRegister $parameters) : \Fedresurs\WebService\Type\GetSroRegisterResponse
    {
        return $this->call('GetSroRegister', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDebtorByIdBankrupt $parameters
     * @return ResultInterface|Type\GetDebtorByIdBankruptResponse
     * @throws SoapException
     */
    public function getDebtorByIdBankrupt(\Fedresurs\WebService\Type\GetDebtorByIdBankrupt $parameters) : \Fedresurs\WebService\Type\GetDebtorByIdBankruptResponse
    {
        return $this->call('GetDebtorByIdBankrupt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDebtorsByLastPublicationPeriod $parameters
     * @return ResultInterface|Type\GetDebtorsByLastPublicationPeriodResponse
     * @throws SoapException
     */
    public function getDebtorsByLastPublicationPeriod(\Fedresurs\WebService\Type\GetDebtorsByLastPublicationPeriod $parameters) : DebtorList
    {
        return $this->call('GetDebtorsByLastPublicationPeriod', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDebtorMessagesContentForPeriodByIdBankrupt $parameters
     * @return ResultInterface|Type\GetDebtorMessagesContentForPeriodByIdBankruptResponse
     * @throws SoapException
     */
    public function getDebtorMessagesContentForPeriodByIdBankrupt(\Fedresurs\WebService\Type\GetDebtorMessagesContentForPeriodByIdBankrupt $parameters) : \Fedresurs\WebService\Type\GetDebtorMessagesContentForPeriodByIdBankruptResponse
    {
        return $this->call('GetDebtorMessagesContentForPeriodByIdBankrupt', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetDebtorReportsContentForPeriodByIdBankrupt $parameters
     * @return ResultInterface|Type\GetDebtorReportsContentForPeriodByIdBankruptResponse
     * @throws SoapException
     */
    public function getDebtorReportsContentForPeriodByIdBankrupt(\Fedresurs\WebService\Type\GetDebtorReportsContentForPeriodByIdBankrupt $parameters) : \Fedresurs\WebService\Type\GetDebtorReportsContentForPeriodByIdBankruptResponse
    {
        return $this->call('GetDebtorReportsContentForPeriodByIdBankrupt', $parameters);
    }

    /**
     * @param RequestInterface|Type\SearchDebtorByCode $parameters
     * @return ResultInterface|Type\SearchDebtorByCodeResponse
     * @throws SoapException
     */
    public function searchDebtorByCode(\Fedresurs\WebService\Type\SearchDebtorByCode $parameters) : \Fedresurs\WebService\Type\SearchDebtorByCodeResponse
    {
        return $this->call('SearchDebtorByCode', $parameters);
    }


}
