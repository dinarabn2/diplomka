<?php

namespace App\Models;

// use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Faculty
 * @package App\Models
 * @version April 19, 2023, 8:26 am UTC
 *
 * @property string $name
 * @property string $cipher
 */
class Faculty extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'faculties';
    

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
