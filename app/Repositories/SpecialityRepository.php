<?php

namespace App\Repositories;

use App\Models\Speciality;
use App\Repositories\BaseRepository;

/**
 * Class SpecialityRepository
 * @package App\Repositories
 * @version April 23, 2023, 6:48 am UTC
*/

class SpecialityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'cipher'
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
        return Speciality::class;
    }
}
