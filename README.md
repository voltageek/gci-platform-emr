# EMR Module for GCI Platform

[![Latest Version on Packagist](https://img.shields.io/packagist/v/voltageek/gci-platform-emr.svg?style=flat-square)](https://packagist.org/packages/voltageek/gci-platform-emr)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/voltageek/gci-platform-emr/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/voltageek/gci-platform-emr/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/voltageek/gci-platform-emr/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/voltageek/gci-platform-emr/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/voltageek/gci-platform-emr.svg?style=flat-square)](https://packagist.org/packages/voltageek/gci-platform-emr)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require voltageek/gci-platform-emr
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="gci-platform-emr-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="gci-platform-emr-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="gci-platform-emr-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$eMR = new GCI\Platform\Plugins\EMR();
echo $eMR->echoPhrase('Hello, GCI\Platform\Plugins!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Kwame Nkansah](https://github.com/voltageek)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
