<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comentary
 * @package App\Models
 * @version March 27, 2018, 11:14 am UTC
 */
class Comentary extends Model
{
    use SoftDeletes;

    public $table = 'comentaries';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'content',
        'post_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'content' => 'string',
        'post_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'content' => 'required',
        'post_id' => 'required',
        'user_id' => 'integer'
    ];

    
}
