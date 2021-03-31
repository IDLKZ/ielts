<?php

namespace App\Repositories;

use App\Models\Ielts;
use App\Repositories\BaseRepository;

/**
 * Class IeltsRepository
 * @package App\Repositories
 * @version March 30, 2021, 11:53 am UTC
*/

class IeltsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'alias',
        'title',
        'language_id',
        'img',
        'description'
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
        return Ielts::class;
    }
}
