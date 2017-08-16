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
     * @var AbstractHandler
     */
    protected $next;

    /**
     * @param int   $message
     * @param array $chain
     */
    abstract public function request(int $message, array $chain);

    /**
     * @param AbstractHandler $next
     */
    public function setNext(AbstractHandler $next): void
    {
        $this->next = $next;
    }

    /**
     * @return AbstractHandler
     */
    public function getNext(): AbstractHandler
    {
        return $this->next;
    }


    /**
     * @param int   $message
     * @param array $chain
     */
    protected function next(int $message, array $chain): void
    {
        array_shift($chain);
        $message--;

        if ($message) {
            $className = isset($chain[0]) ? $chain[0] : $chain;
            $this->setNext(new $className);
            $this->getNext()->request($message, $chain);
        } else {
            print "\n";
        }
    }
}