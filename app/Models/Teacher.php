<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Teacher
 * @package App\Models
 * @version March 30, 2021, 6:06 pm UTC
 *
 * @property \App\Models\Language $language
 * @property integer $language_id
 * @property string $alias
 * @property string $name
 * @property string $position
 * @property string $img
 * @property string $description
 */
class Teacher extends Model
{
//    use SoftDeletes;
    use Sluggable;
    use HasFactory;

    public $table = 'teachers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'alias',
        'name',
        'position',
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
        'language_id' => 'integer',
        'alias' => 'string',
        'name' => 'string',
        'position' => 'string',
        'img' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'img' => 'required|file|max:100000|image',
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
    public function socialLink(){
        return $this->hasMany(TeacherLink::class,"teacher_id","id");
    }
    public function sluggable(): array
    {
        return [
            'alias' => [
                'source' => 'name'
            ]
        ];
    }
}
