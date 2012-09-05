# REpresentational State Transfer (REST)

!SLIDE
## Objectives

!SLIDE
## REST - a *set of principles* that define how Web standards, such as HTTP and URIs, are supposed to be used

!SLIDE left
##Resources and Resource Identifiers
* The key abstraction of information in REST is a *resource*
* Each resource has a *resource identifier*

!SLIDE left
## Resources
* http://example.com/customers/1234
* http://example.com/orders/2007/10/776654
* http://example.com/products/4554
* http://example.com/processes/salary-increase-234 

!SLIDE left
## Resources can have multiple representations
### e.g. JSON/XML/HTML

!SLIDE left
## Accessible using standard HTTP verbs
* GET
* POST
* PUT
* DELETE
* HEAD
* OPTIONS

!SLIDE rest
### RESTful Web Service HTTP methods

<table>
<tbody>
<tr>
<th>Resource</th>
<th>GET</th>
<th>PUT</th>
<th>POST</th>
<th>DELETE</th>
</tr>

<tr>
 <th>Collection URI, such as <code>http://example.com/resources/</code></th>
 <td><b>List</b> the URIs and perhaps other details of the collection's members.</td>
 <td><b>Replace</b> the entire collection with another collection.</td>
 <td><b>Create</b> a new entry in the collection. The new entry's URL is assigned automatically and is usually returned by the operation.</td>
 <td><b>Delete</b> the entire collection.</td>
</tr>

<tr>
 <th>Element URI, such as <code>http://example.com/resources/item17</code></th>
 <td><b>Retrieve</b> a representation of the addressed member of the collection, expressed in an appropriate Internet media type.</td>
 <td><b>Replace</b> the addressed member of the collection, or if it doesn't exist, <b>create</b> it.</td>
 <td>Treat the addressed member as a collection in its own right and <b>create</b> a new entry in it.</td>
 <td><b>Delete</b> the addressed member of the collection.</td>
</tr>
</tbody>
</table>
###### [Wikipedia] http://en.wikipedia.org/wiki/Representational_state_transfer

!SLIDE left
## Properties of the REST
* Client-Server
* Stateless
* Cache

!SLIDE left
## Resources
* http://www.infoq.com/articles/rest-introduction
* http://www.ics.uci.edu/~fielding/pubs/dissertation/top.htm

!SLIDE
