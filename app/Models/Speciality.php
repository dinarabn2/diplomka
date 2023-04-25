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
        'cipher'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'cipher' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'cipher' => 'required'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    
}
