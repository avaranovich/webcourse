all:
	make intro.md
	make sss.md
	make rest.md
	make mvc.md
	make JavaScript.md

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
