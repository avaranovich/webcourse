# Node.js

!SLIDE left

##Objectives

!SLIDE

### node.js -- server-side javascript built on top op V8

!SLIDE
A simple http server in node

``` js
    var http = require('http');
    var server = http.createServer(function(req, res) {
        res.writeHead(200, {'content-type' : 'text/plain'});
        res.end('hello\n');
    });
    server.listen(8000);                      
```

!SLIDE 

http://en.wikipedia.org/wiki/Chunked_transfer_encoding


!SLIDE

Basic performance test

ab -n 100 -c 100 http://127.0.0.1:8000
