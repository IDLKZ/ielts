<?php

namespace App\Repositories;

use App\Models\Workday;
use App\Repositories\BaseRepository;

/**
 * Class WorkdayRepository
 * @package App\Repositories
 * @version August 13, 2021, 9:13 am UTC
*/

class WorkdayRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'weekday_id',
        'teacher_id',
        'title',
        'date_start',
        'date_end',
        'time_start',
        'time_end'
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
        return Workday::class;
    }
}
