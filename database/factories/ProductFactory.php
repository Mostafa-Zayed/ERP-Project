<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => json_encode([
            'en' => $faker->name,
            'ar' => $faker->name
        ]),
        'description' => json_encode([
            'en' => $faker->sentence,
            'ar' => $faker->sentence
        ]),
        'price' => $faker->numberBetween(5,10000),
        'image' => $faker->name
    ];
});
