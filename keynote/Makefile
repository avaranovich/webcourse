ssh-user = softlang@linux.uni-koblenz.de
www-dir = /home/softlang/www/webcourse12

noop:

upload:
	ssh ${ssh-user} mkdir -p ${www-dir}
	scp -r -p intro.pdf ${ssh-user}:${www-dir}
