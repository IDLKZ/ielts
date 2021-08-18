<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Service
 * @package App\Models
 * @version March 30, 2021, 5:22 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $img
 * @property string $title
 * @property string $subtitle
 * @property string $description
 */
class Service extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'services';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'img',
        'title',
        'subtitle',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language_id' => 'integer',
        'img' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'img' => 'required|file|max:100000|image',
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'description' => 'required|string',
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
}
