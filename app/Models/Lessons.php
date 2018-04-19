<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lessons
 * @package App\Models
 * @version March 27, 2018, 10:44 am UTC
 */
class Lessons extends Model
{
    use SoftDeletes;

    public $table = 'lessons';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'classroom',
        'hour',
        'subject'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom' => 'string',
        'hour' => 'string',
        'subject' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom' => 'required',
        'hour' => 'required',
        'subject' => 'required'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    
}
