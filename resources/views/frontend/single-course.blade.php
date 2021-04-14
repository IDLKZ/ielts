@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>
    </section><!-- /.page-title -->

        <div class="container">
            <div class="row py-4 my-4">
                    <div class="col-md-12">
                        <h1 class="heading-1">
                            {{$course->title}}
                        </h1>
                        <p class="subheading-1">
                            {{$course->subtitle}}
                        </p>
                        <img src="{{$course->img}}" width="100%">
                        <div class="py-4">
                            {!! $course->description !!}
                        </div>

                    </div>
            </div>

        </div>

@endsection


