<?php

namespace App\Repositories;

use App\Models\Alunos;
use App\Repositories\BaseRepository;

/**
 * Class AlunosRepository
 * @package App\Repositories
 * @version July 21, 2020, 5:33 am UTC
*/

class AlunosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'codigo',
        'situacao',
        'cep',
        'cidade',
        'estado',
        'bairro',
        'numero',
        'id_curso',
        'turma',
        'data_matricula',
        'complemento',
        'imagem'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Alunos::class;
    }
}
