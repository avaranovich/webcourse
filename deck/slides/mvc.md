# Model-View-Controller (MVC)

!SLIDE
# Model-View-Controller (MVC)
## with Ruby on Rails

!SLIDE left
## MVC -- a classic definition
* The **Model** is the application object
* The **View** is its screen presentation
* The **Controller** defines the way the user interface reacts to user input
![Design patterns](images/Design_Pattern_Book_cover.jpg)

!SLIDE
## The Model-View-Controller Architecture
![Model-View-Controller](images/MVC.png)

!SLIDE left
## What is Rails?
* A web application development framework written in the Ruby language.
* It makes the assumption that there is a “best” way to do things, and it’s designed to encourage that way – and in some cases to discourage alternatives.

!SLIDE left
## Rails philosophy
* DRY – “Don’t Repeat Yourself” – suggests that writing the same code over and over again is a bad thing.
* Convention Over Configuration – means that Rails makes assumptions about what you want to do and how you’re going to do it, rather than requiring you to specify every little thing through endless configuration files.
* REST is the best pattern for web applications – organizing your application around resources and standard HTTP verbs is the fastest way to go.

!SLIDE
## Ruby
>Ruby is a dynamic, reflective, general-purpose object-oriented programming language that combines syntax inspired by Perl with Smalltalk-like features. It was also influenced by Eiffel and Lisp.
[*Wikipedia*](http://en.wikipedia.org/wiki/Ruby_(programming_language)

!SLIDE
## Why Rails is relevant in the Web MVC context?
### Because its build to **enfonrce** using MVC as a pattern.

!SLIDE
## Model
### Maps to a table in a database. By convention, a model named Company will map to the database table companies, and the model will have a filename company.rb within app/models.

![](images/rails_model.png)

!SLIDE
## Controller
### Rresponds to external requests from the web server to the application, and responds to the external request by determining which view file to render.
![](images/rails_controller.png)

!SLIDE left
## Controller (II)
* Handles *people-friendly URLs* extremely well.
* Manages *caching*, which can give applications orders-of-magnitude performance boosts.
* Manages *sessions*, giving users the impression of ongoing interaction with our applications.

!SLIDE
## View
### In the default configuration of Rails is an erb file. It is typically converted to output html at run-time.
![](images/rails_view.png)

!SLIDE
## The Rails MVC
![Rails MVC](images/Rails_MVC.png)

!SLIDE
## URLs Are Mapped to Controllers and Actions

!SLIDE
## DEMO

!SLIDE left
## Summary
### You learned
* 1
* 2
* 3

!SLIDE left
## Resources
* [http://guides.rubyonrails.org/index.html](http://guides.rubyonrails.org/index.html)
* [Agile Web Development with Rails (4th edition)](http://pragprog.com/book/rails4/agile-web-development-with-rails)

