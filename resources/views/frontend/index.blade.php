@extends("frontend.layout.layout")

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
                    <a href="{{route("about")}}" class="btn btn__primary mr-30">
                          {{__("frontend.about_title")}}
                        <i class="fas fa-building"></i>
                    </a>
                    <a href="{{route("my-ielts")}}" class="btn btn__white">
                        {{__("frontend.menu_ielts")}}
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
                    <div class="service-item">
                        <div class="service__content">
                            <div class="service__icon">
                                <div class="bg-mini-circle blue-bg d-flex align-self-center my-2 bg-content"
                                     style="background-image: url('{{$ielts->img}}'); background-size: cover"
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


<!-- ========================
      About Layout 1
    =========================== -->
<section class="about-layout1">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                @if($data["headers"]["about"])
                    <div class="heading mb-30">
                        <div class="d-flex align-items-center mb-20">
                            <div class="divider divider-primary mr-30"> </div>
                            <h2 class="heading__subtitle mb-0">{{$data["headers"]["about"]["title"]}}</h2>
                        </div>
                        <h3 class="heading__title mb-40">
                            {{$data["headers"]["about"]["subtitle"]}}
                        </h3>
                    </div><!-- /heading -->

                @else
                    <div class="heading mb-30">
                        <div class="d-flex align-items-center mb-20">
                            <div class="divider divider-primary mr-30"></div>
                            <h2 class="heading__subtitle mb-0"> {{__("frontend.about_title")}}</h2>
                        </div>
                        <h3 class="heading__title mb-40">
                            {{__("frontend.about_subtitle")}}
                        </h3>
                    </div><!-- /heading -->
                @endif

                <div class="position-relative offset-xl-1">
                    {!! $data["about"]->description !!}
                </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                <div class="about__img mb-40">
                    <img src="assets/images/about/1.jpg" alt="about">
                </div><!-- /.about-img -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.About Layout 1 -->

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
                                <div class="bg-mini-circle d-flex align-self-center align-items-center justify-content-center my-2">
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


<section class="container-fluid awards bg-secondary">
    <div class="row heading heading-light">
        <div class="col-sm-12">
            <h3 class="heading__title">Our awards and recognitions</h3>
        </div><!-- /col-lg-5 -->
        <div class="col-sm-12">
            <p class="heading__desc">Trusted by the world's best organizations, for 21 years and running, it has
                been delivering smiles to hundreds of IT advisors, developers, users, and business owners.
            </p>
        </div><!-- /.col-lg-5 -->
    </div><!-- /.row -->
    <div class="row awards-wrapper">
        <div class="col-sm-12">
            <div class="awards-carousel-wrapper">
                <div class="slick-carousel overflow-hidden"
                     data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": true,"autoplay": true, "autoplaySpeed": 4000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 2}}, {"breakpoint": 768, "settings": {"slidesToShow": 1}}, {"breakpoint": 570, "settings": {"slidesToShow": 1}}]}'>
                    <!-- fancybox item #1 -->
                    <div class="fancybox-item">
                        <div class="fancybox__icon-img">
                            <img src="assets/images/awards/icons/1.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">CSS Design Award</h4>
                            <p class="fancybox__desc">A web design & development award platform for digital folk,
                                UI/UX
                                peeps
                                and inspiring leaders of the web.
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #2 -->
                    <div class="fancybox-item">
                        <span class="pinned-ribbon"></span>
                        <div class="fancybox__icon-img">
                            <img src="assets/images/awards/icons/2.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">W3 Design Award</h4>
                            <p class="fancybox__desc">Awards celebrates digital by honoring outstanding Websites, Web
                                Marketing, Video, Sites, Apps & Social content.
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #3 -->
                    <div class="fancybox-item">
                        <div class="fancybox__icon-img">
                            <img src="assets/images/awards/icons/3.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">The FWA Award</h4>
                            <p class="fancybox__desc">Showcasing innovation every day since 2000, our mission is to
                                showcase
                                cutting edge creativity, regardless
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                    <!-- fancybox item #4 -->
                    <div class="fancybox-item">
                        <div class="fancybox__icon-img">
                            <img src="assets/images/awards/icons/3.png" alt="icon">
                        </div><!-- /.fancybox__icon-img -->
                        <div class="fancybox__content">
                            <h4 class="fancybox__title">WWW Awards</h4>
                            <p class="fancybox__desc">The awards that recognize the talent and effort of the best web
                                designers, developers and agencies in the world.
                            </p>
                        </div><!-- /.fancybox-content -->
                    </div><!-- /.fancybox-item -->
                </div><!-- /.carousel  -->
            </div><!-- /.awards-carousel-wrapper -->
        </div><!-- /.col-12 -->
    </div><!-- /.row -->
