<footer class="footer footer-light">
    <div class="footer-primary">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3 footer-widget footer-widget-about">
                    <div class="footer-widget__content">
                        @if($footer)
                            <img src="{{asset($footer->img)}}"  height="150px" alt="logo" class="mb-30">
                        @else
                            <img src="{{asset("/logo.png")}}"  height="40px" alt="logo" class="mb-30">
                        @endif
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-xl-3 -->
                <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">{{__("frontend.menu_about")}}</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled text-dark">
                                <li><a href="{{route("about")}}">{{__("frontend.menu_who_we_are")}}</a></li>
                                <li><a href="{{route("teacher")}}">{{__("frontend.menu_teachers")}}</a></li>
                                <li><a href="{{route("gallery")}}">{{__("frontend.menu_gallery")}}</a></li>
                                <li><a href="{{route("faq")}}">{{__("frontend.menu_fag")}}</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-6 col-lg-2 footer-widget footer-widget-nav">
                    <h6 class="footer-widget__title">{{__("frontend.menu_service")}}</h6>
                    <div class="footer-widget__content">
                        <nav>
                            <ul class="list-unstyled text-dark">
                                <li><a href="{{route("course")}}">{{__("frontend.menu_service")}}</a></li>
                                <li><a href="{{route("my-ielts")}}">{{__("frontend.menu_ielts")}}</a></li>
                            </ul>
                        </nav>
                    </div><!-- /.footer-widget__content -->
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-6 col-md-8 col-lg-5 footer-widget">
                    @if($footer)
                        <h6 class="footer-widget__title">{{$footer->title}}</h6>
                        <div class="footer-widget__content">
                            <form class="footer-form">
                                <div class="text-gray">
                                   {!! $footer->description !!}
                                </div>
                            </form>
                        </div><!-- /.footer-widget__content -->
                    @else
                    <h6 class="footer-widget__title">Наши контакты</h6>
                    <div class="footer-widget__content">
                        <form class="footer-form">
                           <div class="text-dark">
                               ИП «Samga Academy», Омарова 174, Z00Y2M3, г.Нур-Султан, Казахстан.
                               <br>
                               Администратор: Советова Кымбат Кайратовна, ИИН 971106451080,
                               <br>
                               WhatsApp: +77082590411, Instagram:@samgaacademy
                           </div>
                        </form>
                    </div><!-- /.footer-widget__content -->
                    @endif
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <div class="footer-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="footer__copyrights">
                        <span class="fz-14">© 2021, All Rights Reserved. With Love by</span>
                        <a class="fz-14 color-primary" href="javascript:void (0)">IDL</a>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-2 col-lg-2 text-center">
                    <button id="scrollTopBtn" class="my-2"><i class="icon-arrow-up-2"></i></button>
                </div><!-- /.col-lg-2 -->
                <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end align-items-center">
                    <ul class="social-icons list-unstyled mb-0 mr-30">
                        <li><a target="_blank" href="https://wa.me/+77082590411"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/samgaacademy/"><i class="fab fa-instagram"></i></a></li>
                    </ul><!-- /.social-icons -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
</footer><!-- /.Footer -->
