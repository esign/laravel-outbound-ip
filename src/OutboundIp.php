<?php

namespace Esign\OutboundIp;

use Illuminate\Support\Facades\Http;

class OutboundIp
{
    public function get(): string
    {
        return Http::get('https://ipecho.net/plain')->throw()->body();
    }
}
