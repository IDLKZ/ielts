<?php

namespace App\Repositories;

use App\Models\Background;
use App\Repositories\BaseRepository;

/**
 * Class BackgroundRepository
 * @package App\Repositories
 * @version March 30, 2021, 10:19 am UTC
*/

class BackgroundRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'title',
        'subtitle',
        'video_url'
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
        return Background::class;
    }
}
