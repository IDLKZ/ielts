<header class="nav-bar-container">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark my-navbar">
            <a class="navbar-brand border-left px-2 fs-20 font-weight-bold logo" href="#">
                <img src="{{asset("/logo.png")}}" height="40px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ml-2 pointer-event">
                        <a class="{{ request()->routeIs('main') ? 'nav-link active' : 'nav-link' }} fs-18" href="/">{{__("frontend.menu_main")}}</a>
                    </li>
                    <li class="nav-item dropdown fs-18">
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
                    <li class="nav-item dropdown fs-18">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__("frontend.menu_service")}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route("my-ielts")}}">{{__("frontend.menu_ielts")}}</a>
                            <a class="dropdown-item" href="{{route("course")}}">{{__("frontend.menu_course")}}</a>
                        </div>
                    </li>
                    <li class="nav-item ml-2 text-white pointer-event">
                        <a href="{{route("my-prices")}}"  class="{{ request()->routeIs('my-prices') ? 'nav-link active' : 'nav-link' }} fs-18" >{{__("frontend.menu_price")}}</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route("blogs")}}"  class="{{ request()->routeIs('blogs') ? 'nav-link active' : 'nav-link' }} fs-18" >{{__("frontend.menu_blog")}}</a>
                    </li>
                    <li class="nav-item ml-2">
                        <a href="{{route("contact")}}" class="{{ request()->routeIs('contact') ? 'nav-link active' : 'nav-link' }} fs-18" >{{__("frontend.menu_contact")}}</a>
                    </li>
                    <li class="nav-item dropdown fs-18">
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
                    <li class="nav-item dropdown fs-18">
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
        </nav>
    </div>
</header>

