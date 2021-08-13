@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/3.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($header)
                        <h1 class="pagetitle__heading mb-0">{{$header->title}}</h1>
                    @else
                        <h1 class="pagetitle__heading mb-0">{{__('frontend.ielts_title')}}</h1>
                    @endif
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
                        {{__("frontend.ielts_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.ielts_subtitle")}}
                    </p>
                    @endif

                </div>
            </div>

                @if($ielts->isNotEmpty())
                  @foreach($ielts as $item)
                    <div class="row my-4 py-4">
                      <div class="col-md-4 d-flex justify-content-center align-items-center">
                          <img src="{{$item->img}}" width="100%">
                      </div>
                      <div class="col-md-8 text-white">
                            <h1 class="heading-1">
                                {{$item->title}}
                            </h1>
                            <div class="text-dark">
                                {!! $item->description !!}
                            </div>
                      </div>
                    </div>
                  @endforeach
                @endif

        </div>

@endsection


