<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility\Tests;

use Behavioral\ChainOfResponsibility\{ChainInterface, ChainHandler, ErrorHandler, NoticeHandler, WarningHandler};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{
    protected ChainInterface $handler;

    protected function setUp(): void
    {
        $chain = [
            new NoticeHandler(),
            new WarningHandler(),
            new ErrorHandler()
        ];

        $this->handler = new ChainHandler($chain);
    }

    public function testNoticeHandler(): void
    {
        ob_start();
        $this->handler->execute(NoticeHandler::class);
        $notice = ob_get_clean();

        $this->assertEquals($notice, NoticeHandler::class . " has handle a request\n");
    }

    public function testWarningHandler(): void
    {
        ob_start();
        $this->handler->execute(WarningHandler::class);
        $warning = ob_get_clean();

        $this->assertEquals($warning, WarningHandler::class . " has handle a request\n");
    }

    public function testErrorHandler(): void
    {
        ob_start();
        $this->handler->execute(ErrorHandler::class);
        $error = ob_get_clean();

        $this->assertEquals($error, ErrorHandler::class . " has handle a request\n");
    }

    public function testAllNoticeHandler(): void
    {
        ob_start();
        $this->handler->execute(NoticeHandler::class, true);
        $notice = ob_get_clean();

        $this->assertEquals($notice, NoticeHandler::class . " has handle a request\n");
    }

    public function testAllWarningHandler(): void
    {
        ob_start();
        $this->handler->execute(WarningHandler::class, true);
        $warning = ob_get_clean();

        $this->assertEquals($warning,
            NoticeHandler::class . " has handle a request\n"
            . WarningHandler::class . " has handle a request\n"
        );
    }

    public function testAllErrorHandler(): void
    {
        ob_start();
        $this->handler->execute(ErrorHandler::class, true);
        $error = ob_get_clean();

        $this->assertEquals($error,
            NoticeHandler::class . " has handle a request\n"
            . WarningHandler::class . " has handle a request\n"
            . ErrorHandler::class . " has handle a request\n"
        );
    }
}
