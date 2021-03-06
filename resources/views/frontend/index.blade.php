@extends("frontend.layout.layout")
@push('styles')
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <style>
        .blocker {
            z-index: 10000!important;
        }

    </style>
@endpush
@section('content')
{{--    Video First Slider--}}
<section class="my-section vh-100" style="margin-top: -100px;">
            @if($data["background"])

        <div data-ytbg-play-button="true" data-youtube="{{$data["background"]->video_url}}"></div>
        <div class="video-content text-center">
            <div class="animate__flash">
                <h1 class="video-title text-white" data-aos="fade-up">
                    {{$data["background"]->title}}
                </h1>
                <br>
                <p class="video-subtitle text-white" data-aos="fade-up">
                    {{$data["background"]->subtitle}}
                </p>
                <div>
                    <a href="{{route("teacher")}}" class="btn btn__primary mr-30">
                          {{__("frontend.teachers")}}
                        <i class="fas fa-users"></i>
                    </a>
                    <a href="{{route("course")}}" class="btn btn__white">
                        {{__("frontend.services")}}
                        <i class="fas fa-book"></i>
                    </a>
                </div>
            </div>


        </div>

            @else
            <div data-ytbg-play-button="true" data-youtube="https://www.youtube.com/watch?v=lRTtMcx6rSM&ab_channel=MG1010"></div>
            <div class="video-content text-center">
            <div class="animate__flash">
                <h1 class="video-title text-white" data-in-effect="rollIn">
                    Lorem ipsum dolor sit amet
                </h1>
                <br>
                <p class="video-subtitle text-white" data-in-effect="bounceIn">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, consequatur et, eveniet illo ipsa iure, laudantium libero maxime minus nisi odit omnis quasi rerum sed voluptatibus! Consequatur fugit ullam veritatis?
                </p>
                <div>
                    <a  href="" class="btn bg-transparent btn-lg text-white border-white ml-2">
                        {{__("frontend.about_title")}}
                        <i class="fas fa-building"></i>
                    </a>

                    <a  href="" class="btn bg-transparent btn-lg text-white border-white ml-2">
                        {{__("frontend.all_services")}}
                        <i class="fas fa-handshake"></i>
                    </a>
                </div>
            </div>


        </div>
            @endif



    </section>
{{--Video End--}}

<!-- ========================
        Services Carousel
    =========================== -->
<section class="services-layout2 services-carousel pt-130 bg-gray">
    <div class="container">
        <div class="row heading mb-40">
            @if($data["headers"]["about"])
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="divider divider-primary mr-30"></div>
                        <h2 class="heading__subtitle mb-0">{{__($data["headers"]["about"]['title'])}}</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 class="heading__title">{{__($data["headers"]["about"]['subtitle'])}}</h3>
                </div><!-- /col-lg-5 -->
            @else
            <div class="col-12">
                <div class="d-flex align-items-center">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0">{{__("frontend.about_title")}}</h2>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h3 class="heading__title">{{__("frontend.about_subtitle")}}</h3>
            </div><!-- /col-lg-5 -->
            @endif

        </div><!-- /.row -->
        <div class="row">
            <div class="col-12">
                @if($data["ielts"]->isNotEmpty())
                <div class="slick-carousel"
                     data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "arrows": true, "dots": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 767, "settings": {"slidesToShow": 2}}, {"breakpoint": 480, "settings": {"slidesToShow": 1}}]}'>
                    <!-- service item #1 -->

                    @foreach($data["ielts"] as $ielts)
                    <div class="service-item wow bounceInUp">
                        <div class="service__content text-center">
                            <div class="service__icon">
                                <div class="bg-mini-circle border-info-solid d-flex align-self-center my-2 bg-content"
                                     style="background-image: url('{{$ielts->img}}'); background-size: cover; margin: auto"
                                ></div>
                            </div><!-- /.service__icon -->
                            <h4 class="service__title">{{$ielts->title}}</h4>

                            <a href="{{route("my-ielts")}}" class="btn btn__secondary">
                                <span>{{__("frontend.info")}}</span>
                                <i class="icon-arrow-right"></i>
                            </a>
                        </div><!-- /.service-content -->
                    </div><!-- /.service-item -->
                     @endforeach

                </div><!-- /.carousel -->
                @endif

            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Services Layout 2 -->

