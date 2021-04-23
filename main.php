<?php

namespace Behavioral\ChainOfResponsibility;

require_once "./vendor/autoload.php";

// Create the starting element of the chain
// Создаём начальный элемент цепочки
$notice = new NoticeHandler();

try {
    // Add items to the chain.
    // Добавляем элементы в цепочку.
    $notice->setNext(new WarningHandler())->setNext(new ErrorHandler());

    printf("%s", "Call the handler by name:\n");
    $notice->execute("notice");
    $notice->execute("warning");
    $notice->execute("error");
    print "\n";

    printf("%s", "Call all handlers in the chain before request by name:\n");
    $notice->execute("notice", true);
    $notice->execute("warning", true);
    $notice->execute("error", true);
} catch (\Exception $e) {
    printf("%s", "Caught exception: " . $e->getMessage() . "\n");
}
