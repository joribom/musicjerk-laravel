<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    $users = App\User::pluck('id')->toArray();
    $title = $faker->company;
    $artist = $faker->company;
    return [
        'week' => $faker->randomDigitNotNull,
        'mandatory' => $faker->boolean(),
        'title' => $title,
        'artist' => $artist,
        'selected_by' => $faker->randomElement($users),
        'url' => strtolower(str_replace(' ', '-', $title) . '-' . str_replace(' ', '-', $artist)),
        'score' => $faker->randomFloat(2, 0, 10),
        'summary' => $faker->text(2000),
    ];
});
