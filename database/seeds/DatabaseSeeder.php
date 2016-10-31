<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'    => 'Lander',
            'password'      => bcrypt('lander'),
            'email'         => 'verschueren@live.nl',
        ]);


        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-17',
            'end_date'      => '2016-10-24',
            'winning_code'  => '123456789',
            'prize'         => 'Koelkast',
            'image'         => 'koelkast.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-24',
            'end_date'      => '2016-10-31',
            'winning_code'  => '456987123',
            'prize'         => 'Fiets',
            'image'         => 'fiets.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-31',
            'end_date'      => '2016-11-07',
            'winning_code'  => '123789456',
            'prize'         => 'Laptop',
            'image'         => 'laptop.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-11-07',
            'end_date'      => '2016-11-14',
            'winning_code'  => '789123456',
            'prize'         => 'Tablet',
            'image'         => 'tablet.png',
        ]);


        DB::table('contestants')->insert([
            'name'          => 'Lander Verschueren',
            'adres'         => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'ip'            => '192.168.96.1',
            'contest_id'    => '1',
            'code'          => '123456789',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('contestants')->insert([
            'name'          => 'Anke Verschueren',
            'adres'         => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'ip'            => '192.168.96.1',
            'contest_id'    => '1',
            'code'          => '987654321',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('contestants')->insert([
            'name'          => 'Emma Moortgat',
            'adres'         => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'ip'            => '192.168.96.1',
            'contest_id'    => '1',
            'code'          => '654897321',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);


        DB::table('contestants')->insert([
            'name'          => 'Lander Verschueren',
            'adres'         => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'ip'            => '192.168.96.1',
            'contest_id'    => '2',
            'code'          => '987321654',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('contestants')->insert([
            'name'          => 'Anke Verschueren',
            'adres'         => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'ip'            => '192.168.96.1',
            'contest_id'    => '2',
            'code'          => '456987123',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('contestants')->insert([
            'name'          => 'Emma Moortgat',
            'adres'         => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'ip'            => '192.168.96.1',
            'contest_id'    => '2',
            'code'          => '321654789',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
