<?php

namespace Example\LaravelPackageExample\Commands;

use Illuminate\Console\Command;

class LaravelPackageExampleCommand extends Command
{
    public $signature = 'test:command';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment(config('package-example.command_output'));

        return self::SUCCESS;
    }
}
