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
     * @param int   $count
     * @param array $chain
     * @return mixed
     */
    abstract public function request(int $count, array $chain);

    /**
     * @param int   $count
     * @param array $chain
     */
    protected function next(int $count, array $chain): void
    {
        $count--;

        if ($count) {
            array_shift($chain);
            $className = isset($chain[0]) ? $chain[0] : $chain;
            $nextClass = new $className;
            $nextClass->request($count, $chain);
        } else {
            print "\n";
        }
    }
}
