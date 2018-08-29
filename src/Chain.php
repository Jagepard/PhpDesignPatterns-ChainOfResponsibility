<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class Chain
 * @package Behavioral\ChainOfResponsibility
 */
class Chain
{

    /**
     * @var array
     */
    protected $chain;

    /**
     * @param string $event
     */
    public function run(string $event): void
    {
        $handler = new $this->chain[0]();
        array_shift($this->chain);
        !isset($this->chain) ?: $handler->request($event, $this->chain) ;
    }

    /**
     * @param string $className
     */
    public function addToChain(string $className): void
    {
        $this->chain[] = $className;
    }
}
