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
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_gallery")}}</li>
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
                        {{__("frontend.menu_gallery")}}
                    </h1>
                    @endif

                </div>
            </div>
            @if($gallery->isNotEmpty())
            <div class="row my-4 d-flex justify-content-center align-items-center">
                @if($gallery->isNotEmpty())
                    @foreach($gallery as $image)
                <div class="col-md-4 px-2">
                    <div class="mh-300" style="background-image: url({{$image->img}}); background-size: cover">

                    </div>
                </div>
                    @endforeach
                    @endif
            </div>
            @endif
        </div>





    </section>

@endsection

