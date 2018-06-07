<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class WarningHandler
 * @package Behavioral\ChainOfResponsibility
 */
class WarningHandler extends AbstractHandler
{

    public function request(): void
    {
        printf('%s' . PHP_EOL, 'WARNING');
    }
}
