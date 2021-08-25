<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/**
 * Class Workday
 * @package App\Models
 * @version August 13, 2021, 9:13 am UTC
 *
 * @property \App\Models\Teacher $teacher
 * @property \App\Models\Weekday $weekday
 * @property integer $weekday_id
 * @property integer $teacher_id
 * @property string $title
 * @property string $date_start
 * @property string $date_end
 * @property string $time_start
 * @property string $time_end
 */
class Workday extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'workdays';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'weekday_id',
        'teacher_id',
        'title',
        'date_start',
        'date_end',
        'time_start',
        'time_end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'weekday_id' => 'integer',
        'teacher_id' => 'integer',
        'title' => 'string',
        'date_start' => 'string',
        'date_end' => 'string',
        'time_start' => 'string',
        'time_end' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'weekday_id' => 'required',
        'teacher_id' => 'required',
        'title' => 'required|string|max:1000',
        'date_start' => 'nullable|string|max:255',
        'date_end' => 'nullable|string|max:255',
        'time_start' => 'nullable|string|max:255',
        'time_end' => 'nullable|string|max:255',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function weekday()
    {
        return $this->belongsTo(\App\Models\Weekday::class, 'weekday_id');
    }

    public function pupils(){
        return $this->hasMany(Pupil::class);
    }
}
