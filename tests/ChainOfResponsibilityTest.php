<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility\Tests;

use Behavioral\ChainOfResponsibility\{ChainInterface, ErrorHandler, NoticeHandler, WarningHandler};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{
    protected ChainInterface $chain;

    protected function setUp(): void
    {
        $this->chain = new NoticeHandler();
        $this->chain->setNext(new WarningHandler())->setNext(new ErrorHandler);
    }

    public function testNoticeHandler(): void
    {
        ob_start();
        $this->chain->execute("notice");
        $notice = ob_get_clean();

        $this->assertEquals($notice, NoticeHandler::class . " has handle a request\n");
    }

    public function testWarningHandler(): void
    {
        ob_start();
        $this->chain->execute("warning");
        $warning = ob_get_clean();

        $this->assertEquals($warning, WarningHandler::class . " has handle a request\n");
    }

    public function testErrorHandler(): void
    {
        ob_start();
        $this->chain->execute("error");
        $error = ob_get_clean();

        $this->assertEquals($error, ErrorHandler::class . " has handle a request\n");
    }

    public function testAllNoticeHandler(): void
    {
        ob_start();
        $this->chain->execute("notice", true);
        $notice = ob_get_clean();

        $this->assertEquals($notice, NoticeHandler::class . " has handle a request\n");
    }

    public function testAllWarningHandler(): void
    {
        ob_start();
        $this->chain->execute("warning", true);
        $warning = ob_get_clean();

        $this->assertEquals($warning,
            NoticeHandler::class . " has handle a request\n"
            . WarningHandler::class . " has handle a request\n"
        );
    }

    public function testAllErrorHandler(): void
    {
        ob_start();
        $this->chain->execute("error", true);
        $error = ob_get_clean();

        $this->assertEquals($error,
            NoticeHandler::class . " has handle a request\n"
            . WarningHandler::class . " has handle a request\n"
            . ErrorHandler::class . " has handle a request\n"
        );
    }
}
