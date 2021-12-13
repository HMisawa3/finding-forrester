<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {
    return [
        'book_id' => $faker->numberBetween($min=1,$max=10),
        'stock' => $faker->randomDigit,
        'difference' => $faker->randomDigit
    ];
});
