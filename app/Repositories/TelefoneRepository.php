<?php

namespace App\Repositories;

use App\Models\Telefone;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TelefoneRepository
 * @package App\Repositories
 * @version December 3, 2019, 10:52 am -02
*/

class TelefoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pessoa_id',
        'numero',
        'tipo'
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
        return Telefone::class;
    }
}
