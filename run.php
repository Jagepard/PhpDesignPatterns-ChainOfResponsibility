<?php

namespace Behavioral\ChainOfResponsibility;

require_once 'vendor/autoload.php';

$chain = new Chain();
$chain->addToChain(NoticeHandler::class);
$chain->addToChain(WarningHandler::class);
$chain->addToChain(ErrorHandler::class);
$chain->addToChain(NoticeHandler::class);
$chain->addToChain(WarningHandler::class);
$chain->addToChain(ErrorHandler::class);
$chain->addToChain(NoticeHandler::class);
$chain->addToChain(WarningHandler::class);
$chain->addToChain(ErrorHandler::class);

$chain->run(1);
$chain->run(2);
$chain->run(3);
$chain->run(7);
