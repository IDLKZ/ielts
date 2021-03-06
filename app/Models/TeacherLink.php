<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class TeacherLink
 * @package App\Models
 * @version March 30, 2021, 6:55 pm UTC
 *
 * @property \App\Models\Teacher $teacher
 * @property integer $teacher_id
 * @property string $icon
 * @property string $link
 */
class TeacherLink extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'teacher_links';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'teacher_id',
        'icon',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'teacher_id' => 'integer',
        'icon' => 'string',
        'link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'teacher_id' => 'required',
        'icon' => 'required|string|max:255',
        'link' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function teacher()
    {
        return $this->belongsTo(\App\Models\Teacher::class, 'teacher_id');
    }
}
