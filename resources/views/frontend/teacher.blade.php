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
                                <li class="breadcrumb-item fs-24 text-white active" aria-current="page">{{__("frontend.menu_teachers")}}</li>
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
                        {{__("frontend.teacher_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.teacher_subtitle")}}
                    </p>
                </div>
            </div>
            <div class="row py-4">
                @if($teachers->isNotEmpty())
                    @foreach($teachers as $teacher)
                <div class="col-md-4 my-2" >
                    <div class="profile-card-6" data-alias = "{{$teacher->alias}}">
                        <img src="{{$teacher->img}}" class="img img-responsive" height="400">
                        <div class="profile-name">{{$teacher->name}}</div>
                        <div class="profile-position">{{$teacher->position}}</div>
                    </div>
                </div>
                    @endforeach
                    @endif
            </div>

        </div>





    </section>

@endsection
@push("scripts")
    <script>
        $(".profile-card-6").on("click",function (){
            var alias = $(this).attr("data-alias");
           location.href = "/teacher-info/" + alias
        });

    </script>
@endpush
