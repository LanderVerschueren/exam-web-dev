<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contestant;

class ContestantController extends Controller
{
    public function index( Request $request, $id ) {
      $this->validate( $request, [
        'name' => 'required',
        'adres' => 'required',
        'woonplaats' => 'required',
        'code' => 'required|unique:contestants',
      ]);

      $name = $request->input('name');
      $adres = $request->input('adres');
      $woonplaats = $request->input('woonplaats');
      $code = $request->input('code');
      $ip = $request->ip();
      $contest_id = $id;

      $contestant = new Contestant;
      $contestant->name = $name;
      $contestant->adres = $adres;
      $contestant->woonplaats = $woonplaats;
      $contestant->code = $code;
      $contestant->ip = $ip;
      $contestant->contest_id = $id;

      $contestant->save();

      return redirect('/');
    }
}
