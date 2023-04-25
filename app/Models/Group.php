<?php

namespace App\Models;

// use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Group
 * @package App\Models
 * @version April 24, 2023, 8:29 pm UTC
 *
 * @property string $name
 */
class Group extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'groups';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'tutor_id',
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
        'tutor_id' => 'integer',
        'faculty_id' => 'integer',
        'speciality_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'tutor_id' => 'required',
        'faculty_id' => 'required',
        'speciality_id' => 'required'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