<section class="about-layout4 pt-3 pb-3 pb-0">
    <div class="container">
        <div class="row heading">
            <div class="col-12">
                <div class="d-flex align-items-center mb-20">
                    <div class="divider divider-primary mr-30"></div>
                    <h2 class="heading__subtitle mb-0">{{__('frontend.about_title')}}</h2>
                </div>
            </div><!-- /.col-12 -->
            @if($data["headers"]["about"])
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h3 class="heading__title mb-40">{{$data["headers"]["about"]["title"]}}</h3>
            </div><!-- /.col-lg-6 -->
            @else
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="heading__title mb-40">{{__("frontend.about_title")}}</h3>
                </div><!-- /.col-lg-6 -->
            @endif
            <div class="col-sm-12 col-md-12 col-lg-6">

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about__img">
                    <img src="assets/images/about/2.jpg" alt="about">
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-6 d-flex flex-column">
                @if (!is_null($data['about']))
                    {!! $data["about"]->description !!}
                @endif
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- ======================
Features Layout 1
========================= -->
<section class="features-layout1 pb-0">

    <div class="bg-img"><img src="assets/images/backgrounds/14.jpg" alt="background"></div>

    <div class="container">
        <div class="row heading heading-light mb-30">
            <div class="col-sm-12 col-md-12 col-lg-12">
                @if($data["headers"]["advantage"])
                    <div class="d-flex align-items-center mb-20">
                        <div class="divider divider-primary mr-30"> </div>
                        <h2 class="heading__subtitle mb-0">{{$data["headers"]["advantage"]["title"]}}</h2>
                    </div>
                    <h3 class="heading__title">{{$data["headers"]["advantage"]["subtitle"]}} </h3>
                @else
                    <div class="d-flex align-items-center mb-20">
                        <div class="divider divider-primary mr-30"> </div>
                        <h2 class="heading__subtitle mb-0">{{__("frontend.advantage_title")}}</h2>
                    </div>
                    <h3 class="heading__title">{{__("frontend.advantage_subtitle")}} </h3>
                @endif

            </div><!-- /col-lg-5 -->
        @if($data["advantages"]->isNotEmpty())
            @foreach($data["advantages"] as $advantage)
                <!-- Feature item #1 -->
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="feature-item text-center">
                            <div class="feature__icon">
                                <div class="bg-mini-circle d-flex align-self-center align-items-center justify-content-center my-2 m-auto">
                                    <img src="{{$advantage->img}}" height="100px">
                                </div>
                            </div>
                            <h4 class="feature__title"> {{$advantage->title}}</h4>
                            <p class="feature__desc">
                                {{$advantage->subtitle}}
                            </p>
                        </div><!-- /.feature-item -->
                    </div><!-- /.col-lg-3 -->
                @endforeach
            @endif
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Features Layout 1 -->


{{--Sixth Section--}}
{{--    End of Sixth Section--}}

