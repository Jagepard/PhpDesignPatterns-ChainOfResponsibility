<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ChainOfResponsibilityTest extends PHPUnit_Framework_TestCase
{

    protected $chain;

    protected function setUp(): void
    {
        $this->chain = new \Behavioral\ChainOfResponsibility\Chain();
        $this->chain->addToChain(\Behavioral\ChainOfResponsibility\NoticeHandler::class);
        $this->chain->addToChain(\Behavioral\ChainOfResponsibility\WarningHandler::class);
        $this->chain->addToChain(\Behavioral\ChainOfResponsibility\ErrorHandler::class);
    }

    public function testChainRun(): void
    {
        ob_start();
        $this->getChain()->run(1);
        $notice = ob_get_clean();

        ob_start();
        $this->getChain()->run(2);
        $warning = ob_get_clean();

        ob_start();
        $this->getChain()->run(3);
        $error = ob_get_clean();

        $this->assertEquals($notice, "NOTICE \n\n");
        $this->assertEquals($warning, "NOTICE \nWARNING \n\n");
        $this->assertEquals($error, "NOTICE \nWARNING \nERROR \n\n");
    }

    /**
     * @return mixed
     */
    public function getChain()
    {
        return $this->chain;
    }
}