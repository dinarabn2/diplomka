<?php

namespace App\Models;

// use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Student
 * @package App\Models
 * @version April 19, 2023, 8:16 am UTC
 *
 * @property string $name
 * @property string $surname
 * @property string $phone
 * @property string $birthday
 * @property string $course
 * @property string $education_type
 * @property string $gender
 */
class Student extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'students';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'surname',
        'phone',
        'img',
        'text',
        'birthday',
        'course',
        'education_type',
        'gender',
        'faculty_id',
        'speciality_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'surname' => 'string',
        'phone' => 'string',
        'img' => 'string',
        'text' => 'string',
        'birthday' => 'string',
        'course' => 'string',
        'education_type' => 'string',
        'gender' => 'string',
        'faculty_id' => 'integer',
        'speciality_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'surname' => 'required',
        'phone' => 'required',
        'birthday' => 'required',
        'course' => 'required',
        'education_type' => 'required',
        'gender' => 'required',
        'faculty_id' => 'required',
        'speciality_id' => 'required',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
