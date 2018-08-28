<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Class AbstractHandler
 * @package Behavioral\ChainOfResponsibility
 */
abstract class AbstractHandler
{

    abstract public function request();
}
