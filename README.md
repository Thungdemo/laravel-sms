# laravel-sms
Laravel wrapper for Thungdemo/Sms library
## Dependencies
This library requires [nk-square/sms](https://github.com/nk-square/sms)
## Installation
Add the following lines to your composer.json file
```
....
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/nk-square/laravel-sms.git"
    },
    {
        "type": "git",
        "url": "https://github.com/nk-square/sms.git"
    },
.....
```
Run composer
```
composer require thungdemo/laravel-sms
```
Publish config file
```
php artisan vendor:publish --provider="Thungdemo\LaravelSms\Providers\SmsServiceProvider" --tag="laravel-sms"
```
Currently supported driver is textlocal. Add the textlocal credentials to your .env fle
```
TEXTLOCAL_APIKEY=your_api_key
TEXTLOCAL_SENDER=your_sender
```
## Usage
```php
use Sms;
use Thungdemo\LaravelSms\Message;

$message = new Message();
$message->setRecipient('1234567890');
$message->setMessage('foo bar');
Sms::send($message);
```
