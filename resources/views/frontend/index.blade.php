@extends("frontend.layout.layout")

@section('content')
{{--    Video First Slider--}}
<section class="my-section">
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
                    <a data-aos="fade-left"  href="{{route("about")}}" class="btn bg-transparent btn-lg text-white border-white ml-2">
                        {{__("frontend.about_title")}}
                        <i class="fas fa-building"></i>
                    </a>

                    <a data-aos="fade-left"  href="{{route("course")}}" class="btn bg-transparent btn-lg text-white border-white ml-2">
                        {{__("frontend.all_services")}}
                        <i class="fas fa-handshake"></i>
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


{{--Second Slider--}}
<section class="my-section py-5 d-flex align-items-center">
    <div class="container">
        <div class="row">
            @if($data["headers"]["ielts"])
                <div class="col-md-12 text-center" data-aos="zoom-in-up">
                    <h1 class="heading-1 blue-text">
                       {{$data["headers"]["ielts"]["title"]}}
                    </h1>
                    <p class="subheading-1">
                        {{$data["headers"]["ielts"]["subtitle"]}}
                    </p>
                </div>
            @else
            <div class="col-md-12 text-center" data-aos="zoom-in-up">
                <h1 class="heading-1 blue-text">
                    {{__("frontend.ielts_title")}}
                </h1>
                <p class="subheading-1">
                    {{__("frontend.ielts_subtitle")}}
                </p>
            </div>
            @endif
        </div>
        <div class="row py-2">
            @if($data["ielts"]->isNotEmpty())
                @foreach($data["ielts"] as $ielts)
                <div class="col-md-3 my-2" data-aos="zoom-in-up">
                    <div class="card text-center py-2 border-0">
                        <div class="bg-mini-circle blue-bg d-flex align-self-center my-2 bg-content"
                        style="background-image: url('{{$ielts->img}}')"
                        ></div>
                        <p class="fs-20 font-weight-bold">{{$ielts->title}}</p>
                        <a href="{{route("my-ielts")}}" class="btn my-btn my-btn-blue btn-sm fs-14">
                            {{__("frontend.info")}}
                            <i class="fas fa-info"></i>
                        </a>
                    </div>
                </div>
                @endforeach


            @else
            @for($i=0; $i<4; $i++)
            <div class="col-md-3 my-2" data-aos="zoom-in-up">
                <div class="card text-center py-2 border-0">
                    <div class="bg-mini-circle blue-bg d-flex align-self-center my-2"></div>
                    <p class="fs-18 font-weight-bolder">Lorem Ipsum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <a href="" class="btn my-btn my-btn-blue btn-sm fs-14">
                        {{__("frontend.info")}}
                        <i class="fas fa-info"></i>
                    </a>
                </div>
            </div>
            @endfor
            @endif


        </div>
    </div>



</section>
{{--End Second Slider--}}

{{--    Third Second--}}
<section>
    <div class="container-fluid my-section">
        <div class="row aqua-gradient">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="px-md-2 py-2 text-center text-md-left px-md-4"  data-aos="zoom-out-right">
                @if($data["headers"]["about"])
                        <h1 class="heading-1 text-white">
                            {{$data["headers"]["about"]["title"]}}
                        </h1>
                        <p class="subheading-1 text-white">
                            {{$data["headers"]["about"]["subtitle"]}}
                        </p>
                    @else
                    <h1 class="heading-1 text-white">
                    {{__("frontend.about_title")}}
                    </h1>
                    <p class="subheading-1 text-white">
                    {{__("frontend.about_subtitle")}}
                    </p>
                    @endif
                <br>
                @if($data["about"])
                        <p class="subheading-1 text-white">
                           {{$data["about"]->title}}
                        </p>
                    <div class="fs-16 text-white">
                        {!! $data["about"]->description !!}
                    </div>
                @else
                <p class="fs-16 text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut, consequuntur dolore exercitationem fugiat magni praesentium? Adipisci, aperiam cum debitis delectus ducimus enim magni minus pariatur, porro quod ratione temporibus.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut, consequuntur dolore exercitationem fugiat magni praesentium? Adipisci, aperiam cum debitis delectus ducimus enim magni minus pariatur, porro quod ratione temporibus.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut, consequuntur dolore exercitationem fugiat magni praesentium? Adipisci, aperiam cum debitis delectus ducimus enim magni minus pariatur, porro quod ratione temporibus.
                </p>
                 @endif
                <a href="{{route("about")}}" class="btn my-btn my-btn-blue my-btn-md">
                    {{__("frontend.about_title")}}
                    <i class="fas fa-users"></i>
                </a>
                </div>
            </div>
            <div class="col-md-6" data-aos="zoom-out-left">
                <lottie-player src="{{asset("/lottie/about.json")}}" background="transparent"  speed="1"  style="width: 100%;" loop autoplay></lottie-player>
            </div>

        </div>
    </div>
</section>
{{--    End Third Second--}}
{{--Fourth Section--}}
<section class="my-section">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="zoom-in-up">
                @if($data["headers"]["advantage"])
                    <h1 class="heading-1 blue-text">
                        {{$data["headers"]["advantage"]["title"]}}
                    </h1>
                    <p class="subheading-1">
                        {{$data["headers"]["advantage"]["subtitle"]}}
                    </p>
                @else
                <h1 class="heading-1 blue-text">
                    {{__("frontend.advantage_title")}}
                </h1>
                <p class="subheading-1">
                    {{__("frontend.advantage_subtitle")}}
                </p>
                @endif
            </div>
        </div>
        <div class="row py-2">
            @if($data["advantages"]->isNotEmpty())
                @foreach($data["advantages"] as $advantage)
                    <div class="col-md-4 my-2" data-aos="zoom-out">
                        <div class="card text-center py-2 border-0">
                            <div class="bg-mini-circle light-blue-bg2 d-flex align-self-center align-items-center justify-content-center my-2">
                                <img src="{{$advantage->img}}" height="100px">
                            </div>
                            <p class="fs-20 font-weight-bolder">
                                {{$advantage->title}}
                            </p>
                            <p>{{$advantage->subtitle}}</p>
                        </div>
                    </div>
                @endforeach
            @else
            @for($i=0; $i<6; $i++)
                <div class="col-md-4 my-2" data-aos="zoom-out">
                    <div class="card text-center py-2 border-0">
                        <div class="bg-mini-circle blue-bg d-md-flex align-self-center my-2"></div>
                        <p class="fs-18 font-weight-bolder">Lorem Ipsum</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            @endfor
                @endif


        </div>
    </div>
</section>
{{--End Fourth Section--}}

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
