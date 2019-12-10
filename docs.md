## Table of contents

- [\Behavioral\ChainOfResponsibility\ChainInterface (interface)](#interface-behavioralchainofresponsibilitychaininterface)
- [\Behavioral\ChainOfResponsibility\WarningHandler](#class-behavioralchainofresponsibilitywarninghandler)
- [\Behavioral\ChainOfResponsibility\NoticeHandler](#class-behavioralchainofresponsibilitynoticehandler)
- [\Behavioral\ChainOfResponsibility\Chain](#class-behavioralchainofresponsibilitychain)
- [\Behavioral\ChainOfResponsibility\HandlerInterface (interface)](#interface-behavioralchainofresponsibilityhandlerinterface)
- [\Behavioral\ChainOfResponsibility\ErrorHandler](#class-behavioralchainofresponsibilityerrorhandler)

<hr />

### Interface: \Behavioral\ChainOfResponsibility\ChainInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addToChain(</strong><em>[\Behavioral\ChainOfResponsibility\HandlerInterface](#interface-behavioralchainofresponsibilityhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public | <strong>execute(</strong><em>\string</em> <strong>$handlerName</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\ChainOfResponsibility\WarningHandler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

*This class implements [\Behavioral\ChainOfResponsibility\HandlerInterface](#interface-behavioralchainofresponsibilityhandlerinterface)*

<hr />

### Class: \Behavioral\ChainOfResponsibility\NoticeHandler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

*This class implements [\Behavioral\ChainOfResponsibility\HandlerInterface](#interface-behavioralchainofresponsibilityhandlerinterface)*

<hr />

### Class: \Behavioral\ChainOfResponsibility\Chain

| Visibility | Function |
|:-----------|:---------|
| public | <strong>addToChain(</strong><em>[\Behavioral\ChainOfResponsibility\HandlerInterface](#interface-behavioralchainofresponsibilityhandlerinterface)</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public | <strong>execute(</strong><em>\string</em> <strong>$handlerName</strong>)</strong> : <em>void</em> |

*This class implements [\Behavioral\ChainOfResponsibility\ChainInterface](#interface-behavioralchainofresponsibilitychaininterface)*

<hr />

### Interface: \Behavioral\ChainOfResponsibility\HandlerInterface

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

<hr />

### Class: \Behavioral\ChainOfResponsibility\ErrorHandler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>execute()</strong> : <em>void</em> |

*This class implements [\Behavioral\ChainOfResponsibility\HandlerInterface](#interface-behavioralchainofresponsibilityhandlerinterface)*

