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
    public function request(string $event, $chain): void
    {
        $this->message($event);
        $this->next($event, $chain);
    }

    /**
     * @param string $event
     * @param        $chain
     * @return mixed
     */
    abstract protected function next(string $event, $chain): void;

    /**
     * @param string $event
     */
    protected function message(string $event): void
    {
        if ($event == static::class) {
            printf('%s' . PHP_EOL, $event);
            return;
        }
    }
}
