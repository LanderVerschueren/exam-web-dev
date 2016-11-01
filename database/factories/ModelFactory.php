<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Contestant::class, function (Faker\Generator $faker) {
    $contests = App\Contest::all();
    date_default_timezone_set('Europe/Brussels');
    $current_date = date('Y-m-d');
    
    foreach( $contests as $contest ) {
        if( $contest->start_date < $current_date && $contest->end_date >= $current_date ) {
            $contest_id = $contest->id;
        }
    }

    return [
        'name' => $faker->name,
        'code' => $faker->unique()->randomNumber,
        'adres' => $faker->streetName,
        'woonplaats' => $faker->city,
        'ip' => $faker->ipv4,
        'contest_id' => $contest_id,
    ];
});
