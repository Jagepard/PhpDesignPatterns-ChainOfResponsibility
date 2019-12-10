<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

class NoticeHandler implements HandlerInterface
{
    public function execute(): void
    {
        printf('%s'.PHP_EOL, __CLASS__);
    }
}
