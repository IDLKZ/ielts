@extends("frontend.layout.layout")

@section('content')
    <section>
        <section class="breadcrumb-bg">
            <div class="container ">
                <div class="row mh-350 d-flex justify-content-center align-items-center">
                    <div class="col-md-12 px-4">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent">
                                <li class="breadcrumb-item fs-24 text-white"><a href="/">{{__("frontend.menu_main")}}</a></li>
                                <li class="breadcrumb-item fs-24 text-white"><a href="{{route("course")}}">{{__("frontend.menu_course")}}</a></li>
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{$course->title}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mh-400">
            <div class="row py-4 my-4">
                    <div class="col-md-12">
                        <h1 class="heading-1">
                            {{$course->title}}
                        </h1>
                        <p class="subheading-1">
                            {{$course->subtitle}}
                        </p>
                        <img src="{{$course->img}}" width="100%">
                        <div class="py-4">
                            {!! $course->description !!}
                        </div>

                    </div>
            </div>

        </div>





    </section>

@endsection


