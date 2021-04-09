<?php

namespace App\Repositories;

use App\Models\Logo;
use App\Repositories\BaseRepository;

/**
 * Class LogoRepository
 * @package App\Repositories
 * @version April 8, 2021, 4:15 pm UTC
*/

class LogoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Logo::class;
    }
}
