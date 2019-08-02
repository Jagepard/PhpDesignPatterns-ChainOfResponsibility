<?php

declare(strict_types=1);

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

class Chain
{
    /**
     * @var array
     */
    private $chain = [];

    /**
     * @param HandlerInterface $handler
     */
    public function addToChain(HandlerInterface $handler): void
    {
        if (array_key_exists(get_class($handler), $this->chain)) {
            throw new \InvalidArgumentException('Handler already exists');
        }

        $this->chain[get_class($handler)] = $handler;
    }

    /**
     * @param string $event
     * @throws \Exception
     */
    public function run(string $event): void
    {
        if (!count($this->chain)) {
            throw new \Exception('Chain is empty');
        }

        foreach ($this->chain as $item) {
            $item->execute();

            if (get_class($item) === $event) {
                return;
            }
        }
    }
}
