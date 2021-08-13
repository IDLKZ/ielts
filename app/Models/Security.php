<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Security
 * @package App\Models
 * @version August 13, 2021, 5:26 am UTC
 *
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $description_ru
 * @property string $description_kz
 * @property string $description_en
 */
class Security extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'securities';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'description_ru' => 'string',
        'description_kz' => 'string',
        'description_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'required|string|max:255',
        'title_en' => 'required|string|max:255',
        'description_ru' => 'required|string',
        'description_kz' => 'required|string',
        'description_en' => 'required|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
