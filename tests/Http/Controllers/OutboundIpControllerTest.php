<?php

namespace Esign\OutboundIp\Tests\Http\Controllers;

use Esign\OutboundIp\Tests\TestCase;
use Illuminate\Support\Facades\Http;

class OutboundIpControllerTest extends TestCase
{
    /** @test */
    public function it_can_get_the_outbound_ip()
    {
        Http::fake(['ipecho.net/plain' => Http::response('99.99.99.99')]);

        $response = $this->get('/outbound-ip');

        $response->assertOk();
        $response->assertSee('99.99.99.99');
    }
}
