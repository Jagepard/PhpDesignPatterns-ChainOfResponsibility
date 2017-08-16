<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class NoticeHandler
 *
 * @package Behavioral\ChainOfResponsibility
 */
class NoticeHandler extends AbstractHandler
{

    /**
     * @param int   $message
     * @param array $chain
     */
    public function request(int $message, array $chain): void
    {
        print "NOTICE \n";
        $this->next($message, $chain);
    }
}