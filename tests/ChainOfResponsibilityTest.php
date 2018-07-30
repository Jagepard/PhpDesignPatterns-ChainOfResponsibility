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
        $this->chain->addToChain(NoticeHandler::class);
        $this->chain->addToChain(WarningHandler::class);
        $this->chain->addToChain(ErrorHandler::class);
    }

    public function testChainRun(): void
    {
        ob_start();
        $this->chain->run(1);
        $notice = ob_get_clean();

        ob_start();
        $this->chain->run(2);
        $warning = ob_get_clean();

        ob_start();
        $this->chain->run(3);
        $error = ob_get_clean();

        $this->assertEquals($notice, "NOTICE\n\n");
        $this->assertEquals($warning, "NOTICE\nWARNING\n\n");
        $this->assertEquals($error, "NOTICE\nWARNING\nERROR\n\n");
    }
}
