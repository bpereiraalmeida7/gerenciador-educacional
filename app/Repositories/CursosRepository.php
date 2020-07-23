<?php

namespace App\Repositories;

use App\Models\Cursos;
use App\Repositories\BaseRepository;

/**
 * Class CursosRepository
 * @package App\Repositories
 * @version July 21, 2020, 4:45 am UTC
*/

class CursosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'codigo'
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
        return Cursos::class;
    }
}
