<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 * 
 * @primary This is the recommended array-based implementation.
 *          Configuration is explicit, flow is linear, no hidden state.
 * 
 * @primary Это рекомендуемая реализация на массивах.
 *          Конфигурация явная, поток линейный, нет скрытого состояния.
 */

namespace Behavioral\ChainOfResponsibility;

class ChainHandler implements ChainInterface 
{
    /**
     * Initialize the chain with an array of handlers
     * ----------------------------------------------
     * Инициализирует цепочку массивом обработчиков
     *
     * @param array<int, ChainInterface> $chain
     */
    public function __construct(private array $chain) {}

    /**
     * Execute handlers in sequence based on request type
     * --------------------------------------------------
     * Выполняет обработчики последовательно по типу запроса
     *
     * @param string $request    Target handler class name (or parent class)
     * @param bool   $allChain   If true, execute all handlers up to target; if false, execute only target
     * @return void
     */
    public function execute(string $request, bool $allChain = false): void
    {
        foreach ($this->chain as $handler) {
            if ($allChain) {
                printf("%s %s\n", $handler::class, "has handle a request");

                if ($handler instanceof $request) {
                    return;
                }
            } else {
                if ($handler instanceof $request) {
                    printf("%s %s\n", $request, "has handle a request");
                    return;
                }
            }
        }

        throw new \InvalidArgumentException("$request does not exist in the chain");
    }
}
