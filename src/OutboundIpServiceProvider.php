<?php

namespace Esign\OutboundIp;

use Illuminate\Support\ServiceProvider;

class OutboundIpServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([$this->configPath() => config_path('outbound-ip.php')], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'outbound-ip');

        $this->app->singleton('outbound-ip', function () {
            return new OutboundIp;
        });
    }

    protected function configPath(): string
    {
        return __DIR__ . '/../config/outbound-ip.php';
    }
}
