<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;

return Config::create()
    ->setEngine(ExtSoapEngineFactory::fromOptions(
        ExtSoapOptions::defaults('schema/schema.wsdl', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/Fedresurs/WebService/Type')
    ->setTypeNamespace('Fedresurs/WebService\Type')
    ->setClientDestination('src/Fedresurs/WebService')
    ->setClientName('WebServiceClient')
    ->setClientNamespace('Fedresurs\\WebService')
    ->setClassMapDestination('src/Fedresurs/WebService')
    ->setClassMapName('WebServiceClassmap')
    ->setClassMapNamespace('Fedresurs\\WebService')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
;
