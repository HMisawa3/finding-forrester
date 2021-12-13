<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min=1,$max=10),
        'title' => $faker->word,
        'author' => $faker->name,
        'type' => $faker->randomElement(['ホラー', 'ミステリー', 'アクション', '恋愛', 'SF', '歴史', '自伝'])
    ];
});