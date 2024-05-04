<?php

namespace Example\LaravelPackageExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Example\LaravelPackageExample\LaravelPackageExample
 */
class LaravelPackageExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Example\LaravelPackageExample\LaravelPackageExample::class;
    }
}
