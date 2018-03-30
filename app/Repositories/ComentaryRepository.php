<?php

namespace App\Repositories;

use App\Models\Comentary;
use InfyOm\Generator\Common\BaseRepository;

class ComentaryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'post_id',
        'content',
        'post_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Comentary::class;
    }
}
