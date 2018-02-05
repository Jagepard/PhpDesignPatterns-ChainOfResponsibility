<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class ErrorHandler
 * @package Behavioral\ChainOfResponsibility
 */
class ErrorHandler extends AbstractHandler
{

    /**
     * @param int   $count
     * @param array $chain
     */
    public function request(int $count, array $chain): void
    {
        print "ERROR \n";

        $this->next($count, $chain);
    }
}
