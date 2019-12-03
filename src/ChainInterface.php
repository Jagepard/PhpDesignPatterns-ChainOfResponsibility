<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

interface ChainInterface
{
    /**
     * @param HandlerInterface $handler
     */
    public function addToChain(HandlerInterface $handler): void;

    /**
     * @param string $event
     */
    public function run(string $event): void;
}