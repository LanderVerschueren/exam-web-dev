<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContestantController extends Controller
{
    public function index( Request $request ) {
      $name = $request->input('name');
      $adres = $request->input('adres');
      $woonplaats = $request->input('woonplaats');
      $code = $request->input('code');
      $ip =$request->ip();
      echo $name;

      DB::table('contestant')->insert(
          [
            'name' => $name,
            'adres' => $adres,
            'woonplaats' => $woonplaats,
            'code' => $code,
            'ip' => $ip
          ]
      );
      return redirect('/');

      /*DB::table('contestant')->insert(
          ['email' => 'john@example.com', 'votes' => 0]
      );*/
    }
}
