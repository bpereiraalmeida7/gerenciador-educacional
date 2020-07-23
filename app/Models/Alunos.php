<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Alunos
 * @package App\Models
 * @version July 21, 2020, 5:33 am UTC
 *
 * @property string $nome
 * @property integer $codigo
 * @property boolean $situacao
 * @property string $cep
 * @property string $cidade
 * @property string $estado
 * @property string $bairro
 * @property integer $numero
 * @property integer $id_curso
 * @property string $turma
 * @property string $data_matricula
 * @property string $complemento
 * @property string $imagem
 */
class Alunos extends Model
{

    public $table = 'alunos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'codigo' => 'integer',
        'situacao' => 'boolean',
        'cep' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'bairro' => 'string',
        'numero' => 'integer',
        'id_curso' => 'integer',
        'turma' => 'string',
        'data_matricula' => 'date',
        'complemento' => 'string',
        'imagem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'codigo' => 'required',
        'situacao' => 'required',
        'id_curso' => 'required',
        'data_matricula' => 'required'
    ];

    
}
