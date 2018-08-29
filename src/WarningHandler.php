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

    /**
     * @param string $event
     */
    public function request(string $event): void
    {
        if ($event == WarningHandler::class) {
            printf('%s' . PHP_EOL, 'WARNING');
            return;
        }
    }
}
