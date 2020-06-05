<?php

namespace Fedresurs\WebService;

use Fedresurs\WebService\WebServiceClient;
use Fedresurs\WebService\WebServiceClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class WebServiceClientFactory
{

    public static function factory(string $wsdl) : \Fedresurs\WebService\WebServiceClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(WebServiceClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new WebServiceClient($engine, $eventDispatcher);
    }


}

