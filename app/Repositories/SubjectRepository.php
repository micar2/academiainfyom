<?php

namespace App\Repositories;

use App\Models\Subject;
use InfyOm\Generator\Common\BaseRepository;

class SubjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher',
        'start',
        'duration',
        'students_max',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Subject::class;
    }
}
