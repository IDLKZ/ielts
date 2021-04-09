<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Data;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Ielts;
use App\Models\Language;
use App\Models\News;
use App\Models\Price;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Teacher;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public static function index(){

        $seo = Seo::firstWhere(["page"=>"main","language_id"=>Language::getLanguage()]);
        $data = Data::main();

        return view("frontend.index",compact("seo","data"));
    }

    public function about(){
        $data = About::where("language_id",Language::getLanguage())->orderBy("created_at","desc")->first();
        return view("frontend.about",compact("data"));
    }

    public function teacher(){
        $teachers = Teacher::where("language_id",Language::getLanguage())->get();
        return view("frontend.teacher",compact("teachers"));
    }

    public function teacherInfo($alias){
        if($teacher = Teacher::firstWhere("alias",$alias)){
            return view("frontend.single-teacher",compact("teacher"));
        }
        else{
            abort(404);
        }
    }

    public function gallery(){
        $gallery = Gallery::all();
        return view("frontend.gallery",compact("gallery"));
    }
    public function faq(){
        $faqs = Faq::where("language_id",Language::getLanguage())->get();
        return view("frontend.faq",compact("faqs"));
    }

    public function ielts(){
        $ielts = Ielts::where("language_id",Language::getLanguage())->get();
        return view("frontend.ielts",compact("ielts"));
    }

    public function course(){
        $courses = Service::where("language_id",Language::getLanguage())->get();
        return view("frontend.course",compact("courses"));
    }

    public function courseInfo($alias){
        $course = Service::firstWhere("title",$alias);
        if($course){
            return view("frontend.single-course",compact("course"));
        }
        else{
            abort(404);
        }
    }



    public function prices(){
        $prices = Price::where("language_id",Language::getLanguage())->get();
        return view("frontend.price",compact("prices"));
    }

    public function blogs(){
        $blogs = News::where("language_id",Language::getLanguage())->orderBy('created_at', 'desc')->paginate(15);
        return view("frontend.blog",compact("blogs"));
    }
    public function blogInfo($alias){;
        if($blog = News::firstWhere("alias",$alias)){

            return view("frontend.blogSingle",compact("blog"));
        }
        else{
            abort(404);
        }


    }

    public function contact(){
        return view("frontend.contact");
    }



}
