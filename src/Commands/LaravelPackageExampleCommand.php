<?php

namespace Example\LaravelPackageExample\Commands;

use Illuminate\Console\Command;

class LaravelPackageExampleCommand extends Command
{
    public $signature = 'laravel-package-example';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
