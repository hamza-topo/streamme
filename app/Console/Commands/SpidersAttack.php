<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Spiders\TestSpider;
use RoachPHP\Roach;


class SpidersAttack extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spiders:attack';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prepare all my little spiders for attack';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            Log::info('spider animedigitalnetwork ');
            Roach::startSpider(TestSpider::class);
            Log::info('the job is done for animedigitalnetwork i can rest now');
        } catch (\Exception $e) {
        }
    }
}
