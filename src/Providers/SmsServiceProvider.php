<?php

namespace Thungdemo\LaravelSms\Providers;

use Illuminate\Support\ServiceProvider;
use Thungdemo\Sms\Client;
use Thungdemo\Sms\Drivers\DriverInterface;
use Thungdemo\Sms\Drivers\Textlocal;
use Thungdemo\LaravelSms\Exceptions\DriverNotFoundException;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ .'/../config/sms.php', 'sms');
        
        $this->app->bind(DriverInterface::class, function ($app) {
            $config = $app->config;
            switch ($config['sms.default']) {
                case 'textlocal':
                    $driver = new Textlocal([
                        'apikey' => $config['sms.drivers.textlocal.apikey'],
                        'sender' => $config['sms.drivers.textlocal.sender'],
                        'test' => $config['sms.drivers.textlocal.test'] ?? false
                    ]);
                    break;
                
                default:
                    throw new DriverNotFoundException();
                    break;
            }
            return new Client($driver);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/sms.php' => config_path('sms.php')
        ],'laravel-sms');
    }
}
