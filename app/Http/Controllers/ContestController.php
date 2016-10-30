<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contest;

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
    	$contest = Contest::find($id);

      return view('contest.contest', ['contest' => $contest]);
    }

    public function participate( $id ) {
      $contest = Contest::find($id);

      return view('contest.contest-participate', ['contest' => $contest]);
    }
}
