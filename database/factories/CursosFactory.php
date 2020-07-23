<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cursos;
use Faker\Generator as Faker;

$factory->define(Cursos::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'codigo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
