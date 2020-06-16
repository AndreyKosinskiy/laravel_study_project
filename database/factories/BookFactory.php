<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
            'title' => $faker->name,
            'author' => $faker->name,
            'short_description' => $faker->text($maxNbChars = 200),
            'cover' => $faker->imageUrl($width = 640, $height = 480),
            'ganre' => $faker->randomElement($array = array ('a','b','c')),
    ];
});
