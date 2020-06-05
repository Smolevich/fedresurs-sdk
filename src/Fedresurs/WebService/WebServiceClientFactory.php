<?php

namespace Fedresurs\WebService;

use Fedresurs\WebService\WebServiceClient;
use Fedresurs\WebService\WebServiceClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Handler\HandlerInterface;

class WebServiceClientFactory
{
    public static function factory(string $wsdl, HandlerInterface $handler) : WebServiceClient
    {
        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(WebServiceClassmap::getCollection()),
            $handler
        );
        $eventDispatcher = new EventDispatcher();

        return new WebServiceClient($engine, $eventDispatcher);
    }
}
