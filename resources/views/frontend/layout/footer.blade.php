<footer class="footer footer-light">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 footer-widget footer-widget-about">
                    <div class="footer-widget__content">
                        @if($footer)
                            <div class="text-md-left text-center">
                                <img src="{{asset($footer->img)}}" height="40px">
                                <p class="fs-16 my-2">
                                    {{$footer->title}}
                                </p>
                            </div>
                        @else
                            <div class="text-md-left text-center">
                                <img src="{{asset("/logo.png")}}" height="40px">
                                <p class="fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor est fugit laboriosam necessitatibus nisi quos! Ad aliquam beatae cupiditate deserunt, eos laborum maxime minus perspiciatis, sed soluta ut voluptas.</p>
                            </div>
                        @endif
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-3 -->
                <div class="col-sm-6 col-md-4 col-lg-4 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">{{__("frontend.useful_links")}}</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled">
                                <li><a href="/">{{__("frontend.menu_main")}}</a></li>
                                <li><a href="{{route("about")}}">{{__("frontend.menu_who_we_are")}}</a></li>
                                <li><a href="{{route("teacher")}}">{{__("frontend.menu_teachers")}}</a></li>
                                <li><a href="{{route("my-ielts")}}">{{__("frontend.menu_ielts")}}</a></li>
                                <li><a href="{{route("course")}}">{{__("frontend.menu_course")}}</a></li>
                                <li><a href="{{route("my-prices")}}">{{__("frontend.menu_price")}}</a></li>
                                <li><a href="{{route("blogs")}}">{{__("frontend.menu_blog")}}</a></li>
                                <li><a href="{{route("contact")}}">{{__("frontend.menu_contact")}}</a></li>

                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-4 footer-widget">
                    <h6 class="footer-widget__title">{{__("frontend.social")}}</h6>
                    <div class="footer-widget__content">
                        <ul class="social-icons list-unstyled mb-0 mr-30">
                            @if($socials->isNotEmpty())
                                @foreach($socials as $social)
                                    <li>
                                    <a href="{{$social->link}}" target="_blank"><i class="{{$social->icon}}"></i></a>
                                    </li>
                                @endforeach
                            @endif
                        </ul><!-- /.social-icons -->
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-primary -->
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="footer__copyrights">
                        <span class="fz-14">&copy; 2021 IELTS, All Rights Reserved. With Love by</span>
                        <a class="fz-14 color-primary" href="/">IDL</a>
                    </div>
                </div><!-- /.col-lg-6 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.footer-secondary -->
</footer><!-- /.Footer -->
