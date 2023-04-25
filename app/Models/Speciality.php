<?php

namespace App\Models;

// use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Speciality
 * @package App\Models
 * @version April 23, 2023, 6:48 am UTC
 *
 * @property string $name
 * @property string $cipher
 */
class Speciality extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'specialities';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'cipher',
        'faculty_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'cipher' => 'string',
        'faculty_id'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'cipher' => 'required',
        'faculty_id'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
    
}
