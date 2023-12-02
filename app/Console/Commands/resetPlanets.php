<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Planet;

class resetPlanets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:planets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set all planets status to null';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Planet::where('status', '=', 'done')->update(['status' => 'null']);
    }
}
