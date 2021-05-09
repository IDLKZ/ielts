<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/**
 * Class Schedule
 * @package App\Models
 * @version May 5, 2021, 4:03 am UTC
 *
 * @property string $start
 * @property string $end
 * @property string $weekday
 * @property string $coachers
 * @property string $title
 * @property string $type
 */
class Schedule extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'schedules';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'language_id',
        'start',
        'end',
        'weekday',
        'coachers',
        'title',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'language_id' => 'integer',
        'start' => 'string',
        'end' => 'string',
        'weekday' => 'string',
        'coachers' => 'string',
        'title' => 'string',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'language_id' => 'required',
        'start' => 'required|string|max:255',
        'end' => 'required|string|max:255',
        'weekday' => 'required|string|max:255',
        'coachers' => 'required',
        'title' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function language()
    {
        return $this->belongsTo(\App\Models\Language::class, 'language_id');
    }

    public static function getSchedule(){
        $schedules = Schedule::orderBy('start',"asc")->get()->toArray();
//        if (LaravelLocalization::getCurrentLocale() == 'en') {
            $dayweek = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];
//        }
//        if (LaravelLocalization::getCurrentLocale() == 'ru') {
//            $dayweek = ["Понедельник","Вторник","Среда","Четверг","Пятница","Суббота","Воскресенье"];
//        }
//        if (LaravelLocalization::getCurrentLocale() == 'kz') {
//            $dayweek = ["Дүйсенбі","Сейсенбі","Сәрсенбі","Бейсенбі","Жұма","Сенбі","Жексенбі"];
//        }
        $data=[];
        if (count($schedules)>0){
            foreach ($dayweek as $day) {
                foreach ($schedules as $schedule){
                    if ($schedule['weekday'] == $day) {
                        $data[$schedule['start']][$day] = $schedule;
                    }
                }
            }
        }
        else{
            $data =[];
        }
        return $data;
    }
}
