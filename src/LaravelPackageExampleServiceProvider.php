<?php

namespace Example\LaravelPackageExample;

use Example\LaravelPackageExample\Commands\LaravelPackageExampleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPackageExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package-example_table')
            ->hasCommand(LaravelPackageExampleCommand::class);
    }
}
