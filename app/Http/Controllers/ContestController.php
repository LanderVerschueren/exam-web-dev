<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contest;
use Carbon\Carbon;

class ContestController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth', 'admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $id )
    {
      $date = Carbon::now();
    	$contest = Contest::find($id);

      $start_date = $contest->start_date;
      $end_date = $contest->end_date;

      if (($date > $start_date) && ($date < $end_date))
      {
        $open = true;
      }
      else
      {
        $open = false;
      }

      return view('contest.contest', ['contest' => $contest, 'open' => $open]);
    }

    public function participate( $id ) {
      $contest = Contest::find($id);

      return view('contest.contest-participate', ['contest' => $contest]);
    }
}
