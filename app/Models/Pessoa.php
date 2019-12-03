<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Pessoa
 * @package App\Models
 * @version December 3, 2019, 2:52 am UTC
 *
 * @property string nome
 * @property string sobrenome
 * @property string nascimento
 * @property string email
 */
class Pessoa extends Model
{

    public $table = 'pessoas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'nome',
        'sobrenome',
        'nascimento',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'sobrenome' => 'string',
        'nascimento' => 'date',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'sobrenome' => 'required',
        'nascimento' => 'required',
        'email' => 'required'
    ];

    public function enderecos()
    {
        return $this->hasMany(\App\Models\Endereco::class);
    } 
    
}
