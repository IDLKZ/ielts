@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                @if ($header)
                    <div class="col-12">
                        <h1 class="pagetitle__heading mb-0">{{$header->title}}</h1>
                    </div><!-- /.col-12 -->
                @else
                    <div class="col-12">
                        <h1 class="pagetitle__heading mb-0">{{__('frontend.teacher_title')}}</h1>
                    </div><!-- /.col-12 -->
                @endif

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

        <div class="container">
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

@endsection
@push("scripts")
    <script>
        $(".profile-card-6").on("click",function (){
            var alias = $(this).attr("data-alias");
           location.href = "/teacher-info/" + alias
        });

    </script>
@endpush
