var http = require("http");
var url = require("url");

function start(route) {
  function route(pathname, response) {
    console.log("About to route a request for " + pathname);

    if(pathname == "/approach1"){
      var obj = new Object();
      obj.year = 2012;
      obj.month = 7;

      response.writeHead(200, {"Content-Type": "text/plain"});
      response.write(JSON.stringify(obj));
      response.end();
    }
    else{
      response.writeHead(200, {"Content-Type": "text/plain"});
      response.write("Hello World");
      response.end();
    }
  } 

  function onRequest(request, response) {
    var pathname = url.parse(request.url).pathname;
    console.log("Request for " + pathname + " received.");

    route(pathname, response);
  }

  http.createServer(onRequest).listen(1337);
  console.log("Server has started.");
}

start();
