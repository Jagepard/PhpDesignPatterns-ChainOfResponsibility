<?php

require_once 'vendor/autoload.php';

$chain = new \Behavioral\ChainOfResponsibility\Chain();
$chain->addToChain(\Behavioral\ChainOfResponsibility\NoticeHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\WarningHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\ErrorHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\NoticeHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\WarningHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\ErrorHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\NoticeHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\WarningHandler::class);
$chain->addToChain(\Behavioral\ChainOfResponsibility\ErrorHandler::class);

$chain->run(1);
$chain->run(2);
$chain->run(3);
$chain->run(9);
