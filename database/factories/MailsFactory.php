<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mail;
use Faker\Generator as Faker;

$factory->define(Mail::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1,$max=10),
        'title' => $faker->word,
        'request' => $faker->randomDigit,
        'date' => $faker->dateTime,
        'sent' => $faker->randomDigit
    ];
});
