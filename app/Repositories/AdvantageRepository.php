<?php

namespace App\Repositories;

use App\Models\Advantage;
use App\Repositories\BaseRepository;

/**
 * Class AdvantageRepository
 * @package App\Repositories
 * @version March 30, 2021, 3:19 pm UTC
*/

class AdvantageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'title',
        'subtitle',
        'img'
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
        return Advantage::class;
    }
}
