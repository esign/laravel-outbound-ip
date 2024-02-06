<?php

namespace Esign\OutboundIp\Http\Controllers;

use Esign\OutboundIp\OutboundIp;

class OutboundIpController
{
    public function __invoke(OutboundIp $outboundIp): string
    {
        return $outboundIp->get();
    }
}
