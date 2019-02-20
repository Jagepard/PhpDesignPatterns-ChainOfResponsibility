<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Trait NextTrait
 * @package Behavioral\ChainOfResponsibility
 */
trait NextTrait
{
    public function __invoke(): void
    {
        printf('%s' . PHP_EOL, __CLASS__);
    }
}
