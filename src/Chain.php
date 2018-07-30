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
     * @param int $count
     */
    public function run(int $count): void
    {
        if (count($this->chain)) {
            $firstChain = new $this->chain[0]();
            $firstChain($count, $this->chain);
        }
    }

    /**
     * @param string $className
     */
    public function addToChain(string $className): void
    {
        $this->chain[] = $className;
    }
}
