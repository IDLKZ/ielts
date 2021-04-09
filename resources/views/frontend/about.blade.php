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
                        <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_about")}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    </section>
    <div class="container mh-400">
        <div class="row py-4">
            <div class="col-md-12 text-center">
                <h1 class="heading-1 blue-text">
                    {{__("frontend.about_title")}}
                </h1>
                <p class="subheading-1">
                    {{__("frontend.about_subtitle")}}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 my-4">
                @if($data)
                    {!! $data->description !!}
                @endif
            </div>
            <div class="col-md-12 my-4">
                <lottie-player src="{{asset("/lottie/about-us.json")}}" background="transparent"  speed="1"  style="width: 100%;" loop autoplay></lottie-player>
            </div>
        </div>
    </div>





</section>

@endsection
