<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    return [
        'week' => $faker->randomDigitNotNull,
        'mandatory' => $faker->boolean(),
        'title' => $faker->company,
        'artist' => $faker->name(),
        'selected_by' => $faker->randomElement($users),
        'score' => $faker->randomFloat(2, 0, 10),
    ];
});
