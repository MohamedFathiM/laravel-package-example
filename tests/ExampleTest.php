<?php

use Example\LaravelPackageExample\Commands\LaravelPackageExampleCommand;

use function Pest\Laravel\artisan;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('Test Output Of Command', function () {
    artisan(LaravelPackageExampleCommand::class)
        ->expectsOutput(config('package-example.command_output'));
});
