<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class AbstractHandler
 *
 * @package Behavioral\ChainOfResponsibility
 */
abstract class AbstractHandler
{

    /**
     * AbstractHandler constructor.
     * @param int   $count
     * @param array $chain
     */
    public function __construct(int $count, array $chain)
    {
        $this->request();

        array_shift($chain);
        $this->next($count - 1, $chain);
    }

    abstract public function request();

    /**
     * @param int   $count
     * @param array $chain
     */
    protected function next(int $count, array $chain): void
    {
        if ($count) {
            $className = $chain[0] ?? $chain;
            new $className($count, $chain);
        } else {
            print "\n";
        }
    }
}
