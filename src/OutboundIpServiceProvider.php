<?php

namespace Esign\OutboundIp;

use Esign\OutboundIp\Console\Commands\OutboundIpCommand;
use Illuminate\Support\ServiceProvider;

class OutboundIpServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom($this->routesPath());

        if ($this->app->runningInConsole()) {
            $this->commands([OutboundIpCommand::class]);
        }
    }

    public function register()
    {
        $this->app->bind('outbound-ip', function () {
            return new OutboundIp();
        });
    }

    protected function routesPath(): string
    {
        return __DIR__ . '/../routes/web.php';
    }
}
