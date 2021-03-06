<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use App\Mail\SendModal;
use App\Models\About;
use App\Models\Data;
use App\Models\Document;
use App\Models\Email;
use App\Models\Faq;
use App\Models\Footer;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Ielts;
use App\Models\Language;
use App\Models\News;
use App\Models\Phone;
use App\Models\Price;
use App\Models\Privicy;
use App\Models\Schedule;
use App\Models\Security;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Social;
use App\Models\Teacher;
use App\Models\Weekday;
use App\Models\Workday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Laracasts\Flash\Flash;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class FrontendController extends Controller
{
    public static function index(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"main","language_id"=>Language::getLanguage()]);
        $data = Data::main();
        $phones = Phone::all();
        $emails = Email::all();
        return view("frontend.index",compact("seo","data", 'phones', 'emails'));
    }

    public function about(){
        $seo = Seo::firstWhere(["page"=>"about","language_id"=>Language::getLanguage()]);
        $data = About::where("language_id",Language::getLanguage())->orderBy("created_at","desc")->first();
        $header = Header::where(["language_id"=>Language::getLanguage(),"page"=>"about"])->orderBy("created_at","desc")->first();
        return view("frontend.about",compact("data","seo","header"));
    }

    public function teacher(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"teacher","language_id"=>Language::getLanguage()]);
        $teachers = Teacher::where("language_id",Language::getLanguage())->get();
        $header = Header::where(["language_id"=>Language::getLanguage(),"page"=>"teacher"])->orderBy("created_at","desc")->first();
        return view("frontend.teacher",compact("teachers","seo","header"));
    }

    public function teacherInfo($alias){
        if($teacher = Teacher::firstWhere("alias",$alias)){
            $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"teacher","language_id"=>Language::getLanguage()]);
            $weekdays = Weekday::all();
            $workdays = Workday::where("teacher_id",$teacher->id)->orderBy("weekday_id","asc")->orderBy("time_start","asc")->with("pupils")->get();
            $workdays = $workdays->groupBy("weekday_id");
            $prices = Price::where("teacher_id",$teacher->id)->get();
            return view("frontend.single-teacher",compact("teacher","seo","workdays","prices","weekdays"));
        }
        else{
            abort(404);
        }
    }

    public function gallery(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"gallery","language_id"=>Language::getLanguage()]);
        $header = Header::where(["language_id"=>Language::getLanguage(),"page"=>"gallery"])->orderBy("created_at","desc")->first();
        $gallery = Gallery::all();
        return view("frontend.gallery",compact("gallery","seo","header"));
    }
    public function faq(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"faq","language_id"=>Language::getLanguage()]);
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"faq"])->orderBy("created_at","desc")->first();
        $faqs = Faq::where("language_id",Language::getLanguage())->get();
        return view("frontend.faq",compact("faqs","seo","header"));
    }

    public function ielts(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"ielts","language_id"=>Language::getLanguage()]);
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"ielts"])->orderBy("created_at","desc")->first();
        $ielts = Ielts::where("language_id",Language::getLanguage())->get();
        return view("frontend.ielts",compact("ielts","seo","header"));
    }

    public function course(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"course","language_id"=>Language::getLanguage()]);
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"course"])->orderBy("created_at","desc")->first();
        $courses = Service::where("language_id",Language::getLanguage())->get();
        return view("frontend.course",compact("courses","seo","header"));
    }

    public function courseInfo($alias){
        $course = Service::firstWhere("alias",$alias);
        if($course){
            $course->load("teachers");
            $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"course","language_id"=>Language::getLanguage()]);
            return view("frontend.single-course",compact("course","seo"));
        }
        else{
            abort(404);
        }
    }



    public function prices(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"price","language_id"=>Language::getLanguage()]);
        $prices = Price::where("language_id",Language::getLanguage())->get();
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"price"])->orderBy("created_at","desc")->first();
        return view("frontend.price",compact("prices","seo","header"));
    }

    public function blogs(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"news","language_id"=>Language::getLanguage()]);
        $blogs = News::where("language_id",Language::getLanguage())->orderBy('created_at', 'desc')->paginate(15);
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"news"])->orderBy("created_at","desc")->first();

        return view("frontend.blog",compact("blogs","seo","header"));
    }
    public function blogInfo($alias){
        if($blog = News::firstWhere("alias",$alias)){
            $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"news","language_id"=>Language::getLanguage()]);
            return view("frontend.blogSingle",compact("blog","seo"));
        }
        else{
            abort(404);
        }


    }

    public function contact(){
        $seo = Seo::orderBy("created_at","desc")->firstWhere(["page"=>"contact","language_id"=>Language::getLanguage()]);
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"contact"])->orderBy("created_at","desc")->first();
        $socials = Social::all();
        $phones = Phone::all();
        $emails = Email::all();
        return view("frontend.contact",compact("seo","header","socials","phones","emails"));
    }

    public function sendMessage(Request $request){
        $this->validate($request,["name"=>"required","email"=>"required|email","phone"=>"required"]);
//        $emails = Email::pluck('email')->toArray();
        $emails = ['nurbakit_5496@mail.ru', 'samgaacademy@inbox.ru'];
        if(count($emails)){
            Mail::to($emails)->send(new SendMessage($request->all()));
            return redirect()->route('main')
                ->with('success',__("messages.success"));
        }
        else{
            return redirect()->route('contact')
                ->with('fail',__("messages.failed"));
        }

    }

    public function sendModal(Request $request){
        $this->validate($request,["name"=>"required","phone"=>"required"]);
//        $emails = Email::pluck('email')->toArray();
        $emails = ['nurbakit_5496@mail.ru', 'samgaacademy@inbox.ru'];
        if(count($emails)){
            Mail::to($emails)->send(new SendModal($request->all()));
            return redirect()->route('main')
                ->with('success',__("messages.success"));
        }
        else{
            return redirect()->route('contact')
                ->with('fail',__("messages.failed"));
        }

    }

    public function security(){
        $security = Security::latest()->first();
        return view("frontend.security",compact("security"));
    }

    public function privacy(){
        $privacy = Privicy::where("language_id",Language::getLanguage())->latest()->first();
        return view("frontend.privacy",compact("privacy"));
    }

    public function document(){
        $documents = Document::all();
        return view("frontend.document",compact("documents"));
    }


    public function schedule()
    {
        $schedules = Schedule::getSchedule();
        $header =  Header::where(["language_id"=>Language::getLanguage(),"page"=>"schedule"])->orderBy("created_at","desc")->first();
//        $count = [];
//        foreach ($schedules as $day => $schedule) {
//            $count[] = count($schedule);
//        }
//        sort($count, SORT_NUMERIC);
//        $count = array_pop($count);
        ksort($schedules, SORT_REGULAR);
//        dd($schedules);
//        foreach ($schedules as $schedule) {
//            dd($schedule);
//        }
        return view('frontend.schedule', compact('schedules', 'header'));
    }

}
