<?php

namespace App\Repositories;

use App\Models\Header;
use App\Repositories\BaseRepository;

/**
 * Class HeaderRepository
 * @package App\Repositories
 * @version April 8, 2021, 2:31 pm UTC
*/

class HeaderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'page',
        'title',
        'subtitle'
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
        return Header::class;
    }
}
