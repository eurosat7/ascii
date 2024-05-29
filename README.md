# ascii

A little digital clock in ascii art.

Looks good on a 800x480 display in fullscreen.

Has some C=64 vibes. :)

## purpose & focus

This one is not limited to just rendering a clock. You can do a lot more. A clock was just nice because it was reloading every second so I could skip on pressing F5. :D

This is just an example on how to use generators and typehinting them.

## compiling the autoloader

Open a shell (aka bash, prompt, terminal, command line)
and run:

```shell
composer update
```

I expect you have [`composer`](https://getcomposer.org) on your pc.

## serving

Open a shell (aka bash, prompt, terminal, command line)
and run:

```shell
php -S localhost:8088
```

Point your browser to [localhost:8088](http://localhost:8088).

To stop the php server press `Ctrl+C`.

I expect you have `php` on your pc.

## testing code quality

```shell
composer update
make get-phpcpd
make test
```

I expect you have `make` on your pc.

If not:

```shell
composer update
wget https://phar.phpunit.de/phpcpd.phar -nc -O ./phpcpd.phar 
chmod +x ./phpcpd.phar
./phpcpd.phar src
./vendor/bin/phpmd src text cleancode,codesize,controversial,design,unusedcode
./vendor/bin/phpstan
./vendor/bin/psalm
./vendor/bin/rector -n
```

But please, get `make` and learn it; It is old but rocks still.
