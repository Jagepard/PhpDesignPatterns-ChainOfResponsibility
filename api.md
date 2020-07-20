## Table of contents

- [\Behavioral\ChainOfResponsibility\AbstractHandler (abstract)](#class-behavioralchainofresponsibilityabstracthandler-abstract)
- [\Behavioral\ChainOfResponsibility\ChainInterface (interface)](#interface-behavioralchainofresponsibilitychaininterface)
- [\Behavioral\ChainOfResponsibility\ErrorHandler](#class-behavioralchainofresponsibilityerrorhandler)
- [\Behavioral\ChainOfResponsibility\NoticeHandler](#class-behavioralchainofresponsibilitynoticehandler)
- [\Behavioral\ChainOfResponsibility\WarningHandler](#class-behavioralchainofresponsibilitywarninghandler)

<hr />

### Class: \Behavioral\ChainOfResponsibility\AbstractHandler (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>\string</em> <strong>$request</strong>, <em>\bool</em> <strong>$allInChain=false</strong>)</strong> : <em>void</em><br /><em>If the condition matches, code is executed; if not, then it is passed along the chain to the next handler</em> |
| public | <strong>getName()</strong> : <em>mixed</em> |
| public | <strong>setNext(</strong><em>[\Behavioral\ChainOfResponsibility\AbstractHandler](#class-behavioralchainofresponsibilityabstracthandler-abstract)</em> <strong>$handler</strong>)</strong> : <em>void</em><br /><em>Adds the next handler to the chain</em> |

*This class implements [\Behavioral\ChainOfResponsibility\ChainInterface](#interface-behavioralchainofresponsibilitychaininterface)*

<hr />

### Interface: \Behavioral\ChainOfResponsibility\ChainInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute(</strong><em>\string</em> <strong>$request</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\ChainOfResponsibility\ErrorHandler

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Behavioral\ChainOfResponsibility\AbstractHandler](#class-behavioralchainofresponsibilityabstracthandler-abstract)*

*This class implements [\Behavioral\ChainOfResponsibility\ChainInterface](#interface-behavioralchainofresponsibilitychaininterface)*

<hr />

### Class: \Behavioral\ChainOfResponsibility\NoticeHandler

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Behavioral\ChainOfResponsibility\AbstractHandler](#class-behavioralchainofresponsibilityabstracthandler-abstract)*

*This class implements [\Behavioral\ChainOfResponsibility\ChainInterface](#interface-behavioralchainofresponsibilitychaininterface)*

<hr />

### Class: \Behavioral\ChainOfResponsibility\WarningHandler

| Visibility | Function |
|:-----------|:---------|

*This class extends [\Behavioral\ChainOfResponsibility\AbstractHandler](#class-behavioralchainofresponsibilityabstracthandler-abstract)*

*This class implements [\Behavioral\ChainOfResponsibility\ChainInterface](#interface-behavioralchainofresponsibilitychaininterface)*

