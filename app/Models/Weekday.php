<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Weekday extends Model
{
    protected $table = "weekdays";
    use HasFactory;

    public function getTitleAttribute()
    {
        return $this["title_" . LaravelLocalization::getCurrentLocale()];
    }
}
