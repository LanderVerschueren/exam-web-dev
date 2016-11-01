<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Contest;
use App\Contestant;

class ExamCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:examcron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cronjob for exam web dev';

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
    public function handle()
    {
        $contests = Contest::with('contestants')->get();

        date_default_timezone_set('Europe/Brussels');
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
    }
}
