<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Xiaocai\Test\DemoInterface;
use App\Xiaocai\Test\DemoProvider;
use App\Xiaocai\Test\DemoProvider2;


class TestServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }
    public function register()
    {
        $this->app->bind(DemoInterface::class, DemoProvider::class);
    }

}
