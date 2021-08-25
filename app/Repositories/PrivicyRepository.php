<?php

namespace App\Repositories;

use App\Models\Privicy;
use App\Repositories\BaseRepository;

/**
 * Class PrivicyRepository
 * @package App\Repositories
 * @version August 24, 2021, 3:41 pm UTC
*/

class PrivicyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'title',
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
        return Privicy::class;
    }
}
