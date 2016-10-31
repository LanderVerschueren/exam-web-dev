<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contestant;
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
    	$contestants = Contestant::all();

        /*if( $contestants->name === "" ) {
            echo "Leeg";
            echo $contestants;
        }
        else {
            echo "Vol";
            echo $contestants;
        }*/

        return view('dashboard.dashboard', ['contestants' => $contestants, 'columns' => $columns]);
    }

    public function delete( $id ) {
        echo $id;
    }
}
