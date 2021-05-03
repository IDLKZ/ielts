@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($header)
                        <h1 class="pagetitle__heading mb-0">{{$header->title}}</h1>
                    @else
                        <h1 class="pagetitle__heading mb-0">{{__('frontend.service_title')}}</h1>
                    @endif

                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

        <div class="container">
            <div class="row py-4">
                    @if($courses->isNotEmpty())
                    @foreach($courses as $course)
                        <div class="col-md-4">
                        <div class="card py-4 box-shadow-1">
                            <div class="d-flex justify-content-center my-4">
                                <div class="bg-circle"
                                     style="background-image:url('{{asset($course->img)}}') "

                                ></div>
                            </div>
                            <div class="text-center my-2">
                                <p class="fs-18 font-weight-bolder">{{$course->title}}</p>
                                <p>{{$course->subtitle}}</p>
                                <a href="{{route("courseSingle",$course->title)}}" class="btn btn-md my-btn-blue my-btn text-uppercase fs-18 font-weight-bolder text-white">
                                    {{__("frontend.info")}}
                                </a>
                            </div>

                        </div>
                        </div>

                    @endforeach
                    @endif
            </div>
        </div>

@endsection
