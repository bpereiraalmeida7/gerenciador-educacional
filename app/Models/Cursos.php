<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cursos
 * @package App\Models
 * @version July 21, 2020, 4:45 am UTC
 *
 * @property string $nome
 * @property string $codigo
 */
class Cursos extends Model
{

    public $table = 'cursos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nome',
        'codigo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'codigo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      
    ];

    
}
