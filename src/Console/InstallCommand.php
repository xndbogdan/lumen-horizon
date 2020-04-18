<?php

namespace Laravel\Horizon\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'horizon:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install all of the Horizon resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment('Publishing Horizon Service Provider...');
        $this->callSilent('vendor:publish', ['--tag' => 'horizon-provider']);

        $this->comment('Publishing Horizon Assets...');
        $this->callSilent('vendor:publish', ['--tag' => 'horizon-assets']);

        $this->comment('Publishing Horizon Configuration...');
        $this->callSilent('vendor:publish', ['--tag' => 'horizon-config']);

        $this->info('Horizon scaffolding installed successfully.');
    }
}
