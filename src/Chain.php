<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

class Chain implements ChainInterface
{
    /**
     * @var array
     */
    private $chain = [];

    /**
     * @param  HandlerInterface  $handler
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
     * @param  string  $handlerName
     * @throws \Exception
     */
    public function execute(string $handlerName): void
    {
        if (!count($this->chain)) {
            throw new \Exception('The chain is empty');
        }

        if (array_key_exists($handlerName, $this->chain)) {
            foreach ($this->chain as $handler) {
                $handler->execute();

                if (get_class($handler) === $handlerName) {
                    return;
                }
            }
        }

        throw new \InvalidArgumentException('Handler does not exist in the chain');
    }
}
