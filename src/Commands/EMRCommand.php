<?php

namespace GCI\\Platform\\Plugins\EMR\Commands;

use Illuminate\Console\Command;

class EMRCommand extends Command
{
    public $signature = 'gci-platform-emr';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
