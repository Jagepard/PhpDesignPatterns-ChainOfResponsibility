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
     * @param $handler
     * @param $chain
     */
    public function request($handler, $chain): void
    {
        if ($handler == ErrorHandler::class) {
            printf('%s' . PHP_EOL, 'ERROR');
            return;
        }

        $this->next($handler, $chain);
    }
}
