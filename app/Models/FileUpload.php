<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileUpload extends Model
{
    use HasFactory;




    public static function createFile($request,$file,$directory,$isReq,$filename=null){

        if ($request->has($file)){
            $File = $request->file($file);
            $fullname =  Str::random(10) ."." . $File->getClientOriginalExtension();
            $File->storeAs("/uploads/",$fullname);
            return "/uploads/" . $fullname;
        }
        else{
            if($isReq){
                return "/no-image.png";
            }
            else{
                return  null;
            }
        }
    }

    public static function updateFile($modelFile,$request,$file,$directory,$isReq,$filename=null){
        if ($request->has($file)){
          self::deleteFile($modelFile);
          return self::createFile($request,$file,$directory,$isReq,$filename);
        }
        else{
            return $modelFile;
        }
    }

    public static function deleteFile($modelFile){
        if(Storage::exists($modelFile)){Storage::delete($modelFile);}
    }
}
