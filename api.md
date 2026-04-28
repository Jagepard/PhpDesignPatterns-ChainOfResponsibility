## Table of contents
- [Behavioral\ChainOfResponsibility\ChainHandler](#behavioral_chainofresponsibility_chainhandler)
- [Behavioral\ChainOfResponsibility\ChainInterface](#behavioral_chainofresponsibility_chaininterface)
- [Behavioral\ChainOfResponsibility\ErrorHandler](#behavioral_chainofresponsibility_errorhandler)
- [Behavioral\ChainOfResponsibility\HandlerInterface](#behavioral_chainofresponsibility_handlerinterface)
- [Behavioral\ChainOfResponsibility\NoticeHandler](#behavioral_chainofresponsibility_noticehandler)
- [Behavioral\ChainOfResponsibility\WarningHandler](#behavioral_chainofresponsibility_warninghandler)
<hr>

<a id="behavioral_chainofresponsibility_chainhandler"></a>

### Class: Behavioral\ChainOfResponsibility\ChainHandler
| Visibility | Function |
|:-----------|:---------|
| public | `__construct(array $chain)`<br>Initialize the chain with an array of handlers<br>----------------------------------------------<br>Инициализирует цепочку массивом обработчиков |
| public | `execute(string $request, bool $allChain): void`<br>Execute handlers in sequence based on request type<br>--------------------------------------------------<br>Выполняет обработчики последовательно по типу запроса |


<a id="behavioral_chainofresponsibility_chaininterface"></a>

### Class: Behavioral\ChainOfResponsibility\ChainInterface
| Visibility | Function |
|:-----------|:---------|
| abstract public | `execute(string $request, bool $allChain): void`<br> |


<a id="behavioral_chainofresponsibility_errorhandler"></a>

### Class: Behavioral\ChainOfResponsibility\ErrorHandler
| Visibility | Function |
|:-----------|:---------|


<a id="behavioral_chainofresponsibility_handlerinterface"></a>

### Class: Behavioral\ChainOfResponsibility\HandlerInterface
| Visibility | Function |
|:-----------|:---------|


<a id="behavioral_chainofresponsibility_noticehandler"></a>

### Class: Behavioral\ChainOfResponsibility\NoticeHandler
| Visibility | Function |
|:-----------|:---------|


<a id="behavioral_chainofresponsibility_warninghandler"></a>

### Class: Behavioral\ChainOfResponsibility\WarningHandler
| Visibility | Function |
|:-----------|:---------|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
