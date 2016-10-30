<?php

use Illuminate\Database\Seeder;

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
        DB::table('users')->insert([
            'first_name'    => 'Anke',
            'password'      => bcrypt('anke'),
            'email'         => 'anke@live.nl',
        ]);
        DB::table('contests')->insert([
            'winner'        => 'Lander Verschueren',
            'start_date'    => '2016-10-17',
            'end_date'      => '2016-10-23',
            'winning_code'  => '123456789',
            'prize'         => 'Koelkast',
            'image'         => 'koelkast.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-24',
            'end_date'      => '2016-10-30',
            'winning_code'  => '123456789',
            'prize'         => 'Fiets',
            'image'         => 'fiets.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-31',
            'end_date'      => '2016-11-06',
            'winning_code'  => '123456789',
            'prize'         => 'Laptop',
            'image'         => 'laptop.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-11-07',
            'end_date'      => '2016-11-14',
            'winning_code'  => '123456789',
            'prize'         => 'Tablet',
            'image'         => 'tablet.png',
        ]);
    }
}
