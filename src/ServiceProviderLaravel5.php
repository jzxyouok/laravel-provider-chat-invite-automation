<?php
namespace richellin\chat\Laravel;

use \richellin\chat\Invite;
use \richellin\chat\Channel\Slack;
class ServiceProviderLaravel5 extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/config.php' => config_path('invite.php')]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'invite');
        $this->app['richellin.chat.invite'] = $this->app->share(function ($app) {
            return new Invite()->channel(new Slack());
        });
        $this->app->bind('\richellin\chat\Invite', 'richellin.chat.invite');
    }
}
