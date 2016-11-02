<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Contestant;
use App\Contest;
use Illuminate\Support\Facades\DB;

class ContestantSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:contestant';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed contestants in db';

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
     * @return mixed
     */
    public function handle(\Faker\Generator $faker)
    {
        /*$contestant = factory(Contestant::class)->create();
        echo $contestant;*/
        $contests = Contest::all();
        $current_date = \Carbon\Carbon::now()->toDateTimeString();

        foreach( $contests as $contest ) {
            if( $contest->start_date < $current_date && $contest->end_date >= $current_date ) {
                $contest_id = $contest->id;
            }
        }
        //$contestant = factory(Contestant::class)->create();
        DB::table('contestants')->insert([
            'code' => $faker->unique()->randomNumber,
            'name' => $faker->name,
            'adres' => $faker->streetName,
            'woonplaats' => $faker->city,
            'ip' => $faker->ipv4,
            'contest_id' => $contest_id,
            'created_at' => $current_date,
            'updated_at' => $current_date
        ]);
    }
}
