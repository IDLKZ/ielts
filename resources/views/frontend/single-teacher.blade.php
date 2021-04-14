@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>

    </section><!-- /.page-title -->

        <div class="container">
            <div class="row py-4 my-4">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="{{$teacher->img}}" style="position: absolute;width: 70%; height: 500px; z-index: 1000; top: -200px;">
                </div>
                <div class="col-md-6">
                    <h1 class="heading-1">
                        {{$teacher->name}}
                    </h1>
                    <p class="subheading-1">
                        {{$teacher->position}}
                    </p>
                    @if($teacher->socialLink->isNotEmpty())
                        @foreach($teacher->socialLink as $link)
                        <a href="{{$link->link}}" class="fs-24"><i class="{{$link->icon}}"></i></a>
                        @endforeach
                    @endif
                    <div>
                        {!! $teacher->description !!}
                    </div>

                </div>
            </div>

        </div>

@endsection

