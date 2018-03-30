<?php

namespace App\Repositories;

use App\Models\Lessons;
use InfyOm\Generator\Common\BaseRepository;

class LessonsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classroom',
        'hour',
        'subject'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lessons::class;
    }
}
