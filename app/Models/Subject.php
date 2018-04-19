<?php

namespace App\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subject
 * @package App\Models
 * @version March 27, 2018, 10:49 am UTC
 */
class Subject extends Model
{
    use SoftDeletes;

    public $table = 'subjects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'teacher',
        'name',
        'category',
        'start',
        'duration',
        'students_max',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher' => 'integer',
        'category' => 'integer',
        'start' => 'string',
        'name' => 'string',
        'students_max' => 'string',
        'price' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher' => 'required'
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lessons::class);
    }

    public function enrolment()
    {
        return $this->hasMany(Enrolment::class);
    }


}
