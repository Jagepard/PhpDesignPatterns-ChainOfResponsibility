<?php

/**
 * @author  : Korotkov Danila <dankorot@gmail.com>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

trait NextTrait
{
    public function __invoke(): void
    {
        printf('%s' . PHP_EOL, __CLASS__);
    }
}
