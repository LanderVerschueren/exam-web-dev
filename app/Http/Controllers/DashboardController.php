<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
use App\Contest;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $columns = Schema::getColumnListing('contestants');
    	$contestants = Contestant::withTrashed()->get();

        return view('dashboard.dashboard', ['contestants' => $contestants, 'columns' => $columns]);
    }

    public function delete( $id ) {
        $contestant = Contestant::find( $id );

        $contestant->delete();
        return redirect('dashboard');
    }

    public function restore( $id ) {
        $contestant = Contestant::withTrashed()
        ->where('id', $id)
        ->restore();
        return redirect('dashboard');
    }

    public function parameters() {
        $contests = Contest::all();

        return view('dashboard.parameters', ['contests' => $contests]);
    }

    public function parameters_update( Request $request, $id ) {
        $contest = Contest::find( $id );
        $start_date = $request->date('start_date');
        $end_date = $request->date('end_date');

        $contest->start_date = $start_date;
        $contest->end_date = $end_date;
        $contest->save();

        echo $start_date;
        echo $end_date;
        echo $request->all();

        return redirect();
    }
}
