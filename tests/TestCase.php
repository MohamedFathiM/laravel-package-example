<?php

namespace Example\LaravelPackageExample\Tests;

use Example\LaravelPackageExample\LaravelPackageExampleServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Example\\LaravelPackageExample\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelPackageExampleServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config('database.default', 'testing');
        Schema::dropAllTables();

        $migration = include __DIR__.'/../database/migrations/create_my_models_table.php.stub';
        $migration->up();
    }
}
