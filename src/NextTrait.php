<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Trait NextTrait
 * @package Behavioral\ChainOfResponsibility
 */
trait NextTrait
{

    /**
     * @param string $event
     * @param        $chain
     */
    protected function next(string $event, $chain): void
    {
        $handler = array_shift($chain);

        if (!isset($handler)) {
            return;
        }

        $handler = new $handler();
        $handler->request($event, $chain);
    }
}
