# laravel-provider-chat-invite-automation

This package allows you to use [Slack invite for PHP](https://github.com/richellin/php-chat-invite-automation)

## Requirements

Laravel 5.

## Installation

You can install the package using the [Composer](https://getcomposer.org/) package manager. You can install it by running this command in your project root:

```sh
composer require richellin/laravel-provider-chat-invite-automation
```

## Laravel 5
Add the `richellin\invite\Laravel\ServiceProvider` provider to the `providers` array in `config/app.php`:

```php
'providers' => [
  ...
  richellin\invite\Laravel\ServiceProvider::class,
],
```

Then add the facade to your `aliases` array:

```php
'aliases' => [
  ...
  'Invite' => richellin\invite\Laravel\Facade::class,
],
```

Finally, publish the config file with `php artisan vendor:publish`. You'll find it at `config/invite.php`.

## Usage

`use Invite` at the top of your class to import it

```php
...

``php

