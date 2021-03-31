<?php

namespace App\Repositories;

use App\Models\TeacherLink;
use App\Repositories\BaseRepository;

/**
 * Class TeacherLinkRepository
 * @package App\Repositories
 * @version March 30, 2021, 6:55 pm UTC
*/

class TeacherLinkRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'teacher_id',
        'icon',
        'link'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TeacherLink::class;
    }
}
