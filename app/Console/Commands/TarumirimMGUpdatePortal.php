<?php

namespace App\Console\Commands;

use App\Models\Portal\WP_Log;
use Illuminate\Console\Command;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\DB;
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
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // WP_Log::insert([
        //     'data' => now(),
        // ]);

        // Process::run('ls -la');

        // Benchmark::dd([
        //     '1' => fn() => WP_Log::find([100, 200]),
        //     '2' => fn() => WP_log::all(),
        // ]);

    }
}
