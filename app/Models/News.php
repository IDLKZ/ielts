<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class News
 * @package App\Models
 * @version March 30, 2021, 4:50 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $alias
 * @property string $img
 * @property string $title
 * @property string $subtitle
 * @property string $content
 */
class News extends Model
{
//    use SoftDeletes;
    use Sluggable;
    use HasFactory;

    public $table = 'news';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'alias',
        'img',
        'title',
        'subtitle',
        'content'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language_id' => 'integer',
        'alias' => 'string',
        'img' => 'string',
        'title' => 'string',
        'subtitle' => 'string',
        'content' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'img' => 'required|file|max:4096|image',
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'content' => 'required|string',
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
    public function sluggable(): array
    {
        return [
            'alias' => [
                'source' => 'title'
            ]
        ];
    }
}