<section class="blog-grid pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                @if($data["headers"]["news"])
                <div class="heading text-center mb-40">
                    <h2 class="heading__subtitle">{{$data["headers"]["news"]["subtitle"]}}</h2>
                    <h3 class="heading__title">{{$data["headers"]["news"]["title"]}}</h3>
                </div><!-- /.heading -->
                @else
                    <div class="heading text-center mb-40">
                        <h2 class="heading__subtitle">{{__("frontend.news_title")}}</h2>
                        <h3 class="heading__title">{{__("frontend.news_subtitle")}}</h3>
                    </div><!-- /.heading -->
                @endif
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
            <!-- Blog Item #1 -->
            @foreach($data["news"] as $item)
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="post-item">
                    <div class="post__img">
                        <a href="{{route("blogInfo",$item->alias)}}">
                            <img src="{{$item["img"]}}" alt="blog image">
                        </a>
                    </div><!-- /.blog-img -->
                    <div class="post__content">
                        <div class="post__meta d-flex flex-wrap">
                            <span class="post__meta-date">{{$item->created_at->diffForHumans()}}</span>
                        </div>
                        <h4 class="post__title"><a href="{{route("blogInfo",$item->alias)}}">{{$item->title}}</a>
                        </h4>
                        <p class="post__desc">{{$item->subtitle}}</p>
                        <a href="{{route("blogInfo",$item->alias)}}" class="btn btn__secondary btn__link">
                            <span>Read More</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                    </div><!-- /.blog-content -->
                </div><!-- /.post-item -->
            </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- =========================
       Banner layout 2
      =========================== -->
<section class="banner-layout2 pb-0 bg-overlay bg-overlay-primary" id="contact">
    <div class="bg-img"><img src="assets/images/banners/8.jpg" alt="background"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 col-inner">
                @if ($data['headers']['review'])
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30">{{$data["headers"]["review"]["title"]}}</h3>
                    </div>
                @else
                    <div class="heading heading-light">
                        <h3 class="heading__title mb-30">{{__("frontend.comment_title")}}</h3>
                    </div>
                @endif
                <div class="testimonials testimonials-wrapper">
                    <div class="slider-with-navs">
                    @if($data["reviews"]->isNotEmpty())
                        @foreach($data["reviews"] as $review)
                        <!-- Testimonial #1 -->
                        <div class="testimonial-item">
                            <div class="text-white">
                                {!! $review->description !!}
                            </div>

                            <div class="testimonial__meta">
                                <h4 class="testimonial__meta-title">{{$review->author}}</h4>
                                <p class="testimonial__meta-desc">{{$review->position}}</p>
                            </div><!-- /.testimonial-meta -->
                        </div><!-- /. testimonial-item -->
                            @endforeach
                        @endif
                    </div>

                    <div class="slider-nav">
                        @if($data["reviews"]->isNotEmpty())
                            @foreach($data["reviews"] as $review)
                        <div class="testimonial__thumb">
                            <img src="{{$review->img}}" alt="author thumb">
                        </div><!-- /.testimonial-thumb -->
                            @endforeach
                        @endif
                    </div><!-- /.slcik-nav -->
                </div><!-- /.testimonials -->
                <div class="divider divider-light w-100 mt-60 mb-60"></div>
            </div><!-- /.col-xl-6 -->
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <div class="contact-panel">
                    <form class="contact-panel__form" method="post" action="{{route('send-message')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <h4 class="contact-panel__title mb-20">{{__('frontend.contact_us')}}</h4>
                            </div> <!-- /.col-12 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="??????" id="contact-name" name="name"
                                           required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                           name="email" required>
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="??????????????" id="contact-Phone"
                                           name="phone">
                                </div>
                            </div><!-- /.col-lg-6 -->
                            <div class="col-12">
                                <button type="submit" class="btn btn__primary btn__xl btn__block">{{__('frontend.send')}}</button>
                            </div><!-- /.col-12 -->
                        </div><!-- /.row -->
                    </form>
                </div>
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.Banner layout 2 -->

@endsection

@push("scripts")
    <script src="{{asset("/js/jquery.youtube-background.min.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
{{--    <script src="{{asset("/js/jquery.lettering-0.6.1.min.js")}}"></script>--}}
{{--    <script src="{{asset("/js/textillate.js")}}"></script>--}}
{{--    <script src="{{asset('js/wow.js')}}"></script>--}}
    <script type="text/javascript">

        jQuery(document).ready(function() {
            jQuery('[data-youtube]').youtube_background({
                'play-button': false
            });
        });

    </script>
@endpush
