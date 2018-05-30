<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) {
    return [
        'identifier' => 'Room '.uniqid(),
        'type' => 'Regular',
        'bed_count' => rand(1, 2),
        'breakfast' => 1,
        'floor' => rand(1, 25),
        'is_available' => 1,
        'price' => '250000',
    ];
});
