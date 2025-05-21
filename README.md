# laravel-sms
Laravel wrapper for Nksquare/Sms library
## Dependencies
This library requires [nk-square/sms](https://github.com/nk-square/sms)
## Installation
```
composer require thungdemo/laravel-sms
```
Publish config file
```
php artisan vendor:publish --provider="Nksquare\LaravelSms\Providers\SmsServiceProvider" --tag="laravel-sms"
```
Currently supported driver is textlocal. Add the textlocal credentials to your .env fle
```
TEXTLOCAL_APIKEY=your_api_key
TEXTLOCAL_SENDER=your_sender
```
## Usage
```php
use Sms;
use Nksquare\LaravelSms\Message;

$message = new Message();
$message->setRecipient('1234567890');
$message->setMessage('foo bar');
Sms::send($message);
```
