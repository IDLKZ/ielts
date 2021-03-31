<?php

namespace App\Repositories;

use App\Models\Price;
use App\Repositories\BaseRepository;

/**
 * Class PriceRepository
 * @package App\Repositories
 * @version March 30, 2021, 7:38 pm UTC
*/

class PriceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'language_id',
        'title',
        'price',
        'currency',
        'benefits',
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
        return Price::class;
    }
}
