<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class ErrorHandler
 * @package Behavioral\ChainOfResponsibility
 */
class ErrorHandler extends AbstractHandler
{

    /**
     * @param string $event
     */
    public function request(string $event): void
    {
        if ($event == ErrorHandler::class) {
            printf('%s' . PHP_EOL, 'ERROR');
            return;
        }
    }
}
