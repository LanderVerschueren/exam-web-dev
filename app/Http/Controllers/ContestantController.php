<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Contestant;

class ContestantController extends Controller
{
    public function index( Request $request ) {
      $name = $request->input('name');
      $adres = $request->input('adres');
      $woonplaats = $request->input('woonplaats');
      $code = $request->input('code');
      $ip =$request->ip();
      echo $name;

      /*DB::table('contestants')->insert(
          [
            'name' => $name,
            'adres' => $adres,
            'woonplaats' => $woonplaats,
            'code' => $code,
            'ip' => $ip
          ]
      );*/

      $contestant = new Contestant;
      $contestant->name = $name;
      $contestant->adres = $adres;
      $contestant->woonplaats = $woonplaats;
      $contestant->code = $code;
      $contestant->ip = $ip;

      $contestant->save();

      return redirect('/');

      /*DB::table('contestant')->insert(
          ['email' => 'john@example.com', 'votes' => 0]
      );*/
    }
}
