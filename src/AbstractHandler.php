<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

abstract class AbstractHandler implements ChainInterface
{
    protected AbstractHandler $nextHandler;

    /**
     * @param string $request
     */
    public function execute(string $request): void
    {
        if ($request === get_called_class()) {
            printf("%s %s".PHP_EOL, get_called_class(), "has handle an error");
            return;
        }

        if (!isset($this->nextHandler)) {
            throw new \InvalidArgumentException($request . " does not exist in the chain");
        }

        $this->nextHandler->execute($request);
    }

    /**
     * @param AbstractHandler $handler
     * @return AbstractHandler
     */
    public function setNext(AbstractHandler $handler): AbstractHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }
}
