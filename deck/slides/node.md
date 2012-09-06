# Node.js

!SLIDE
# node.js and real-time web-applications

!SLIDE left

## Objectives
* Learn basics of node.js
* Understand the key features of HTTP 1.1
* Understand how websockets work
* Build real-time web applications with node.js and websockets

!SLIDE
### node.js -- server-side javascript built on top of V8
#### [http://nodejs.org](http://nodejs.org)

!SLIDE
### A simple http server in node

``` javascript
    var http = require('http');
    var server = http.createServer(function(req, res) {
        res.writeHead(200, {'content-type' : 'text/plain'});
        res.end('hello\n');
    });
    server.listen(8000);                      
```

!SLIDE
# Key features of [HTTP 1.1](http://www.w3.org/Protocols/rfc2616/rfc2616.html)

!SLIDE 
## Persistent connection
![](images/2000px-HTTP_persistent_connection.svg.png)

!SLIDE
## Chunked transfer encoding

### Transfer-encoded response
``` htmlmixed
curl -i 127.0.0.1:8000
HTTP/1.1 200 OK
content-type: text/plain
Date: Thu, 06 Sep 2012 11:00:09 GMT
Connection: keep-alive
Transfer-Encoding: chunked

hello
```

### *Content-encoded response* 
``` htmlmixed
curl -i ibm.com
HTTP/1.1 301 Moved Permanently
Date: Thu, 06 Sep 2012 11:04:13 GMT
Server: IBM_HTTP_Server
Content-Type: text/html
Location: http://www.ibm.com/
Content-Length: 227

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
....
```

!SLIDE
### Performance benefits

### DEMO: Apache + PHP VS node.js

![Apache+PHP](images/php.png)
![node.js](images/node.png)

!NOTE ab -n 1000 -c 100 http://127.0.0.1:8000

!SLIDE
# Asyncronous I/O

!SLIDE
# Syncronous I/O
``` javascript
var data = file.read('input.txt')
doSomethingWith(data)
```

## Q:*What's wrong with the code?*

!SLIDE
## What about that?
``` javascript
var data = file.read('input.txt')
// zzzzZZzzz - how long does it take to read from the file
doSomethingWith(data)
```

!SLIDE
# Async I/O
``` javascript
file.read('file.txt', function(data)){
 doSomethingWith(data);
});
```

!SLIDE
# Real-time web applications using HTML5 web sockets  

!SLIDE
### Websocket - full-duplex communication channel over a single TCP connection

!SLIDE
## Websocket lifecycle
![Websocket lifecycle](images/websocket-lifecycle.png)

### Websocket protocol handshake

``` htmlmixed
GET /mychat HTTP/1.1
Host: server.example.com
Upgrade: websocket
Connection: Upgrade
Sec-WebSocket-Key: x3JJHMbDL1EzLkh9GBhXDw==
Sec-WebSocket-Protocol: chat
Sec-WebSocket-Version: 13
Origin: http://example.com
```

### Server response

``` htmlmixed
HTTP/1.1 101 Switching Protocols
Upgrade: websocket
Connection: Upgrade
Sec-WebSocket-Accept: HSmrc0sMlYUkAGmm5OPpG2HaGWk=
Sec-WebSocket-Protocol: chat
``` 

!SLIDE
# Socket.io
>Socket.IO aims to make realtime apps possible in every browser and
mobile device, blurring the differences between the different
transport mechanisms. It's care-free realtime 100% in JavaScript.
## http://socket.io

!SLIDE
# DEMO: Web chat

!SLIDE left
## Resources
* http://www.websocket.org/
* http://socket.io/
