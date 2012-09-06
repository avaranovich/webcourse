# JavaScript

!SLIDE
# JavaScript

!SLIDE left
## Objectives
* Learn basics of JavaScript (including OO)
* Lerarn how to write asyncronous code in JavaScript
* Learn how to work with HTML Document Object Model
* Learn how to write advanced client-side web apps with jQuery

!SLIDE
>JavaScript (sometimes abbreviated JS) is a prototype-based  scripting
language that is dynamic, weakly typed and has first-class functions. It is a multi-paradigm language, supporting object-oriented, imperative, and functional programming styles. 
[*Wikipedia*](http://en.wikipedia.org/wiki/JavaScript)

!SLIDE left
![TIOBE Index JavaScript](images/history_JavaScript.png)

- Highest Rating (since 2001): 4.021% (8th position, June 2009)
- Lowest Rating (since 2001): 1.154% (10th position, July 2002)
- Paradigms: Object-Oriented, Procedural, Functional
- Type system: Dynamically typed

[http://www.tiobe.com/index.php/content/paperinfo/tpci/index.html](http://www.tiobe.com/index.php/content/paperinfo/tpci/index.html)

!SLIDE
## Standartized JavaScript = ECMAScript
[http://www.ecma-international.org/ecma-262/5.1/Ecma-262.pdf]

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
## Objects in JS.Prototype 
##### demo: javascript/prototype.js

!SLIDE left
## Functions are objects, too

!SLIDE
## The Method Invocation Pattern 
<div> 
  <textarea id="code" name="code" class="code" mode="javascript" style="display: none" runnable="true">
   var company = {
     total: 1000,
     increment: function(val){ this.total += val; }
    }
    company.increment(100);
    console.log(company.total);
  </textarea>
 </div>
 
!SLIDE 
## The Function Invocation Pattern
<div> 
  <textarea id="code" name="code" class="code" mode="javascript" style="display: none" runnable="true">
  add = function (a,b) { 
     debugger; 
     console.log(this); //this -- a global object here
     return a+b;}
  add(2,3);   
  </textarea>
 </div>

!SLIDE
##  The Constructor Invocation Pattern
<div>
 <textarea id="code" name="code" class="code" mode="javascript" style="display: none" runnable="true">
   // Create a constructor function for the Employee.
   // It makes an object with a total property.
   var Employee = function (name) {
       this.name = name;
   };
   // Give all instances of an Enployee a public method
   Employee.prototype.get_name = function (  ) {
       return this.name;
   };
   // Make an instance of Employee.
   var ralf = new Employee('Ralf');
   debugger;
   name = ralf.get_name();
   console.log(name);
  </textarea>
 </div>

!SLIDE
## Closures. Hiding properties of the object

``` javascript
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
<div>
 <textarea id="code" name="code" class="code" mode="javascript" style="display: none" runnable="false">
 var Person = function (name) {
       this.name = name;
       this.isHuman = true;
   };
 var Employee = function (name) {
       this.name = name;
   };
 Person.prototype.isHuman = function(){ 
     return this.isHuman;
 };  
 Person.prototype.toString = function(){ 
  return '[Person "'+this.name+'"]';
 }; 
// Here's where the inheritance occurs 
Employee.prototype = new Person();    
// Otherwise instances of Employee would have a constructor of Person
Employee.prototype.constructor = Employee;        
Employee.prototype.toString = function(){ 
  return '[Employee "'+this.name+'"]';
};   
  </textarea>
</div>  
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
<div>
  <textarea type="javascript" class="code" mode="javascript"
style="display: none;">
 request = prepare_the_request(...);
 response = send_request_synchronously(request);
 display(response);
</textarea>
</div>

### Asyncronous call
<div> 
  <textarea type="javascript" class="code" mode="javascript"
style="display: none;">
  request = prepare_the_request(....);
  send_request_asynchronously(request, function (response) {
     display(response);
  });  
  </textarea>   
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
    <a href="#">My Link</a>
    <h1>My header</h1>
  </body>
</html>
</textarea>
</div>

![HTML Tree](images/htmltree.gif) 

!SLIDE
## DOM Events

``` javascript
var button = document.getElementById("createButton");
button.addEventListener("click", function(){ /* ... */ }, false);
```
### [DEMO](http://jsfiddle.net/DrGigabit/aQctY/1/)

!SLIDE

## [jQuery](http://jquery.org) 
>jQuery is a fast and concise JavaScript Library that simplifies HTML document traversing, event handling, animating, and Ajax interactions for rapid web development.

``` javascript
$(document).ready(function(){
   alert("welcome");
 });
```

!SLIDE left
## Resources
* https://developer.mozilla.org/de/
* JavaScript: The Good Parts by Douglas Crockford
* http://jsperf.com/browse




