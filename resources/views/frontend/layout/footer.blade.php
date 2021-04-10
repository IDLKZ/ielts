<section class="footer-bg ">
<div class="container mh-250 py-4">
    <div class="row">
        <div class="col-md-4">

                @if($footer)
                <div class="text-md-left text-center">
                    <img src="{{asset($footer->img)}}" height="40px">
                    <p class="text-white fs-16 my-2">
                        {{$footer->title}}
                    </p>
                </div>
                @else
                <div class="text-md-left text-center">
                    <img src="{{asset("/logo.png")}}" height="40px">
                    <p class="text-white fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor est fugit laboriosam necessitatibus nisi quos! Ad aliquam beatae cupiditate deserunt, eos laborum maxime minus perspiciatis, sed soluta ut voluptas.</p>
                </div>
                @endif

        </div>
        <div class="col-md-4 text-center text-white">
            <p class="font-weight-bold fs-20">{{__("frontend.useful_links")}}</p>
            <ul class="list-unstyled">
                <li class="nav-item ml-2 pointer-event">
                    <a class="{{ request()->routeIs('main') ? 'nav-link active' : 'nav-link' }} fs-16" href="/">{{__("frontend.menu_main")}}</a>
                </li>
                <li class="nav-item dropdown fs-16">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__("frontend.menu_about")}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route("about")}}">{{__("frontend.menu_who_we_are")}}</a>
                        <a class="dropdown-item" href="{{route("teacher")}}">{{__("frontend.menu_teachers")}}</a>
                        <a class="dropdown-item" href="{{route("gallery")}}">{{__("frontend.menu_gallery")}}</a>
                        <a class="dropdown-item" href="{{route("faq")}}">{{__("frontend.menu_fag")}}</a>
                    </div>
                </li>
                <li class="nav-item dropdown fs-16">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__("frontend.menu_service")}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route("my-ielts")}}">{{__("frontend.menu_ielts")}}</a>
                        <a class="dropdown-item" href="{{route("course")}}">{{__("frontend.menu_course")}}</a>
                    </div>
                </li>
                <li class="nav-item ml-2 text-white pointer-event">
                    <a href="{{route("my-prices")}}"  class="{{ request()->routeIs('my-prices') ? 'nav-link active' : 'nav-link' }} fs-16" >{{__("frontend.menu_price")}}</a>
                </li>
                <li class="nav-item ml-2">
                    <a href="{{route("blogs")}}"  class="{{ request()->routeIs('blogs') ? 'nav-link active' : 'nav-link' }} fs-16" >{{__("frontend.menu_blog")}}</a>
                </li>
                <li class="nav-item ml-2">
                    <a href="{{route("contact")}}" class="{{ request()->routeIs('contact') ? 'nav-link active' : 'nav-link' }} fs-16" >{{__("frontend.menu_contact")}}</a>
                </li>
                <li class="nav-item dropdown fs-16">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__("frontend.menu_languages")}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item dropdown fs-16">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{__("frontend.menu_cabinet")}}
                    </a>
                    @auth()
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route("home")}}">{{__("frontend.menu_cabinet")}}</a>
                        </div>
                    @endauth
                    @guest()
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route("login")}}">{{__("frontend.menu_login")}}</a>
                        </div>
                    @endguest
                </li>

            </ul>
        </div>
        <div class="col-md-4 text-md-left text-center">
            <p class="font-weight-bold fs-20 text-white">{{__("frontend.social")}}</p>
            @if($socials->isNotEmpty())
                @foreach($socials as $social)
            <a href="{{$social->link}}" target="_blank" class="text-white fs-16"><i class="{{$social->icon}}"></i></a>
                @endforeach
                @endif


        </div>
    </div>
</div>
</section>
