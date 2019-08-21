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
        $handlerName = get_class($handler);

        if (array_key_exists($handlerName, $this->chain)) {
            throw new \InvalidArgumentException('Handler already exists');
        }

        $this->chain[$handlerName] = $handler;
    }

    /**
     * @param string $event
     * @throws \Exception
     */
    public function run(string $event): void
    {
        if (count($this->chain) === 0) {
            throw new \Exception('Chain is empty');
        }

        if (array_key_exists($event, $this->chain)) {
            foreach ($this->chain as $item) {
                $item->execute();

                if (get_class($item) === $event) {
                    return;
                }
            }
        }

        throw new \InvalidArgumentException('Item does not exist in the Chain');
    }
}
