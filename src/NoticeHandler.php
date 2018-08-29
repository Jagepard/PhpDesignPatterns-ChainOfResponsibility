<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class NoticeHandler
 * @package Behavioral\ChainOfResponsibility
 */
class NoticeHandler extends AbstractHandler
{

    /**
     * @param $handler
     * @param $chain
     */
    public function request($handler, $chain): void
    {
        if ($handler == NoticeHandler::class) {
            printf('%s' . PHP_EOL, 'NOTICE');
            return;
        }

        $this->next($handler, $chain);
    }
}
