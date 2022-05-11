<?php

namespace Westreels\WestreelsMain\Commands;

use Illuminate\Console\Command;

class WestreelsMainCommand extends Command
{
    public $signature = 'westreels-main';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