</section>
{{--    Fifth Section --}}
    <section class="my-section atlas-gradient d-flex align-items-center">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-6 text-center text-white" data-aos="zoom-in-up">
                    @if($data["headers"]["review"])
                        <h1 class="heading-1">
                           {{$data["headers"]["review"]["title"]}}
                        </h1>
                        <p class="subheading-1">
                           {{$data["headers"]["review"]["subtitle"]}}
                        </p>
                    @else
                    <h1 class="heading-1">
                        {{__("frontend.comment_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.comment_subtitle")}}
                    </p>
                    @endif
                    <lottie-player src="{{asset("/lottie/comments.json")}}" background="transparent"  speed="1"  style="height: 250px;" loop autoplay></lottie-player>

                </div>
                <div class="col-md-6 overflow-hidden">
                    <div class="testimonial3 py-5">
                        <div class="swiper-comments-container container">
                            <!-- Row  -->
                            <div class="swiper-wrapper testi3 mt-4">
                                @if($data["reviews"]->isNotEmpty())
                                @foreach($data["reviews"] as $review)
                                    <!-- item -->
                                        <div class="swiper-slide item" data-aos="flip-up">
                                            <div class="card card-shadow border-0 mb-4">
                                                <div class="card-body text-center">
                                                    <h6 class="font-weight-light mb-3">
                                                        {!! $review->description !!}
                                                    </h6>
                                                    <div class="d-block">
                                                        <div class="text-center">
                                                        <span class="thumb-img m-auto">
                                                        <img src="
                                                        {{$review->img}}
                                                        " alt="wrapkit" class="rounded-circle"/>
                                                        </span>
                                                        </div>
                                                        <div class="text-center font-weight-bolder">
                                                            <h6 class="mb-0 customer">{{$review->author}}</h6>
                                                        </div>
                                                        <div class="text-center">
                                                            <h6 class="mb-0 customer">{{$review->position}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- item -->

                                @endforeach
                                @else
                                @for($i =0; $i<5; $i++)
                                <!-- item -->
                                <div class="swiper-slide item" data-aos="flip-up">
                                    <div class="card card-shadow border-0 mb-4">
                                        <div class="card-body text-center">
                                            <h6 class="font-weight-light mb-3">“Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras venene veliel vestibulum.”</h6>
                                            <div class="d-block">
                                                <div class="text-center">
                                        <span class="thumb-img m-auto">
                                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/testimonial/1.jpg" alt="wrapkit" class="rounded-circle"/>
                                        </span>
                                                </div>
                                                <div class="text-center font-weight-bolder">
                                                    <h6 class="mb-0 customer">Michelle Anderson</h6>
                                                </div>
                                                <div class="text-center">
                                                    <h6 class="mb-0 customer">Student</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- item -->
                                 @endfor
                                 @endif
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
{{--    End Fifth Section--}}
{{--Sixth Section--}}
    <section class="my-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" data-aos="zoom-in">
                    @if($data["headers"]["price"])
                        <h1 class="heading-1 blue-text">
                            {{$data["headers"]["price"]["title"]}}
                        </h1>
                        <p class="subheading-1">
                            {{$data["headers"]["price"]["subtitle"]}}
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
            <div class="row">
                @if($data["prices"]->isNotEmpty())
                @foreach($data["prices"] as $price)
                    <!-- Pricing Table-->
                        <div class="col-md-4 mb-5 mb-lg-0" data-aos="zoom-in">
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
                @else
                @for($i = 0; $i<3; $i++)
                <!-- Pricing Table-->
                <div class="col-md-4 mb-5 mb-lg-0" data-aos="zoom-in">
                    <div class="bg-white p-5 rounded-lg shadow">
                        <h1 class="h2 text-uppercase font-weight-bold mb-4">Basic</h1>
                        <h2 class="h1 font-weight-bold">$199<span class="text-small font-weight-normal ml-2">/ month</span></h2>

                        <div class="custom-separator my-4 mx-auto bg-primary"></div>

                        <ul class="list-unstyled my-5 text-small text-left">
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Lorem ipsum dolor sit amet</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> Sed ut perspiciatis</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>
                            <li class="mb-3">
                                <i class="fa fa-check mr-2 text-primary"></i> At vero eos et accusamus</li>

                        </ul>
                        <a href="{{route("my-prices")}}" class="btn btn-primary btn-block p-2 shadow rounded-pill">Subscribe</a>
                    </div>
                </div>
                <!-- END -->
                @endfor
                    @endif
            </div>
        </div>

    </section>
{{--    End of Sixth Section--}}
{{--    Seven Section--}}
<section class="my-section jupiter-gradient d-flex align-items-center">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-6 text-center text-white d-flex justify-content-center align-items-center" data-aos="zoom-in-right">
                <div>
                    @if($data["headers"]["service"])
                        <h1 class="heading-1">
                            {{$data["headers"]["service"]["title"]}}
                        </h1>
                        <p class="subheading-1">
                            {{$data["headers"]["service"]["subtitle"]}}
                        </p>
                    @else
                    <h1 class="heading-1">
                        {{__("frontend.product_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.product_subtitle")}}
                    </p>
                    @endif
                    <lottie-player src="{{asset("/lottie/product.json")}}" background="transparent"  speed="1"  style="height: 250px;" loop autoplay></lottie-player>

                </div>

            </div>
            <div class="col-md-6 overflow-hidden" data-aos="zoom-in-right">
                <div class="testimonial3 py-5">


                    <div class="swiper-comments-container container">
                        <div class="swiper-wrapper testi3 mt-4">
                        @if($data["services"])

                            @foreach($data["services"] as $service)
                                <!-- item -->
                                    <div class="swiper-slide item">
                                        <div class="card py-4">
                                            <div class="d-flex justify-content-center my-4">
                                                <div class="bg-circle"
                                                style="background-image:url('{{asset($service->img)}}') "

                                                ></div>
                                            </div>
                                            <div class="text-center my-2">
                                                <p class="fs-18 font-weight-bolder">{{$service->title}}</p>
                                                <p>{{$service->subtitle}}</p>
                                                <a href="{{route("courseSingle",$service->title)}}" class="btn btn-md my-btn-blue my-btn text-uppercase fs-18 font-weight-bolder text-white">
                                                    {{__("frontend.info")}}
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- item -->
                                @endforeach

                        @else
                        <!-- Row  -->
                        @for($i =0; $i<5; $i++)
                            <!-- item -->
                                <div class="swiper-slide item">
                                    <div class="card py-4">
                                        <div class="d-flex justify-content-center my-4">
                                            <div class="bg-circle bg-success bg-parallax"></div>
                                        </div>
                                        <div class="text-center my-2">
                                            <p class="fs-18 font-weight-bolder">Lorem Ipsum</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <a href="" class="btn btn-md my-btn-blue my-btn text-uppercase fs-18 font-weight-bolder text-white">
                                                {{__("frontend.info")}}
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <!-- item -->
                            @endfor

                           @endif
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
{{--    End of Seven Section--}}
{{--    Eight Section--}}
    <section class="my-section py-4">
        <div class="container">
            <div class="row py-4">
                <div class="col-md-12 text-center" data-aos="zoom-in-up">
                    @if($data["headers"]["news"])
                        <h1 class="heading-1 blue-text">
                            {{$data["headers"]["news"]["title"]}}
                        </h1>
                        <p class="subheading-1">
                            {{$data["headers"]["news"]["subtitle"]}}
                        </p>

                    @else
                    <h1 class="heading-1 blue-text">
                        {{__("frontend.news_title")}}
                    </h1>
                    <p class="subheading-1">
                        {{__("frontend.news_subtitle")}}
                    </p>
                    @endif
                </div>
            </div>
            <div class="row py-4">
                @if($data["news"]->isNotEmpty())
                    @foreach($data["news"] as $item)
                        <div class="col-md-4 mt-4 mh-400" data-aos="zoom-in-up">
                            <div class="card profile-card-5">
                                <div class="card-img-block">
                                    <img class="card-img-top"
                                         src="{{$item["img"]}}"
                                         alt="Card image cap">
                                </div>
                                <div class="card-body pt-0">
                                    <p><i class="fas fa-clock"></i> {{$item->created_at->diffForHumans()}}   <i class="fas fa-user"></i>  Admin </p>
                                    <h6 class="font-weight-bolder blue-text">{{$item->title}}</h6>
                                    <p class="card-text">{{$item->subtitle}}</p>
                                    <a href="{{route("blogInfo",$item->alias)}}" class="btn light-blue-bg text-white">{{__("frontend.info")}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                @for($i=0;$i<3;$i++)
                <div class="col-md-4 mt-4" data-aos="zoom-in-up">
                    <div class="card profile-card-5">
                        <div class="card-img-block">
                            <img class="card-img-top"
                                 src="https://images.unsplash.com/photo-1517832207067-4db24a2ae47c"
                                 alt="Card image cap">
                        </div>
                        <div class="card-body pt-0">
                            <p><i class="fas fa-clock"></i> 2021   <i class="fas fa-user"></i>  Admin </p>
                            <h6 class="font-weight-bolder blue-text">Florence Garza</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn light-blue-bg text-white">Go somewhere</a>
                        </div>
                    </div>
                </div>
                    @endfor
                @endif


            </div>
        </div>
    </section>
{{--    End of Eight Section--}}
{{--    Nine Section--}}
    <section class="my-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 my-section px-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80077.50269841286!2d71.38563584981559!3d51.15600977553601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x424580c47db54609%3A0x97f9148dddb19228!2z0J3Rg9GALdCh0YPQu9GC0LDQvSAwMjAwMDA!5e0!3m2!1sru!2skz!4v1617882870339!5m2!1sru!2skz" width="100%" style="border:0; min-height: 100vh" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-6 blue-bg my-section d-flex justify-content-center align-items-center">
                      <div class="text-center">
                          <h1 class="heading-1 text-white">
                              {{__("frontend.contact_frontend")}}
                          </h1>
                          <lottie-player src="{{asset("/lottie/contact-us.json")}}" background="transparent"  speed="1"  style="height: 250px;" loop autoplay></lottie-player>
                          <div class="text-center d-block">
                              <a href="{{route("contact")}}" class="btn btn-primary btn-block p-2 shadow rounded-pill d-inline">{{__("frontend.our_contact")}} <i class="fab fa-telegram-plane mx-2"></i> </a>
                          </div>
                      </div>
                </div>

            </div>
        </div>
    </section>
{{--    End of Nine Section--}}
@endsection

@push("scripts")
    <script src="{{asset("/js/jquery.youtube-background.min.js")}}"></script>
    <script src="{{asset("/js/jquery.lettering-0.6.1.min.js")}}"></script>
    <script src="{{asset("/js/textillate.js")}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('[data-youtube]').youtube_background({
                'play-button': false
            });
            AOS.init();


            const swiper = new Swiper('.swiper-comments-container', {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
            new Swiper('.swiper-service-container', {
                slidesPerView: 1,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });

        });
    </script>

@endpush
