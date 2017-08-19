<?php

declare(strict_types = 1);

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
     * @param $message
     *
     * @return mixed|void
     */
    public function run($message): void
    {
        $itemName = $this->getChain(0);
        $chain    = new $itemName;
        $chain->request($message, $this->getChain());
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
     * @param string $chain
     */
    public function addToChain(string $chain): void
    {
        $this->chain[] = $chain;
    }
}
