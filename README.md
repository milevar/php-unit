# PHP Unigt Test

## Composer

### Get version

```shell
$ docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer --version
```

### Installing PHPUnit with Composer

```shell
$ docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer require --dev phpunit/phpunit
```

### Install

```shell
$ docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install
```

## PHP Unit

### Get Version

```shell
docker run -it --rm --name php-unit php:8 \
  php --version
```

```shell
docker run -it --rm --name php-unit \
  --volume $PWD:/usr/src/myapp -w /usr/src/myapp \
  php:8 \
  ./vendor/bin/phpunit --version
```

### Run Test

```shell
docker run -it --rm --name php-unit \
  --volume $PWD:/usr/src/myapp -w /usr/src/myapp \
  php:8 \
  ./vendor/bin/phpunit src/test/HelloWorldTest.php
```