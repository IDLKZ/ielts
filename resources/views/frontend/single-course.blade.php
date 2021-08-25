@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>
    </section><!-- /.page-title -->

        <div class="container">
            <div class="row py-4 my-4">
                    <div class="col-md-12 text-dark">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{$course->img}}" width="100%">
                            </div>
                            <div class="col-md-8">
                                <h1 class="heading-1">
                                    {{$course->title}}
                                </h1>
                                <p class="subheading-1 text-dark">
                                    {{$course->subtitle}}
                                </p>
                                <div class="py-4 text-dark fs-18">
                                    {!! $course->description !!}
                                </div>
                            </div>
                        </div>




                    </div>
            </div>
            <div class="row py-4 my-4">
                @if($course->teachers->isNotEmpty())
                    @foreach($course->teachers as $teacher)
                        <div class="col-md-4 my-2" >
                            <div style="background: url({{$teacher->img}}); background-size: cover; background-repeat: no-repeat;background-position: center" class="profile-card-6" data-alias = "{{$teacher->alias}}">
                                <div class="profile-name">{{$teacher->name}}</div>
                                <div class="profile-position">{{$teacher->position}}</div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

@endsection


