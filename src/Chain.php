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
    use NextTrait;

    /**
     * @var array
     */
    protected $chain;

    /**
     * @param string $className
     */
    public function addToChain(string $className): void
    {
        $this->chain[] = $className;
    }

    /**
     * @param string $event
     */
    public function run(string $event): void
    {
        $this->next($event, $this->chain);
    }
}
