<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Client;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

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

$factory->define(Client::class, function (Faker $faker) {
    return [
        'prenom' => $faker->sentence(),
        'nom' => $faker->sentence(),
        'ci' => $faker->sentence(),
        'delivre' => $faker->sentence(),
        'telephone' => $faker->sentence(),
        'prix' => random_int(-2147483648, 2147483647),
        'local1' => $faker->sentence(),
        'arrivee' => $faker->sentence(),
        'depart' => $faker->sentence(),
        'contrat' => $faker->sentence(),
        'titre' => $faker->sentence(),
        'image' => $faker->sentence(),
        'garantie' => $faker->sentence()
    ];
});
