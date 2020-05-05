<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Transfer;
use Faker\Generator as Faker;

$factory->define(Transfer::class, function (Faker $faker) {
    return [
        'description' => $faker->text($maxNbChars = 200), 
        'amount' => $faker->numberBetween($min = 150, $max = 500),
        'wallet_id' => $faker->randomDigitNotNull,
    ];
});
