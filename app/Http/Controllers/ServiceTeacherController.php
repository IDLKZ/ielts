<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ServiceTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $service = Service::find($request["service_id"]);
        $service_teacher = ServiceTeacher::where("service_id",$request["service_id"])->with("teacherServ","service")->paginate(15);
        $teachers = Teacher::whereNotIn("id",$service_teacher->pluck("teacher")->toArray())->where("language_id",$service->language_id)->get();
        return view("service_teacher.index",compact("service_teacher","service","teachers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,["service_id"=>"required|exists:services,id","teacher"=>"required|exists:teachers,id"]);
        $st = new ServiceTeacher();
        $st->fill($request->all());
        $st->save();
        toastSuccess("Успешно создано");
        return redirect()->back();



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ServiceTeacher::destroy($id);
        return redirect()->back();
    }
}
