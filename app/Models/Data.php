<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;



    public static function main(){
        $data["background"] = Background::orderBy('created_at', 'desc')->firstWhere(["language_id"=>Language::getLanguage()]);
        $data["ielts"] = Ielts::where("language_id", Language::getLanguage())->get();
        $data["about"] = About::orderBy('created_at', 'asc')->firstWhere(["language_id"=>Language::getLanguage()]);
        $data["advantages"] = Advantage::where("language_id", Language::getLanguage())->get();
        $data["reviews"] = Review::where("language_id", Language::getLanguage())->get();
        $data["prices"] = Price::count()>3 ? Price::where("language_id", Language::getLanguage())->where("teacher_id",null)->take(3)->get() : Price::where("language_id", Language::getLanguage())->where("teacher_id",null)->get();
        $data["services"] = Service::count() >= 3 ? Service::orderBy('created_at', 'asc')->where("language_id", Language::getLanguage())->take(3)->get() : Service::orderBy('created_at', 'asc')->where("language_id", Language::getLanguage())->get();
        $data["news"] = News::count() >= 3 ? News::orderBy('created_at', 'asc')->where("language_id", Language::getLanguage())->take(3)->get() : News::orderBy('created_at', 'asc')->where("language_id", Language::getLanguage())->get();
        $data["headers"]["main"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","main");
        $data["headers"]["ielts"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","ielts");
        $data["headers"]["about"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","about");
        $data["headers"]["advantage"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","advantage");
        $data["headers"]["review"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","review");
        $data["headers"]["price"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","price");
        $data["headers"]["service"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","service");
        $data["headers"]["news"] = Header::orderBy("created_at","desc")->where("language_id", Language::getLanguage())->firstWhere("page","news");


        return $data;

    }
}
