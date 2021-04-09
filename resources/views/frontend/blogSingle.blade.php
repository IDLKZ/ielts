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
                                <li class="breadcrumb-item fs-24 text-white"><a href="{{route("blogs")}}">{{__("frontend.menu_blog")}}</a></li>
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{$blog->title}}</li>
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
                        {{$blog->title}}
                    </h1>
                    <p class="subheading-1">
                        {{$blog->subtitle}}
                    </p>
                    <img src="{{$blog->img}}" width="100%">
                    <div class="py-4">
                        {!! $blog->content !!}
                    </div>

                </div>
            </div>

        </div>





    </section>

@endsection



