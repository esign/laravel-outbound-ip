# Discover the outbound IP address of your server

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-outbound-ip.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-outbound-ip)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-outbound-ip.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-outbound-ip)
![GitHub Actions](https://github.com/esign/laravel-outbound-ip/actions/workflows/main.yml/badge.svg)

A short intro about the package.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-outbound-ip
```

The package will automatically register a service provider.

Next up, you can publish the configuration file:
```bash
php artisan vendor:publish --provider="Esign\OutboundIp\OutboundIpServiceProvider" --tag="config"
```

## Usage

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
