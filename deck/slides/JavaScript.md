# JavaScript on the client

!SLIDE

## Objectives

!SLIDE
>JavaScript (sometimes abbreviated JS) is a prototype-based  scripting language that is dynamic, weakly typed and has first-class functions.It is a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles. 

*Wikipedia*

!SLIDE left

![TIOBE Index JavaScript](images/history_JavaScript.png)

- Highest Rating (since 2001): 4.021% (8th position, June 2009)
- Lowest Rating (since 2001): 1.154% (10th position, July 2002)
- Paradigms: Object-Oriented, Procedural, Functional
- Type system: Dynamically typed

http://www.tiobe.com/index.php/content/paperinfo/tpci/index.html

!SLIDE

http://www.ecma-international.org/ecma-262/5.1/Ecma-262.pdf
ECMAScript

!SLIDE

<div>
  <textarea id="code" name="code" class="code" mode="javascript" style="display: none;" runnable="true">
    var add = function (a, b) {
       return a + b;
   };
   console.log(add(2,3))
  </textarea>
</div>

!SLIDE

## Objects in JS. Prototype (demo: javascript/prototype.js)

!SLIDE left

## Functions are objects, too
* The Method Invocation Pattern
* The Function Invocation Pattern
* The Constructor Invocation Pattern

!SLIDE

## Closures. Hiding properties of the object

``` js
var myObject = (function () {
       var value = 0;
       return {
           increment: function (inc) {
               value += typeof inc === 'number' ? inc : 1;
           },
           getValue: function (  ) {
               return value;
           }
}; }());
```

!SLIDE 
## OO in JavaScript

!SLIDE

## Callbacks

<div>
  <textarea id="code" name="code" class="code" mode="javascript" style="display: none;" runnable="true">
  // define our function with the callback argument
  function some_function(arg1, arg2, callback) {
   // this generates a random number between
   // arg1 and arg2
   var my_number = Math.ceil(Math.random() * (arg1 - arg2) + arg2);
   // then we're done, so we'll call the callback and
   // pass our result
   callback(my_number);
  }
  // call the function
  some_function(5, 15, function(num) {
   // this anonymous function will run when the
   // callback is called
   console.log("callback called! " + num);
  });
  </textarea>
</div>

!SLIDE
## Async request from the server/db

### Syncronous call
<div id="code" name="code" class="code" mode="javascript" style="display: none;" runnable="false">
 request = prepare_the_request(...);
 response = send_request_synchronously(request);
 display(response);
</div>

### Asyncronous call
<div id="code" class="code" name="code" mode="javascript"
style="display: none;" runnable="false"> 
  request = prepare_the_request(....);
  send_request_asynchronously(request, function (response) {
     display(response);
  });     
</div>

!SLIDE
## HTML Document Object Model (DOM)

<div>
<textarea type="text/html" class="code" mode="text/html"
style="display: none;">
<html>
  <head>
      <title>My title</title>
  </head>
  <body>
    <a href=""></a>
  </body>
</html>
</textarea>
</div>

![HTML Tree](images/htmltree.gif) 

!SLIDE
## DOM Events

``` js
var button = document.getElementById("createButton");
utton.addEventListener("click", function(){ /* ... */ }, false);
```

!SLIDE
## jQuery

!SLIDE
## Resources
- JavaScript: The Good Parts by Douglas Crockford




