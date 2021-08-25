<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    use HasFactory;
    protected $table = "pupils";
    protected $fillable = ["workday_id","student","description"];


    public function workdays(){
        return $this->belongsTo(Workday::class,"workday_id");
    }


}
