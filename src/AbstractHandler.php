<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

abstract class AbstractHandler implements ChainInterface
{
    protected string $name;
    protected AbstractHandler $nextHandler;

    /**
     * If the condition matches, code is executed;
     * if not, then it is passed along the chain to the next handler
     */
    public function execute(string $request, bool $allInChain = false): void
    {
        if ($allInChain) {
            printf("%s %s\n", get_called_class(), "has handle a request");

            if ($request === $this->getName()) {
                return;
            }
        } else {
            // In case of compliance, the code is executed
            if ($request === $this->getName()) {
                printf("%s %s\n", get_called_class(), "has handle a request");
                return;
            }
        }

        if (!isset($this->nextHandler)) {
            throw new \InvalidArgumentException($request . " does not exist in the chain");
        }

        // Passed to the next handler
        $this->nextHandler->execute($request, $allInChain);
    }

    /**
     * Adds the next handler to the chain
     */
    public function setNext(AbstractHandler $handler): AbstractHandler
    {
        $this->nextHandler = $handler;
        return $handler;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
