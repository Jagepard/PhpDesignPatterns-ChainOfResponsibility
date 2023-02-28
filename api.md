## Table of contents
- [Behavioral\ChainOfResponsibility\AbstractHandler](#behavioral_chainofresponsibility_abstracthandler)
- [Behavioral\ChainOfResponsibility\ChainInterface](#behavioral_chainofresponsibility_chaininterface)
- [Behavioral\ChainOfResponsibility\ErrorHandler](#behavioral_chainofresponsibility_errorhandler)
- [Behavioral\ChainOfResponsibility\NoticeHandler](#behavioral_chainofresponsibility_noticehandler)
- [Behavioral\ChainOfResponsibility\WarningHandler](#behavioral_chainofresponsibility_warninghandler)
<hr>

<a id="behavioral_chainofresponsibility_abstracthandler"></a>

### Class: Behavioral\ChainOfResponsibility\AbstractHandler
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>( string $request  bool $allInChain ): void</em><br>If the condition matches, code is executed;<br>if not, then it is passed along the chain to the next handler<br>Если условие совпадает, код выполняется;<br>Если нет, то он передается по цепочке следующему обработчику|
|public|<em><strong>setNext</strong>( Behavioral\ChainOfResponsibility\AbstractHandler $handler ): Behavioral\ChainOfResponsibility\AbstractHandler</em><br>Adds the next handler to the chain<br>Добавляет следующий обработчик в цепочку|


<a id="behavioral_chainofresponsibility_chaininterface"></a>

### Class: Behavioral\ChainOfResponsibility\ChainInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>execute</strong>( string $request ): void</em><br>|


<a id="behavioral_chainofresponsibility_errorhandler"></a>

### Class: Behavioral\ChainOfResponsibility\ErrorHandler
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>( string $request  bool $allInChain ): void</em><br>If the condition matches, code is executed;<br>if not, then it is passed along the chain to the next handler<br>Если условие совпадает, код выполняется;<br>Если нет, то он передается по цепочке следующему обработчику|
|public|<em><strong>setNext</strong>( Behavioral\ChainOfResponsibility\AbstractHandler $handler ): Behavioral\ChainOfResponsibility\AbstractHandler</em><br>Adds the next handler to the chain<br>Добавляет следующий обработчик в цепочку|


<a id="behavioral_chainofresponsibility_noticehandler"></a>

### Class: Behavioral\ChainOfResponsibility\NoticeHandler
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>( string $request  bool $allInChain ): void</em><br>If the condition matches, code is executed;<br>if not, then it is passed along the chain to the next handler<br>Если условие совпадает, код выполняется;<br>Если нет, то он передается по цепочке следующему обработчику|
|public|<em><strong>setNext</strong>( Behavioral\ChainOfResponsibility\AbstractHandler $handler ): Behavioral\ChainOfResponsibility\AbstractHandler</em><br>Adds the next handler to the chain<br>Добавляет следующий обработчик в цепочку|


<a id="behavioral_chainofresponsibility_warninghandler"></a>

### Class: Behavioral\ChainOfResponsibility\WarningHandler
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>execute</strong>( string $request  bool $allInChain ): void</em><br>If the condition matches, code is executed;<br>if not, then it is passed along the chain to the next handler<br>Если условие совпадает, код выполняется;<br>Если нет, то он передается по цепочке следующему обработчику|
|public|<em><strong>setNext</strong>( Behavioral\ChainOfResponsibility\AbstractHandler $handler ): Behavioral\ChainOfResponsibility\AbstractHandler</em><br>Adds the next handler to the chain<br>Добавляет следующий обработчик в цепочку|
<hr>