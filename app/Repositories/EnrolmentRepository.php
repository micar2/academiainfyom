<?php

namespace App\Repositories;

use App\Models\Enrolment;
use InfyOm\Generator\Common\BaseRepository;

class EnrolmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student',
        'subject',
        'paid'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Enrolment::class;
    }
}
