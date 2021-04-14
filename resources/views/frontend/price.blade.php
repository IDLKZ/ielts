@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">{{$header->title}}</h1>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

        <div class="container">
            <div class="row py-4">
                <div class="col-md-12 text-center">
                    @if($header)
                        <p class="subheading-1">
                            {{$header->subtitle}}
                        </p>
                    @else
                    <h1 class="heading-1 blue-text">
                        {{__("frontend.price_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.price_subtitle")}}
                    </p>
                    @endif
                </div>
            </div>
            <div class="row my-4">
            @foreach($prices as $price)
                <!-- Pricing Table-->
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <div class="bg-white p-5 rounded-lg shadow">
                            <h1 class="h2 text-uppercase font-weight-bold mb-4">{{$price->title}}</h1>
                            <h2 class="h1 font-weight-bold">{{$price->price}} {{$price->currency}}<span class="text-small font-weight-normal ml-2">/ {{$price->subtitle}}</span></h2>

                            <div class="custom-separator my-4 mx-auto bg-primary"></div>

                            <ul class="list-unstyled my-5 text-small text-left">
                                @foreach($price->benefits as $benefit)
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>
                                        {{$benefit}}
                                    </li>
                                @endforeach


                            </ul>
                            <a href="{{route("my-prices")}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">{{__("frontend.info")}}</a>
                        </div>
                    </div>
                    <!-- END -->
                @endforeach
            </div>
        </div>

@endsection

