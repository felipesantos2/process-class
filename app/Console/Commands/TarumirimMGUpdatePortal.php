<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Portal\WP_Log;
use Illuminate\Console\Command;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Process;

class TarumirimMGUpdatePortal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-portal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update portal';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // get file
        // truncate
        // open file
        // run lines in db
    }

}
