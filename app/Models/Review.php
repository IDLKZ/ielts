<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Review
 * @package App\Models
 * @version March 30, 2021, 8:34 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $title
 * @property string $description
 * @property string $author
 * @property string $position
 * @property string $img
 */
class Review extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'reviews';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'title',
        'description',
        'author',
        'position',
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
        'description' => 'string',
        'author' => 'string',
        'position' => 'string',
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
        'description' => 'required|string',
        'author' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'img' => 'required|file|max:4096|image',
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
