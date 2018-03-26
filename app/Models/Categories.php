<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categories
 * @package App\Models
 * @version March 20, 2018, 3:38 pm UTC
 */
class Categories extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'category_id',
        'route'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'category_id' => 'integer',
        'route'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
    ];

    public static function generateCategoryRoute($category)
    {
        $category = (object) $category;
        $route=$category->name.'-';

            $parentCategory = Categories::find($category->category_id);

            while ($parentCategory->id != 1){
                $route.=$parentCategory->name.'-';
                $parentCategory = Categories::find($parentCategory->category_id);
            }
            $route=trim($route, '-');
            return $route;


    }


    
}
