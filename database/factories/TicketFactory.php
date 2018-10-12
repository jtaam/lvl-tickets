<?php

use Faker\Generator as Faker;

$factory->define(App\Ticket::class, function (Faker $faker) {
    return [
        'summary'=>$faker->sentence,
        'description'=>$faker->text,
        'status'=>$faker->word
    ];
});
