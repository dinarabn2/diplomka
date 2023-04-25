<?php

namespace App\Models;

// use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tutor
 * @package App\Models
 * @version April 24, 2023, 8:24 pm UTC
 *
 * @property string $name
 */
class Tutor extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tutors';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
