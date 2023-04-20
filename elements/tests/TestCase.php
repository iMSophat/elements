<?php

namespace Sophat\Elements\Tests;

use Sophat\Elements\ElementsServicesProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            ElementsServicesProvider::class,
        ];
    }
}
