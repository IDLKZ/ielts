<header class="header header-transparent">
    <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container">

            <a class="navbar-brand" href="/">
                @if($logo)
                    <img src="{{asset($logo->img)}}"  height="40px">
                @else
                    <img src="{{asset("/logo.png")}}"  height="40px">
                @endif
            </a>
            <button class="navbar-toggler" type="button">
                <span class="menu-lines"><span></span></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav__item ">
                        <a href="/"  class="{{ request()->routeIs('main') ? 'active' : '' }} nav__item-link ">{{__("frontend.menu_main")}}</a>
                    </li><!-- /.nav-item -->

                    <li class="nav__item  has-dropdown">
                        <a href="#" class="{{ request()->routeIs('about') ? 'active' : '' }}  nav__item-link dropdown-toggle">{{__("frontend.menu_about")}}</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("about")}}">{{__("frontend.menu_who_we_are")}}</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("teacher")}}">{{__("frontend.menu_teachers")}}</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("gallery")}}">{{__("frontend.menu_gallery")}}</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("faq")}}">{{__("frontend.menu_fag")}}</a>
                            </li><!-- /.nav-item -->

                        </ul><!-- /.dropdown-menu -->



                    </li><!-- /.nav-item -->
                    <li class="nav__item  has-dropdown">
                        <a href="#" class="nav__item-link dropdown-toggle">{{__("frontend.menu_service")}}</a>
                        <ul class="dropdown-menu">
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("course")}}">{{__("frontend.menu_service")}}</a>
                            </li><!-- /.nav-item -->
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("my-ielts")}}">{{__("frontend.menu_ielts")}}</a>
                            </li><!-- /.nav-item -->


                        </ul><!-- /.dropdown-menu -->



                    </li><!-- /.nav-item -->
{{--                    <li class="nav__item ">--}}
{{--                        <a href="/"  class="{{ request()->routeIs('my-prices') ? 'active' : '' }} nav__item-link">{{__("frontend.menu_price")}}</a>--}}
{{--                    </li><!-- /.nav-item -->--}}
{{--                    <li class="nav__item ">--}}
{{--                        <a href="/"  class="{{ request()->routeIs('blogs') ? 'active' : '' }} nav__item-link">{{__("frontend.menu_blog")}}</a>--}}
{{--                    </li><!-- /.nav-item -->--}}
                    <li class="nav__item ">
                        <a href="/"  class="{{ request()->routeIs('contact') ? 'active' : '' }} nav__item-link">{{__("frontend.menu_contact")}}</a>
                    </li><!-- /.nav-item -->
                    <li class="nav__item  has-dropdown">
                        <a href="#" class="nav__item-link dropdown-toggle">{{__("frontend.menu_languages")}}</a>
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="nav__item">
                                <a class=" nav__item-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li><!-- /.nav-item -->
                            @endforeach


                        </ul><!-- /.dropdown-menu -->


                    </li><!-- /.nav-item -->
                    <li class="nav__item  has-dropdown">
                        <a href="#" class="nav__item-link dropdown-toggle">{{__("frontend.menu_cabinet")}}</a>
                        <ul class="dropdown-menu">
                            @auth()
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("home")}}">{{__("frontend.menu_cabinet")}}</a>
                            </li><!-- /.nav-item -->
                                <li class="nav__item">
                                    <a class="nav__item-link" href="{{route("logout")}}">{{__("frontend.menu_logout")}}</a>
                                </li><!-- /.nav-item -->
                            @endauth
                            @guest()
                            <li class="nav__item">
                                <a class="nav__item-link" href="{{route("login")}}">{{__("frontend.menu_login")}}</a>
                            </li><!-- /.nav-item -->
                                @endguest


                        </ul><!-- /.dropdown-menu -->



                    </li><!-- /.nav-item -->
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
    </nav><!-- /.navabr -->
</header><!-- /.Header -->
