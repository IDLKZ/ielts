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
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_service")}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mh-400">
            <div class="row py-4">
                <div class="col-md-12 text-center">
                    @if($header)
                        <h1 class="heading-1 blue-text">
                            {{$header->title}}
                        </h1>
                        <p class="subheading-1">
                            {{$header->subtitle}}
                        </p>
                    @else
                    <h1 class="heading-1 blue-text">
                        {{__("frontend.service_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.service_subtitle")}}
                    </p>
                    @endif
                </div>
            </div>
            <div class="row py-4">
                    @if($courses->isNotEmpty())
                    @foreach($courses as $course)
                        <div class="col-md-4">
                        <div class="card py-4 box-shadow-1">
                            <div class="d-flex justify-content-center my-4">
                                <div class="bg-circle"
                                     style="background-image:url('{{asset($course->img)}}') "

                                ></div>
                            </div>
                            <div class="text-center my-2">
                                <p class="fs-18 font-weight-bolder">{{$course->title}}</p>
                                <p>{{$course->subtitle}}</p>
                                <a href="{{route("courseSingle",$course->title)}}" class="btn btn-md my-btn-blue my-btn text-uppercase fs-18 font-weight-bolder text-white">
                                    {{__("frontend.info")}}
                                </a>
                            </div>

                        </div>
                        </div>

                    @endforeach
                    @endif
            </div>
        </div>





    </section>

@endsection
