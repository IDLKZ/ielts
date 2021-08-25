<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceTeacher extends Model
{
    use HasFactory;

    protected $table = "service_teacher";


    protected $fillable = ["service_id","teacher"];



    public function teacherServ(){
        return $this->belongsTo(Teacher::class,"teacher","id");
    }

    public function service(){
        return $this->belongsTo(Service::class,"service_id","id");
    }


}
