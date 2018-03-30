<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Document
 * @package App\Models
 * @version March 28, 2018, 6:25 pm UTC
 */
class Document extends Model
{
    use SoftDeletes;

    public $table = 'documents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'type',
        'visibility',
        'content',
        'category',
        'user'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'visibility' => 'string',
        'content' => 'string',
        'category' => 'integer',
        'user' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'type' => 'required',
        'visibility' => 'required',
        'content' => 'required',
        'category' => 'required',
        'user' => 'required'
    ];

    
}
