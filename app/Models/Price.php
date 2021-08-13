<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Price
 * @package App\Models
 * @version March 30, 2021, 7:38 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $title
 * @property number $price
 * @property string $currency
 * @property string $benefits
 * @property string $subtitle
 */
class Price extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'prices';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'title',
        'price',
        'currency',
        'benefits',
        'subtitle',
        "teacher_id"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language_id' => 'integer',
        'title' => 'string',
        'price' => 'float',
        'currency' => 'string',
        'benefits' => 'array',
        'subtitle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'title' => 'required|string|max:255',
        'price' => 'required|numeric',
        'currency' => 'required|string|max:255',
        'benefits' => 'required',
        'subtitle' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function language()
    {
        return $this->belongsTo(\App\Models\Language::class, 'language_id');
    }

    public function teacher()
    {
        return $this->belongsTo(\App\Models\Teacher::class, 'teacher_id');
    }
}
