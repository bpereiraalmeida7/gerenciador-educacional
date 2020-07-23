<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Alunos;
use Faker\Generator as Faker;

$factory->define(Alunos::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'codigo' => $faker->randomDigitNotNull,
        'situacao' => $faker->word,
        'cep' => $faker->word,
        'cidade' => $faker->word,
        'estado' => $faker->word,
        'bairro' => $faker->word,
        'numero' => $faker->randomDigitNotNull,
        'id_curso' => $faker->randomDigitNotNull,
        'turma' => $faker->word,
        'data_matricula' => $faker->word,
        'complemento' => $faker->word,
        'imagem' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
