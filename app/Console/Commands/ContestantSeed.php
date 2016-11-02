<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Contestant;
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
    public function handle()
    {
        $contestant = factory(Contestant::class)->create();
        echo $contestant;
    }
}
