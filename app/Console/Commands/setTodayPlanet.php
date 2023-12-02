<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Planet;

class setTodayPlanet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:planet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find planet that wasnt present this year and set her status active';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $object = Planet::inRandomOrder()
        ->where('status', '=', 'null')
        ->limit(1)
        ->get();
        
        Planet::where('id', '=', $object['id'])->update(['status' => 'active']);
    }
}
