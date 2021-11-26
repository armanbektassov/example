<?php

namespace Amarkets\Events;

use Amarkets\Events\Handler\HandlerInterface;
use Amarkets\Events\Handler\PushHandler;
use Amarkets\Events\Logger\Logger;
use Amarkets\Events\Logger\LoggerInterface;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Boot the ServiceProvider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishConfiguration();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HandlerInterface::class,
            PushHandler::class
        );
        $this->app->bind(
            LoggerInterface::class,
            Logger::class
        );
    }

    /**
     * Publish publisher configuration file.
     *
     * @return void
     */
    protected function publishConfiguration()
    {
        $configPath = __DIR__ . '/../../config/subscriber.php';
        $this->publishes([
            $configPath => base_path('config/subscriber.php'),], 'subscriber');
    }

}
