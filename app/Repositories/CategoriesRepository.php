<?php

namespace App\Repositories;

use App\Models\Categories;
use InfyOm\Generator\Common\BaseRepository;

class CategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categories::class;
    }
}
