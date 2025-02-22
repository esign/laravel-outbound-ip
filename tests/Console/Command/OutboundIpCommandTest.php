<?php

namespace Esign\OutboundIp\Tests\Console\Command;

use PHPUnit\Framework\Attributes\Test;
use Esign\OutboundIp\Console\Commands\OutboundIpCommand;
use Esign\OutboundIp\Tests\TestCase;
use Illuminate\Support\Facades\Http;

final class OutboundIpCommandTest extends TestCase
{
    #[Test]
    public function it_can_get_the_outbound_ip(): void
    {
        Http::fake(['ipecho.net/plain' => Http::response('99.99.99.99')]);

        $command = $this->artisan(OutboundIpCommand::class);

        $command->expectsOutput('99.99.99.99');
    }
}
