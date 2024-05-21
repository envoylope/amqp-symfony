# Envoylope AMQP-Compat Symfony Nytris Plugin

[![Build Status](https://github.com/envoylope/amqp-symfony/workflows/CI/badge.svg)](https://github.com/envoylope/amqp-symfony/actions?query=workflow%3ACI)

Integrates [PHP AMQP-Compat][PHP AMQP-Compat] into a Symfony application.

## Usage
Install this package with Composer as a Nytris Symfony bundle plugin:

```shell
$ composer install envoylope/amqp-symfony nytris/bundle
```

### Configuring the bundle

This plugin will be loaded automatically by [Nytris Bundle][Nytris Bundle].

`config/packages/amqp.yaml`:

```yaml
php_amqp_compat:
    logger:
        channel: amqp_compat
```

## See also
- [PHP AMQP-Compat][PHP AMQP-Compat], which is used by this library.

[PHP AMQP-Compat]: https://github.com/asmblah/php-amqp-compat
[Nytris Bundle]: https://github.com/nytris/bundle
