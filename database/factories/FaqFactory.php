<?php

use App\Models\Faqs\Faq;
use Faker\Generator as Faker;

$factory->define(Faq::class, function (Faker $faker) {
    return [
        'question_name'  => rtrim($faker->sentence, '.').'?',
        'question_text'    => $faker->paragraph,
        'status'    => $faker->numberBetween(0, 1),
    ];
});
