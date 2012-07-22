101web
======

A repository to support the course on web programming http://softlang.wikidot.com/course:webprog

All slides are created using Markdown syntax and converted into deck.js compatible HTML.
To edit MD files in the web browser, you can use http://prose.io/

## How to get started?
All steps below should be executed only once -- the first time you work with the keydown.

1. Ensure you have Ruby (http://www.ruby-lang.org/en/) and Rubygems (http://rubygems.org/) installed.
2. Build keydown gem by executing bootstrap.sh. You should see something like this in the console:  
> Successfully built RubyGem   
> Name: keydown   
> Version: 0.9.4   
> File: keydown-0.9.4.gem   
> Successfully installed keydown-0.9.4  
> 1 gem installed  
> Installing ri documentation for keydown-0.9.4...  
> Installing RDoc documentation for keydown-0.9.4...  
3. Ensure you have gem executable folder in your PATH. How to know what is your gem executable folder? Run gem env and look at the value of EXECUTABLE DIRECTORY

## How to work on the slides?
In fact you don't need any software to work on the slides. Just have a look http://prose.io/#avaranovich/101web/edit/master/deck/slides/slides.md
To convert MD into the final HTML you need to have *keydown* installed on your machine. (see steps above). Then just go into the *deck* folder and execute *make*. 
      
## Usefull resources

Whant to have an idea of what's possible with deck.js and keydown, have a look at this example http://infews.github.com/keydown/#slide-0

Want to know more about markdown syntax? http://daringfireball.net/projects/markdown/syntax

