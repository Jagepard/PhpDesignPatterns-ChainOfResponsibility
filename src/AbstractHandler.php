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
     * -------------------------------------------------------------
     * Если условие совпадает, код выполняется;
     * Если нет, то он передается по цепочке следующему обработчику
     *
     * @param string $request
     * @param bool $allInChain
     */
    public function execute(string $request, bool $allInChain = false): void
    {
        $calledClassName = get_called_class();

        if ($allInChain) {
            printf("%s %s\n", $calledClassName, "has handle a request");

            if ($request === $calledClassName) {
                return;
            }
        } else {
            // In case of compliance, the code is executed
            // В случае соответствия код выполняется
            if ($request === $calledClassName) {
                printf("%s %s\n", $calledClassName, "has handle a request");
                return;
            }
        }

        if (!isset($this->nextHandler)) {
            throw new \InvalidArgumentException($request . " does not exist in the chain");
        }

        // Passed to the next handler
        // Передано следующему обработчику
        $this->nextHandler->execute($request, $allInChain);
    }

    /**
     * Adds the next handler to the chain
     * ----------------------------------
     * Добавляет следующий обработчик в цепочку
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
