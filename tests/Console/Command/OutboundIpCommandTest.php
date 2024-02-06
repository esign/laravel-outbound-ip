<?php

namespace Esign\OutboundIp\Tests\Console\Command;

use Esign\OutboundIp\Console\Commands\OutboundIpCommand;
use Esign\OutboundIp\Tests\TestCase;
use Illuminate\Support\Facades\Http;

class OutboundIpCommandTest extends TestCase
{
    /** @test */
    public function it_can_get_the_outbound_ip()
    {
        Http::fake(['ipecho.net/plain' => Http::response('99.99.99.99')]);

        $command = $this->artisan(OutboundIpCommand::class);

        $command->expectsOutput('99.99.99.99');
    }
}
