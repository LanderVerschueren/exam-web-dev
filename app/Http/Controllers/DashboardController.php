<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
use App\Contest;
use App\User;
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
        $users = User::first();

        return view('dashboard.parameters', ['contests' => $contests, 'users' => $users]);
    }

    public function parameters_update( Request $request, $id ) {
        $this->validate( $request, [
            'start_date' => 'required|date|date_format:Y-m-d',
            'end_date' => 'required|date|date_format:Y-m-d',
        ]);
        
        $contest = Contest::find( $id );
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $contest->start_date = $start_date;
        $contest->end_date = $end_date;
        $contest->save();
        
        \Session::flash("success", "Parameters zijn opgeslagen!");

        return back();
    }
    
    public function email_update( Request $request ) {
        $this->validate( $request, [
            'email' => 'required|email',
        ]);
        
        $user = User::all();
        $email = $request->input('email');
        $user->email = $email;
        $user->save();
        
        return back();
    }
}
