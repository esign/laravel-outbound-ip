# Discover the outbound IP address of your server

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-outbound-ip.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-outbound-ip)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-outbound-ip.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-outbound-ip)
![GitHub Actions](https://github.com/esign/laravel-outbound-ip/actions/workflows/main.yml/badge.svg)

This package provides various ways to discover the outbound IP address of your server.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-outbound-ip
```

## Usage

This package ships with both a command and a route to discover the outbound IP address of your server.
These different strategries prove useful in scenarios where your servers utilizes different IP addresses for outgoing requests originating from SSH versus those from the web server.

### Using a command
To discover the outbound IP address of your server's SSH jail, you may run the following command:
```bash
php artisan outbound-ip
```

### Using a route
To discover the outbound IP address of your web server, you may visit the `/outbound-ip` route.

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
