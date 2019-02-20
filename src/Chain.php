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
    protected $chain = [];

    /**
     * @param HandlerInterface $handler
     */
    public function addToChain(HandlerInterface $handler): void
    {
        $this->chain[get_class($handler)] = $handler;
    }

    /**
     * @param string $event
     */
    public function run(string $event): void
    {
        foreach ($this->chain as $item) {
            $item();

            if (get_class($item) == $event) {
                return;
            }
        }
    }
}
