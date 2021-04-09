<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Header
 * @package App\Models
 * @version April 8, 2021, 2:31 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $page
 * @property string $title
 * @property string $subtitle
 */
class Header extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'headers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'page',
        'title',
        'subtitle'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language_id' => 'integer',
        'page' => 'string',
        'title' => 'string',
        'subtitle' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'page' => 'required|string|max:255',
        'title' => 'required|string|max:500',
        'subtitle' => 'required|string|max:500',
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
