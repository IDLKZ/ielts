@extends("frontend.layout.layout")
@push("styles")
    <style>
        p{
            color: #0b0b0b;
        }
        li{
            color: #0b0b0b;
        }
    </style>
@endpush
@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">{{__("admin.security")}}</h1>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section>
        <div class="container">
            <div class="row">
                @if($security)
                <div class="col-md-12">
                    <p class="fs-18 font-weight-bolder text-dark">{{$security["title_" . LaravelLocalization::getCurrentLocale()]}}</p>
                    <p class="text-dark">
                        {!! $security["description_" . LaravelLocalization::getCurrentLocale()] !!}
                    </p>





                </div>
                 @endif
            </div>
        </div>


    </section>


@endsection
