<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility\Tests;

use Behavioral\ChainOfResponsibility\{
    Chain,
    ErrorHandler,
    NoticeHandler,
    WarningHandler,
    ChainInterface
};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{
    protected ChainInterface $chain;

    protected function setUp(): void
    {
        $this->chain = new Chain();
        $this->chain->addToChain(new NoticeHandler);
        $this->chain->addToChain(new WarningHandler);
        $this->chain->addToChain(new ErrorHandler);
    }

    public function testChainRun(): void
    {
        ob_start();
        $this->chain->execute(NoticeHandler::class);
        $notice = ob_get_clean();

        ob_start();
        $this->chain->execute(WarningHandler::class);
        $warning = ob_get_clean();

        ob_start();
        $this->chain->execute(ErrorHandler::class);
        $error = ob_get_clean();

        $this->assertEquals($notice, NoticeHandler::class . "\n");
        $this->assertEquals($warning, $notice . WarningHandler::class . "\n");
        $this->assertEquals($error, $warning . ErrorHandler::class . "\n");
    }
}
