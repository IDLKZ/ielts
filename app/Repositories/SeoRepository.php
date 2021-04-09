<?php

namespace App\Repositories;

use App\Models\Seo;
use App\Repositories\BaseRepository;

/**
 * Class SeoRepository
 * @package App\Repositories
 * @version April 8, 2021, 3:16 pm UTC
*/

class SeoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'page',
        'title',
        'description',
        'keywords'
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
        return Seo::class;
    }
}
