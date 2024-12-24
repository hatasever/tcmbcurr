<?php

namespace Hatasever\TcmbCurr;

use Console\Commands\Control;
use Database\Seeders\CurrencyTypeSeeder;
use Hatasever\TcmbCurr\Console\Commands\Control as CommandsControl;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;

class TcmbCurrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/tcmbcurr.php';
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([$configPath => config_path('tcmbcurr.php')], 'config');
        $this->mergeConfigFrom($configPath, 'tcmbcurr');


        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/Console/Commands' => app_path('Console/Commands'),
        ], 'commands');

        $this->publishes([
            __DIR__.'/../config' => config_path(),
        ], 'config');
        if ($this->app instanceof Laravel\Lumen\Application) {
            $this->app->configure('tcmbcurr');
        }

        if ($this->app->runningInConsole()) {

               $result = $this->callPublish();
                if ($result) {
                    $this->callTheOthers();
                }
        }

        $this->app->booted(function () {
            $schedule = $this->app->make(Schedule::class);
            $schedule->command('TCMBKUR:getCurrencyList')->hourly();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->commands([
            CommandsControl::class,
        ]);
        $this->app->singleton('tcmbcurr', function ($app) {


            $config = isset($app['config']['tcmbcurr']) ? $app['config']['tcmbcurr'] : null;
            if (is_null($config)) {
                $config = $app['config']['tcmbcurr'] ?: $app['config']['tcmbcurr::config'];
            }

            return new TcmbCurrClient($config['app_id'], $config['guzzle_client_timeout']);
        });

        $this->app->alias('tcmbcurr', 'Atasvr\TcmbCurr\TcmbCurr\Client');
    }

    public function provides() {
        return ['tcmbcurr'];
    }
    public function callPublish()
    {

     Artisan::call('vendor:publish', [
            '--provider' => 'Hatasever\TcmbCurr\TcmbCurrServiceProvider',
            '--force' => true
        ]);
            return true;
    }
    private function callTheOthers()
    {

        Artisan::call('migrate', [
            '--path' => 'database/migrations/2024_10_21_103221_currency_type.php',
            '--force' => true
        ]);
        Artisan::call('migrate', [
            '--path' => 'database/migrations/2024_12_09_173716_create_currency_tcmb_table.php',
            '--force' => true
        ]);

        Artisan::call('db:seed', [
            '--class' => CurrencyTypeSeeder::class,
        ]);

        Artisan::call('TCMBKUR:getCurrencyList');
    }
}
