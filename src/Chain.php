<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class Chain
 *
 * @package Behavioral\ChainOfResponsibility
 */
class Chain
{

    /**
     * @var
     */
    protected $chain;

    /**
     * @param $count
     */
    public function run(int $count): void
    {
        $itemName = $this->getChain(0);
        new $itemName($count, $this->getChain());
    }

    /**
     * @param $key
     *
     * @return null
     */
    public function getChain(int $key = null)
    {
        return $this->chain[$key] ?? $this->chain;
    }

    /**
     * @param string $className
     */
    public function addToChain(string $className): void
    {
        $this->chain[] = $className;
    }
}
