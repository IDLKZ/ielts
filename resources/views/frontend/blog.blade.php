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
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_blog")}}</li>
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
                        {{__("frontend.news_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.news_subtitle")}}
                    </p>
                </div>
            </div>
            <div class="row">

                    @if($blogs->isNotEmpty())
                        @foreach($blogs as $blog)
                        <div class="col-md-4 mt-4 mh-400">
                            <div class="card profile-card-5">
                                <div class="card-img-block">
                                    <img class="card-img-top"
                                         src="{{$blog["img"]}}"
                                         alt="Card image cap">
                                </div>
                                <div class="card-body pt-0">
                                    <p><i class="fas fa-clock"></i> {{$blog->created_at->diffForHumans()}}   <i class="fas fa-user"></i>  Admin </p>
                                    <h6 class="font-weight-bolder blue-text">{{$blog->title}}</h6>
                                    <p class="card-text">{{$blog->subtitle}}</p>
                                    <a href="{{route("blogInfo",$blog->alias)}}" class="btn light-blue-bg text-white">{{__("frontend.info")}}</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        <div class="col-md-12 d-flex justify-content-center">
                            {{$blogs->links()}}
                        </div>
                    @endif

            </div>
        </div>





    </section>

@endsection

