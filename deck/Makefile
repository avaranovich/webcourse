all:
	cd slides; keydown slides slides.md
	mkdir -p output
	mv slides/*.html output/
	cp -r css output
	cp -r deck.js output
	cp -r images output
	cp -r js output
clean:
	rm *.html
