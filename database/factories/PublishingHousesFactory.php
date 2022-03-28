<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PublishingHouses;
use Faker\Generator as Faker;

$factory->define(PublishingHouses::class, function (Faker $faker) {
    return [
        'name' => $faker->name
    ];
});
