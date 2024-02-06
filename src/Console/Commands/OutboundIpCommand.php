<?php

namespace Esign\OutboundIp\Console\Commands;

use Esign\OutboundIp\OutboundIp;
use Illuminate\Console\Command;

class OutboundIpCommand extends Command
{
    protected $signature = 'outbound-ip';
    protected $description = 'Get the outbound IP address of the server';

    public function handle(OutboundIp $outboundIp): int
    {
        $this->info($outboundIp->get());

        return self::SUCCESS;
    }
}
