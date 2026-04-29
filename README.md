[![PHPunit](https://github.com/Jagepard/PhpDesignPatterns-ChainOfResponsibility/actions/workflows/php.yml/badge.svg)](https://github.com/Jagepard/PhpDesignPatterns-ChainOfResponsibility/actions/workflows/php.yml)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Jagepard/PhpDesignPatterns-ChainOfResponsibility/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Jagepard/PhpDesignPatterns-ChainOfResponsibility/?branch=master)
[![Code Climate](https://codeclimate.com/github/Jagepard/PhpDesignPatterns-ChainOfResponsibility/badges/gpa.svg)](https://codeclimate.com/github/Jagepard/PhpDesignPatterns-ChainOfResponsibility)
[![License: MIT](https://img.shields.io/badge/license-MIT-498e7f.svg)](https://mit-license.org/)
-----

# ChainOfResponsibility | [API](https://github.com/Jagepard/PhpDesignPatterns-ChainOfResponsibility/blob/master/api.md)
```php run``` execute in terminal

- ✅ **ChainHandler** (массив) — основной вариант. Конфигурация через массив, явный поток.
- 🗃️ **Legacy/AbstractHandler** — рекурсивный узел. Сохранён для истории и сравнения подходов.

> Правило: если не уверен — используй массивный. Он проще, тестируемее и предсказуемее.

## Result:
```
Behavioral\ChainOfResponsibility\NoticeHandler has handle a request
Behavioral\ChainOfResponsibility\WarningHandler has handle a request
Behavioral\ChainOfResponsibility\ErrorHandler has handle a request

Behavioral\ChainOfResponsibility\NoticeHandler has handle a request
Behavioral\ChainOfResponsibility\NoticeHandler has handle a request
Behavioral\ChainOfResponsibility\WarningHandler has handle a request
Behavioral\ChainOfResponsibility\NoticeHandler has handle a request
Behavioral\ChainOfResponsibility\WarningHandler has handle a request
Behavioral\ChainOfResponsibility\ErrorHandler has handle a request
```
