<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Enrolment
 * @package App\Models
 * @version March 30, 2018, 8:48 am UTC
 */
class Enrolment extends Model
{
    use SoftDeletes;

    public $table = 'enrolments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'student',
        'subject',
        'paid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student' => 'integer',
        'subject' => 'integer',
        'paid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'student' => 'required',
        'subject' => 'required',
        'paid' => 'required'
    ];

    
}
