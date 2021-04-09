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
}
