<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use App\Contest;
use App\Contestant;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function() {
            $contests = Contest::with('contestants')->get();

            date_default_timezone_set('Europe/Brussels'); // CDT
            $current_date = date('Y-m-d');

            foreach ($contests as $contest) {
                if($contest->end_date <= $current_date) {
                    foreach ($contest->contestants as $contestant) {
                        if( $contestant->code === $contest->winning_code ) {
                            $contest_winner = $contestant->name;
                            $contest->winner = $contest_winner;
                            $contest->save();
                        }
                    }
                }
            }
        })->daily();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
