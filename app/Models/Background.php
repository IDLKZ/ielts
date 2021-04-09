<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Background
 * @package App\Models
 * @version March 30, 2021, 10:19 am UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $title
 * @property string $subtitle
 * @property string $video_url
 */
class Background extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'background';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'title',
        'subtitle',
        'video_url'
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
        'video_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'video_url' => 'nullable|url|max:255',
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
