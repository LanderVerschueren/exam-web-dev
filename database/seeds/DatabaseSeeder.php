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
            'last_name'     => 'Verschueren',
            'password'      => bcrypt('lander'),
            'email'         => 'verschueren@live.nl',
            'straat'        => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'postcode'      => '1880',
            'admin'         => true,
        ]);
        DB::table('users')->insert([
            'first_name'    => 'Anke',
            'last_name'     => 'Verschueren',
            'password'      => bcrypt('anke'),
            'email'         => 'anke@live.nl',
            'straat'        => 'Kapelstraat 10',
            'woonplaats'    => 'Nieuwenrode',
            'postcode'      => '1880',
            'admin'         => false
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-28',
            'end_date'      => '2016-10-29',
            'winning_code'  => '123456789',
            'prize'         => 'Koelkast',
            'image'         => 'koelkast.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-29',
            'end_date'      => '2016-10-30',
            'winning_code'  => '123456789',
            'prize'         => 'Fiets',
            'image'         => 'fiets.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-30',
            'end_date'      => '2016-10-31',
            'winning_code'  => '123456789',
            'prize'         => 'Laptop',
            'image'         => 'laptop.png',
        ]);
        DB::table('contests')->insert([
            'winner'        => '',
            'start_date'    => '2016-10-31',
            'end_date'      => '2016-11-01',
            'winning_code'  => '123456789',
            'prize'         => 'Tablet',
            'image'         => 'tablet.png',
        ]);
    }
}
