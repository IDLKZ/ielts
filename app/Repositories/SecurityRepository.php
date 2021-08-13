<?php

namespace App\Repositories;

use App\Models\Security;
use App\Repositories\BaseRepository;

/**
 * Class SecurityRepository
 * @package App\Repositories
 * @version August 13, 2021, 5:26 am UTC
*/

class SecurityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en'
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
        return Security::class;
    }
}
