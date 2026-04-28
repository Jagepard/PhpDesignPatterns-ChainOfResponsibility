<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 * 
 * @legacy  This recursive node-based implementation is preserved for educational purposes.
 *          For production use, prefer ArrayChainHandler (array-based pipeline).
 *          Reason: explicit configuration, no hidden state, easier testing.
 * 
 * @legacy  Рекурсивная реализация на узлах сохранена для учебных целей.
 *          Для продакшена используйте ArrayChainHandler (массивный пайплайн).
 *          Причина: явная конфигурация, нет скрытого состояния, проще тестировать.
 */

namespace Behavioral\ChainOfResponsibility;

abstract class AbstractHandler implements ChainInterface
{
    protected AbstractHandler $next;

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
        $this->next = $handler;
        return $handler;
    }

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
    public function execute(string $request, bool $allChain = false): void
    {
        if ($allChain) {
            printf("%s %s\n", static::class, "has handle a request");

            if ($request === static::class) {
                return;
            }
        } else {
            // In case of compliance, the code is executed
            // В случае соответствия код выполняется
            if (static::class === $request) {
                printf("%s %s\n", $request, "has handle a request");
                return;
            }
        }

        if (!isset($this->next)) {
            throw new \InvalidArgumentException("$request does not exist in the chain");
        }

        // Passed to the next handler
        // Передано следующему обработчику
        $this->next->execute($request, $allChain); // ← эстафета передана
    }
}
