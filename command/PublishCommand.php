<?php

namespace Christmex\BaseAuth\Console\Commands;

use Illuminate\Console\Command;

class PublishCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'christmex:publish-spatie-permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'For publish spatie permission stuff';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;
        $this->call('vendor:publish', [
            '--provider' => 'Spatie\Permission\PermissionServiceProvider'
        ]);
        $this->call('optimize:clear');
    }
}
