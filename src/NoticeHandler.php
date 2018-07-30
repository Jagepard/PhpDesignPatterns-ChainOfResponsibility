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

    public function request(): void
    {
        printf('%s' . PHP_EOL, 'NOTICE');
    }
}
