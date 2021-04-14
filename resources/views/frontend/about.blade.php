@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">{{__('frontend.menu_about')}}</h1>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <div class="container">

        <div class="row">
            <div class="col-md-12 my-4">
                @if($data)
                    {!! $data->description !!}
                @endif
            </div>
        </div>
    </div>

@endsection
