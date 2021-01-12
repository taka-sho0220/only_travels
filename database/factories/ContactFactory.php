<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email'  => $faker->safeEmail,
        'subject' => $faker->realText($maxNbChars = 15, $indexSize = 1),
        'message' => $faker->realText($maxNbChars = 30, $indexSize = 1)
    ];
});
