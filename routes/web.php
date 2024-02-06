<?php

use Esign\OutboundIp\Http\Controllers\OutboundIpController;
use Illuminate\Support\Facades\Route;

Route::get('outbound-ip', OutboundIpController::class);
