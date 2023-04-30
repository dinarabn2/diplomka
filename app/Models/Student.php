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
        'email',
        'img',
        'text',
        'birthday',
        'course',
        'education_type',
        'gender',
        'group_id',
        'social_status_id'
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
        'email' => 'string',
        'img' => 'string',
        'text' => 'string',
        'birthday' => 'string',
        'course' => 'string',
        'education_type' => 'string',
        'gender' => 'string',
        'group_id' => 'integer',
        'social_status_id' => 'integer' 
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
        'email' => 'required',
        'birthday' => 'required',
        'course' => 'required',
        'education_type' => 'required',
        'gender' => 'required',
        'group_id' => 'required',
        'social_status_id' => 'nullable'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function socialStatus()
    {
        return $this->belongsTo(SocialStatus::class);
    }
}
