<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Ielts
 * @package App\Models
 * @version March 30, 2021, 11:53 am UTC
 *
 * @property \App\Models\Language $language
 * @property string $alias
 * @property string $title
 * @property integer $language_id
 * @property string $img
 * @property string $description
 */
class Ielts extends Model
{
//    use SoftDeletes;
    use Sluggable;
    use HasFactory;

    public $table = 'ielts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'alias',
        'title',
        'language_id',
        'img',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'alias' => 'string',
        'title' => 'string',
        'language_id' => 'integer',
        'img' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'language_id' => 'required',
        'img' => 'required|image|max:4096|file',
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

    public function sluggable(): array
    {
        return [
            'alias' => [
                'source' => 'title'
            ]
        ];
    }
}
