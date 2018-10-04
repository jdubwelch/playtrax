<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Event::class, function(Faker $faker) {
    return [
        'game_id'      => 1,
        'user_id'      => 1,
        'quarter'      => 1,
        'type'         => 'run',
        'play'         => 'Spin 28 Sweep',
        'yardage'      => 6,
        'ball_carrier' => 8,
        'tackled_by'   => 32
    ];
});

$factory->define(App\Game::class, function (Faker $faker) {
    return [
        'user_id' => 1
    ];
});
