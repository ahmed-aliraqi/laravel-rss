<?php namespace Aliraqi\LaravelRss;

use Illuminate\Support\ServiceProvider;

class RssServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('rss', function () {
            return new Rss();
        });
    }
}
