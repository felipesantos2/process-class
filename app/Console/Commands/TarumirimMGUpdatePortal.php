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
        // WP_Log::insert([
        //     'data' => now(),
        // ]);

        // Process::run('ls -la');

        $bench = Benchmark::value([
            'planets' => fn (): Response|string => Http::get('https://swapi.dev/api/planets/')->body(),
            'films'   => fn (): Response|string => Http::get('https://swapi.dev/api/films/6')->body(),
        ]);

        // dd($bench);

    }

}
