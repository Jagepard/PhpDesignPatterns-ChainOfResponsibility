<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\ChainOfResponsibility;

final class Mapping
{
    public string $notice  = NoticeHandler::class;
    public string $warning = WarningHandler::class;
    public string $error   = ErrorHandler::class;
}
