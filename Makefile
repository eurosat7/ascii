default:
	composer dump-autoload

dev:
	APP_ENV=prod composer update

prod:
	rm -r vendor
	APP_ENV=prod composer update -o -a --no-dev --prefer-dist --no-scripts

test: phpcpd phpmd phpstan psalm rector

rector:
	./vendor/bin/rector -n

phpcpd:
	./phpcpd.phar src

phpmd:
	./vendor/bin/phpmd src text cleancode,codesize,controversial,design,unusedcode

phpstan:
	./vendor/bin/phpstan

psalm:
	./vendor/bin/psalm

get-phpcpd:
	wget https://phar.phpunit.de/phpcpd.phar -nc -O ./phpcpd.phar || true
	chmod +x ./phpcpd.phar