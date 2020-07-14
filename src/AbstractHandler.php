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
     * If the condition matches, code is executed;
     * if not, then it is passed along the chain to the next handler
     *
     * @param string $request
     */
    public function execute(string $request): void
    {
        // In case of compliance, the code is executed
        if ($request === get_called_class()) {
            printf("%s %s\n", get_called_class(), "has handle a request");
            return;
        }

        if (!isset($this->nextHandler)) {
            throw new \InvalidArgumentException($request . " does not exist in the chain");
        }

        // Passed to the next handler
        $this->nextHandler->execute($request);
    }

    public function executeAllInChainBeforeRequest(string $request): void
    {
        printf("%s %s\n", get_called_class(), "has handle a request");

        if ($request === get_called_class()) {
            return;
        }

        if (!isset($this->nextHandler)) {
            throw new \InvalidArgumentException($request . " does not exist in the chain");
        }

        // Passed to the next handler
        $this->nextHandler->executeAllInChainBeforeRequest($request);
    }

    /**
     * Adds the next handler to the chain
     *
     * @param AbstractHandler $handler
     * @return AbstractHandler
     */
    public function setNext(AbstractHandler $handler): AbstractHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }
}
