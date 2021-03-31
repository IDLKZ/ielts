<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Advantage
 * @package App\Models
 * @version March 30, 2021, 3:19 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $title
 * @property string $subtitle
 * @property string $img
 */
class Advantage extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'advantages';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'title',
        'subtitle',
        'img'
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
        'subtitle' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'img' => 'required|image|max:4096',
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
