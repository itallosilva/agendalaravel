<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Endereco
 * @package App\Models
 * @version December 3, 2019, 9:26 am -02
 *
 * @property \App\Models\Pessoa pessoa
 * @property integer pessoa_id
 * @property string logradouro
 * @property string numero
 * @property string complemento
 * @property string bairro
 * @property string cep
 * @property string cidade
 * @property string uf
 * @property integer tipo
 */
class Endereco extends Model
{

    public $table = 'enderecos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'pessoa_id',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'cidade',
        'uf',
        'tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pessoa_id' => 'integer',
        'logradouro' => 'string',
        'numero' => 'string',
        'complemento' => 'string',
        'bairro' => 'string',
        'cep' => 'string',
        'cidade' => 'string',
        'uf' => 'string',
        'tipo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pessoa_id' => 'required',
        'logradouro' => 'required',
        'numero' => 'required',
        'bairro' => 'required',
        'cep' => 'required',
        'cidade' => 'required',
        'uf' => 'required',
        'tipo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pessoa()
    {
        return $this->belongsTo(\App\Models\Pessoa::class, 'pessoa_id');
    }
}
