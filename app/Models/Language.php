<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Language extends Model
{
    use HasFactory;
    protected $table = "languages";



    public static function getLanguage(){
        $language = Language::where("format",LaravelLocalization::getCurrentLocale())->first();
        if ($language){
            return $language->id;
        }
        else{
            return 1;
        }
    }

    public static function getDays()
    {
        switch (LaravelLocalization::getCurrentLocale()) {
            case 'en':
                $dayweek = [
                    "Monday" => "Monday",
                    "Tuesday" => "Tuesday",
                    "Wednesday" => "Wednesday",
                    "Thursday" => "Thursday",
                    "Friday" => "Friday",
                    "Saturday" => "Saturday",
                    "Sunday" => "Sunday"
                ];
                break;
            case 'ru':
                $dayweek = [
                    "Понедельник" => "Понедельник",
                    "Вторник" => "Вторник",
                    "Среда" => "Среда",
                    "Четверг" => "Четверг",
                    "Пятница" => "Пятница",
                    "Суббота" => "Суббота",
                    "Воскресенье" => "Воскресенье"
                ];
                break;
            case 'kz':
                $dayweek = [
                    "Дүйсенбі" => "Дүйсенбі",
                    "Сейсенбі" => "Сейсенбі",
                    "Сәрсенбі" => "Сәрсенбі",
                    "Бейсенбі" => "Бейсенбі",
                    "Жұма" => "Жұма",
                    "Сенбі" => "Сенбі",
                    "Жексенбі" => "Жексенбі"
                ];
                break;
        }
        return $dayweek;
    }

    public static function getLang()
    {
        switch (LaravelLocalization::getCurrentLocale()) {
            case 'en':
                $lang = 'English';
                break;
            case 'ru':
                $lang = 'Русский';
                break;
            case 'kz':
                $lang = 'Қазақ';
                break;
        }
        return $lang;
    }
}
