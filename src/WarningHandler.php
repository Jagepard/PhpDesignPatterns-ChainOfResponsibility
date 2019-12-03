<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

class WarningHandler implements HandlerInterface
{
    public function execute(): void
    {
        printf('%s' . PHP_EOL, __CLASS__);
    }
}
