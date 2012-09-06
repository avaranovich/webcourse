# Asynchronous JavaScript and XML (AJAX)

!SLIDE
# Asynchronous JavaScript and XML (AJAX)

!SLIDE left
## Objectives
* Learn the basic principles of AJAX application
* Learn how to design your client-server applications to utilize AJAX 
* Learn how to use client-side AJAX API from JavaScript 

!SLIDE left
## What is AJAX?
* AJAX = Asynchronous JavaScript and XML
* Use of the **XMLHttpRequest** object to communicate with server-side scripts
* Asyncronous by default = No page refresh

!SLIDE left
## With AJAX you can
* Make requests to the server without reloading the page
* Receive and work with data from the server

!SLIDE
## AJAX code Structure

``` javascript
function some_function2(url, callback) {
    var httpRequest; // create our XMLHttpRequest object
    if (window.XMLHttpRequest) {
        httpRequest = new XMLHttpRequest();
    } else if (window.ActiveXObject) { //IE8 and older
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }

    httpRequest.onreadystatechange = function() {
        // inline function to check the status
        // of our request
        // this is called on every state change
        if (httpRequest.readyState === 4 && httpRequest.status === 200) {
            callback.call(httpRequest.responseXML);
            // call the callback function
        }
    };
    httpRequest.open('GET', url);
    httpRequest.send();
}
// call the function
some_function2("text.xml", function() {
    console.log(this);
});
console.log("this will run before the above callback");
```

!SLIDE
### [DEMO:101implementation:html5XMLHttpRequest](http://101companies.org/index.php/101implementation:html5XMLHttpRequest)

!SLIDE left
## Resources
* https://developer.mozilla.org/en-US/docs/AJAX
