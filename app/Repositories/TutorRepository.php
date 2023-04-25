<?php

namespace App\Repositories;

use App\Models\Tutor;
use App\Repositories\BaseRepository;

/**
 * Class TutorRepository
 * @package App\Repositories
 * @version April 24, 2023, 8:24 pm UTC
*/

class TutorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Tutor::class;
    }
}
