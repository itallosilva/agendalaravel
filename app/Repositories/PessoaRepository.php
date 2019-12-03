<?php

namespace App\Repositories;

use App\Models\Pessoa;
use App\Repositories\BaseRepository;

/**
 * Class PessoaRepository
 * @package App\Repositories
 * @version December 3, 2019, 2:52 am UTC
*/

class PessoaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nome',
        'sobrenome',
        'nascimento',
        'email'
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
        return Pessoa::class;
    }
}
