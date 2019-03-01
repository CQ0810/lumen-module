<?php

namespace App\Britton\Providers;

use Illuminate\Support\ServiceProvider;

class ContentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require_once __DIR__ . '/../boot.php';
    }
}