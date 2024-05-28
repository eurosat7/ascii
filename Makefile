default:
	composer dump-autoload

test: phpcpd phpmd phpstan psalm rector

rector:
	./vendor/bin/rector -n

phpcpd:
	./phpcpd.phar src

phpmd:
	./vendor/bin/phpmd src text cleancode,codesize,controversial,design,unusedcode

phpstan:
	php vendor/bin/phpstan

psalm:
	./vendor/bin/psalm

get-phpcpd:
	wget https://phar.phpunit.de/phpcpd.phar -nc -O ./phpcpd.phar || true
	chmod +x ./phpcpd.phar