<?php

use Faker\Generator as Faker;

$factory->define(App\HotelSetting::class, function (Faker $faker) {
    $data = [
        "type" => array('Economic', 'Regular', 'Exclusive'),
        "floor" => 25,
    ];

    return [
        'data' => json_encode($data),
        'updated_at' => new \DateTime()
    ];
});
