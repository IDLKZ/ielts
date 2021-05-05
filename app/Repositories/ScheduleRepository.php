<?php

namespace App\Repositories;

use App\Models\Schedule;
use App\Repositories\BaseRepository;

/**
 * Class ScheduleRepository
 * @package App\Repositories
 * @version May 5, 2021, 4:03 am UTC
*/

class ScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'start',
        'end',
        'weekday',
        'coachers',
        'title',
        'type'
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
        return Schedule::class;
    }
}
