ssh-user = softlang@linux.uni-koblenz.de
www-dir = /home/softlang/www/webcourse12

all:
	make intro.md
	make http.md
	make sss.md
	make css.md
	make cgi.md
	make rest.md
	make ajax.md
	make mvc.md
	make JavaScript.md
	make node.md

%.md:
	cd slides; keydown slides $*.md
	mkdir -p output
	mv slides/*.html output/
	cp -r slides/css output
	cp -r slides/deck.js output
	cp -r images output
	cp -r js output

clean:
	rm *.html

upload:
	scp -r -p output ${ssh-user}:${www-dir}
	
