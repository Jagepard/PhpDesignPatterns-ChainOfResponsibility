<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class AbstractHandler
 * @package Behavioral\ChainOfResponsibility
 */
abstract class AbstractHandler
{

    /**
     * AbstractHandler constructor.
     * @param int   $count
     * @param array $chain
     */
    public function __invoke(int $count, array $chain)
    {
        array_shift($chain);
        $this->request();
        $this->next($count - 1, $chain);
    }

    /**
     * @param int   $count
     * @param array $chain
     */
    protected function next(int $count, array $chain): void
    {
        if (!($count and count($chain))) {
            printf(PHP_EOL);
            return;
        }

        $nextChain = new $chain[0] ?? new $chain;
        $nextChain($count, $chain);
    }

    abstract public function request();
}
