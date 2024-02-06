<?php

namespace Esign\OutboundIp\Facades;

use Illuminate\Support\Facades\Facade;

class OutboundIpFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'outbound-ip';
    }
}
