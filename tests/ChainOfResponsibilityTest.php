<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility\Tests;

use Behavioral\ChainOfResponsibility\Chain;
use Behavioral\ChainOfResponsibility\ErrorHandler;
use Behavioral\ChainOfResponsibility\NoticeHandler;
use Behavioral\ChainOfResponsibility\WarningHandler;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class ChainOfResponsibilityTest
 * @package Behavioral\ChainOfResponsibility\Tests
 */
class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Chain
     */
    protected $chain;

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
        $this->chain->run(NoticeHandler::class);
        $notice = ob_get_clean();

        ob_start();
        $this->chain->run(WarningHandler::class);
        $warning = ob_get_clean();

        ob_start();
        $this->chain->run(ErrorHandler::class);
        $error = ob_get_clean();

        $this->assertEquals($notice, NoticeHandler::class . "\n");
        $this->assertEquals($warning, $notice . WarningHandler::class . "\n");
        $this->assertEquals($error, $warning . ErrorHandler::class . "\n");
    }
}
