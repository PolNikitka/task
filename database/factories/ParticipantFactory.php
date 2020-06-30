<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Participant;
use Faker\Generator as Faker;

$factory->define(Participant::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bonus_score' => json_encode([
            "current-value" => $faker->randomFloat(),
            "max-value" => $faker -> randomFloat()
        ]),
        'profile_url' => $faker ->text(15)
    ];
});
