<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\BaseRepository;

/**
 * Class StudentRepository
 * @package App\Repositories
 * @version April 19, 2023, 8:16 am UTC
*/

class StudentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'surname',
        'phone',
        'birthday',
        'course',
        'education_type',
        'gender'
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
        return Student::class;
    }

    public function addStudent($request, $action)
    {
        $destinationPath = public_path('files/students/');
        $input = $action->handle($request, $destinationPath);

        return $this->create($input);
    }

    public function updateStudent($request, $id, $action)
    {
        $destinationPath = public_path('/files/students/');
        $input = $action->handle($request, $destinationPath);

        return $this->update($input, $id);
    }
}
