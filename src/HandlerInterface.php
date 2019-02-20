<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

/**
 * Interface HandlerInterface
 * @package Behavioral\ChainOfResponsibility
 */
interface HandlerInterface
{
    public function __invoke(): void;
}
