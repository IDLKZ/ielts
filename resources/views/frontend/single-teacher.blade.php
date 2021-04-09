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
                                <li class="breadcrumb-item fs-24 text-white"><a href="{{route("teacher")}}">{{__("frontend.menu_teachers")}}</a></li>
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{$teacher->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <div class="container mh-400">
            <div class="row py-4 my-4">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="{{$teacher->img}}" width="100%">
                </div>
                <div class="col-md-6">
                    <h1 class="heading-1">
                        {{$teacher->name}}
                    </h1>
                    <p class="subheading-1">
                        {{$teacher->position}}
                    </p>
                    @if($teacher->socialLink->isNotEmpty())
                        @foreach($teacher->socialLink as $link)
                        <a href="{{$link->link}}" class="fs-24"><i class="{{$link->icon}}"></i></a>
                        @endforeach
                    @endif
                    <div>
                        {!! $teacher->description !!}
                    </div>

                </div>
            </div>

        </div>





    </section>

@endsection

