<?php

namespace App\Repositories;

use App\Models\Social;
use App\Repositories\BaseRepository;

/**
 * Class SocialRepository
 * @package App\Repositories
 * @version April 10, 2021, 7:19 am UTC
*/

class SocialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'icon',
        'link'
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
        return Social::class;
    }
}
