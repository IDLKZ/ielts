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
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_ielts")}}</li>
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
                        {{__("frontend.ielts_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.ielts_subtitle")}}
                    </p>

                </div>
            </div>

                @if($ielts->isNotEmpty())
                  @foreach($ielts as $item)
                    <div class="row my-4 aqua-gradient py-4">
                      <div class="col-md-6 d-flex justify-content-center align-items-center">
                          <img src="{{$item->img}}" width="100%">
                      </div>
                      <div class="col-md-6 text-white">
                            <h1 class="heading-1">
                                {{$item->title}}
                            </h1>
                            <div class="text-white">
                                {!! $item->description !!}
                            </div>
                      </div>
                    </div>
                  @endforeach
                @endif

        </div>





    </section>

@endsection


