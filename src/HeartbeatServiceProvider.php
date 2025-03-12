<?php

namespace Vvdboogaard\Heartbeat;

use Illuminate\Support\ServiceProvider;

class HeartbeatServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            $this->getConfigFile() => config_path('heartbeat.php'),
        ], 'config');
    }

    protected function getConfigFile(): string
    {
        return __DIR__.
            DIRECTORY_SEPARATOR.'..'.
            DIRECTORY_SEPARATOR.'config'.
            DIRECTORY_SEPARATOR.'heartbeat.php';
    }
}
