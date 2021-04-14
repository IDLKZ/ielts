@extends("frontend.layout.layout")

@section('content')
    <section class="page-title page-title-layout6 text-center bg-overlay bg-overlay-gradient bg-parallax">
        <div class="bg-img"><img src="/assets/images/page-titles/6.jpg" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="pagetitle__heading mb-0">FAQs</h1>
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->


    <section class="faq pt-130 pb-100">
        <div class="container">
            <div class="row" id="accordion">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    @foreach ($faqs as $faq)
                        <div class="accordion-item">
                            <div class="accordion__header" data-toggle="collapse" data-target="#collapse{{$faq->id}}">
                                <a class="accordion__title" href="#">{{$faq->question}}</a>
                            </div><!-- /.accordion-item-header -->
                            <div id="collapse{{$faq->id}}" class="collapse" data-parent="#accordion">
                                <div class="accordion__body">
                                    <p>{!! $faq->answer !!}</p>
                                </div><!-- /.accordion-item-body -->
                            </div>
                        </div><!-- /.accordion-item -->
                    @endforeach
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.FAQ -->


@endsection

