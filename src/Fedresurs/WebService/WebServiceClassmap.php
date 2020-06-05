<?php

namespace Fedresurs\WebService;

use Fedresurs\WebService\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class WebServiceClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('GetMessageIds', Type\GetMessageIds::class),
            new ClassMap('GetMessageIdsResponse', Type\GetMessageIdsResponse::class),
            new ClassMap('ArrayOfInt', Type\ArrayOfInt::class),
            new ClassMap('GetMessageContent', Type\GetMessageContent::class),
            new ClassMap('GetMessageContentResponse', Type\GetMessageContentResponse::class),
            new ClassMap('GetTradeMessageContent', Type\GetTradeMessageContent::class),
            new ClassMap('GetTradeMessageContentResponse', Type\GetTradeMessageContentResponse::class),
            new ClassMap('GetTradeMessages', Type\GetTradeMessages::class),
            new ClassMap('GetTradeMessagesResponse', Type\GetTradeMessagesResponse::class),
            new ClassMap('ArrayOfTradePlace', Type\ArrayOfTradePlace::class),
            new ClassMap('TradePlace', Type\TradePlace::class),
            new ClassMap('ArrayOfTrade', Type\ArrayOfTrade::class),
            new ClassMap('Trade', Type\Trade::class),
            new ClassMap('ArrayOfTradeMessage', Type\ArrayOfTradeMessage::class),
            new ClassMap('TradeMessage', Type\TradeMessage::class),
            new ClassMap('GetTradeMessagesByTrade', Type\GetTradeMessagesByTrade::class),
            new ClassMap('GetTradeMessagesByTradeResponse', Type\GetTradeMessagesByTradeResponse::class),
            new ClassMap('GetArbitrManagerRegister', Type\GetArbitrManagerRegister::class),
            new ClassMap('GetArbitrManagerRegisterResponse', Type\GetArbitrManagerRegisterResponse::class),
            new ClassMap('AMList', Type\AMList::class),
            new ClassMap('ArrayOfArbitrManagerRegisterItem', Type\ArrayOfArbitrManagerRegisterItem::class),
            new ClassMap('ArbitrManagerRegisterItem', Type\ArbitrManagerRegisterItem::class),
            new ClassMap('ArrayOfDateAffiliation', Type\ArrayOfDateAffiliation::class),
            new ClassMap('DateAffiliation', Type\DateAffiliation::class),
            new ClassMap('GetDebtorRegister', Type\GetDebtorRegister::class),
            new ClassMap('GetDebtorRegisterResponse', Type\GetDebtorRegisterResponse::class),
            new ClassMap('DebtorList', Type\DebtorList::class),
            new ClassMap('ArrayOfChoice1', Type\ArrayOfChoice1::class),
            new ClassMap('DebtorPerson', Type\DebtorPerson::class),
            new ClassMap('DebtorRegisterItem', Type\DebtorRegisterItem::class),
            new ClassMap('ArrayOfLegalCaseInfo', Type\ArrayOfLegalCaseInfo::class),
            new ClassMap('LegalCaseInfo', Type\LegalCaseInfo::class),
            new ClassMap('DebtorCompany', Type\DebtorCompany::class),
            new ClassMap('ArrayOfString', Type\ArrayOfString::class),
            new ClassMap('GetCompanyTradeOrganizerRegister', Type\GetCompanyTradeOrganizerRegister::class),
            new ClassMap('GetCompanyTradeOrganizerRegisterResponse', Type\GetCompanyTradeOrganizerRegisterResponse::class),
            new ClassMap('TradeOrganizerList', Type\TradeOrganizerList::class),
            new ClassMap('ArrayOfCompanyTradeOrganizerRegisterItem', Type\ArrayOfCompanyTradeOrganizerRegisterItem::class),
            new ClassMap('CompanyTradeOrganizerRegisterItem', Type\CompanyTradeOrganizerRegisterItem::class),
            new ClassMap('GetSroRegister', Type\GetSroRegister::class),
            new ClassMap('GetSroRegisterResponse', Type\GetSroRegisterResponse::class),
            new ClassMap('SROList', Type\SROList::class),
            new ClassMap('ArrayOfSroRegisterItem', Type\ArrayOfSroRegisterItem::class),
            new ClassMap('SroRegisterItem', Type\SroRegisterItem::class),
            new ClassMap('GetDebtorByIdBankrupt', Type\GetDebtorByIdBankrupt::class),
            new ClassMap('GetDebtorByIdBankruptResponse', Type\GetDebtorByIdBankruptResponse::class),
            new ClassMap('GetDebtorsByLastPublicationPeriod', Type\GetDebtorsByLastPublicationPeriod::class),
            new ClassMap('GetDebtorsByLastPublicationPeriodResponse', Type\GetDebtorsByLastPublicationPeriodResponse::class),
            new ClassMap('GetDebtorMessagesContentForPeriodByIdBankrupt', Type\GetDebtorMessagesContentForPeriodByIdBankrupt::class),
            new ClassMap('GetDebtorMessagesContentForPeriodByIdBankruptResponse', Type\GetDebtorMessagesContentForPeriodByIdBankruptResponse::class),
            new ClassMap('GetDebtorReportsContentForPeriodByIdBankrupt', Type\GetDebtorReportsContentForPeriodByIdBankrupt::class),
            new ClassMap('GetDebtorReportsContentForPeriodByIdBankruptResponse', Type\GetDebtorReportsContentForPeriodByIdBankruptResponse::class),
            new ClassMap('SearchDebtorByCode', Type\SearchDebtorByCode::class),
            new ClassMap('SearchDebtorByCodeResponse', Type\SearchDebtorByCodeResponse::class),
        ]);
    }


}

