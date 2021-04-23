<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

interface ChainInterface
{
    /**
     * @param string $request
     */
    public function execute(string $request): void;
}
