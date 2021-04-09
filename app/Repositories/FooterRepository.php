<?php

namespace App\Repositories;

use App\Models\Footer;
use App\Repositories\BaseRepository;

/**
 * Class FooterRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:17 pm UTC
*/

class FooterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'img',
        'title'
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
        return Footer::class;
    }
}
