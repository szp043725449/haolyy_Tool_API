<?php 

namespace Haolyy\Api;

use Illuminate\Support\ServiceProvider;
use Haolyy\Api\HaolyyService;
use Haolyy\Api\Sign\SignService;
use Haolyy\Api\Middleware\ApiSign;

class HaolyyServiceProvider extends ServiceProvider {

    /**
     * Boot service provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/haolyyService.php' => config_path('haolyyService.php'),
        ]);
    }

    /**
     * @var bool
     */
    protected $defer = false;

    /**
     * @return void
     */
    public function register()
    {
        $this->registerService();
        $this->registerMiddleware();
    }

    /**
     * Setup the entity manager
     */
    protected function registerMiddleware()
    {
        \Route::middleware('hsign', ApiSign::class);
    }  

    /**
     * Setup the entity manager
     */
    protected function registerService()
    {
        $this->app->singleton('haolyyService', function ($app) {
            return new HaolyyService();
        });
        $this->app->alias('hs', HaolyyService::class);
    }  

    /**
     * Setup the entity manager
     */
    protected function registerSign()
    {
        // Bind the default Entity Manager
        $this->app->singleton('hsign', function ($app) {
            return new SignService();
        });
    }
}