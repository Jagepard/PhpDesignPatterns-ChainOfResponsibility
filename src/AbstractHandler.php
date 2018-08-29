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
     * @param string $event
     * @param        $chain
     */
    abstract public function request(string $event, $chain): void;

    /**
     * @param string $event
     * @param        $chain
     */
    protected function next(string $event, $chain)
    {
        !is_array($chain) ?: array_shift($chain);

        if (!count($chain)) {
            return;
        }

        $handler = is_array($chain) ? new $chain[0]() : new $chain();
        $handler->request($event, $chain);
    }
}
