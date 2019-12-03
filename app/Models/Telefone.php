<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Telefone
 * @package App\Models
 * @version December 3, 2019, 10:52 am -02
 *
 * @property \App\Models\Pessoa pessoa
 * @property integer pessoa_id
 * @property string numero
 * @property integer tipo
 */
class Telefone extends Model
{
    public $table = 'telefones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'pessoa_id',
        'numero',
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
        'numero' => 'string',
        'tipo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pessoa_id' => 'required',
        'numero' => 'required',
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
