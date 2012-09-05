if (typeof Object.create !== 'function') {
        Object.create = function (o) {
            var F = function () {};
            F.prototype = o;
   }  
}  

meganalysis = {
       "name": "Meganalysis"
   };


meganalysis2 = Object.create(meganalysis)

/*If we try to retrieve a property value from an object, 
and if the object lacks the property name, then JavaScript attempts to retrieve 
the property value from the prototype object. And if that object is lacking the property, 
then it goes to its prototype, and so on until the process finally bottoms out with Object.prototype. 
If the desired property exists nowhere in the prototype chain, then the result is the undefined value. 
This is called delegation.
The prototype relationship is a dynamic relationship. 
If we add a new property to a prototype, that property will immediately be visible 
in all of the objects that are based on that prototype.
*/