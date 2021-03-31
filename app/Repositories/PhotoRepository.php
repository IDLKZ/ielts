<?php

namespace App\Repositories;

use App\Models\Photo;
use App\Repositories\BaseRepository;

/**
 * Class PhotoRepository
 * @package App\Repositories
 * @version March 30, 2021, 9:02 pm UTC
*/

class PhotoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'phone'
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
        return Photo::class;
    }
}
