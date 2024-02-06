<?php

namespace Esign\OutboundIp\Tests;

use Esign\OutboundIp\OutboundIpServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [OutboundIpServiceProvider::class];
    }
} 