<?php
namespace App\Contents\Providers;

use Illuminate\Support\ServiceProvider;
class AdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        echo 'Contents Bootting.....';
    }
}