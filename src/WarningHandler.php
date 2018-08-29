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
     * @param $handler
     * @param $chain
     */
    public function request(string $handler, $chain): void
    {
        if ($handler == WarningHandler::class) {
            printf('%s' . PHP_EOL, 'WARNING');
            return;
        }

        $this->next($handler, $chain);
    }
}
