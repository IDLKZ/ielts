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
                        <h1 class="pagetitle__heading mb-0">{{__('frontend.menu_gallery')}}</h1>
                    @endif
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

        <div class="container">

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

@endsection

