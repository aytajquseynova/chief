<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <header class="header">
        <div class="menu">
            <i class="fa fa-window-close" aria-hidden="true"></i>
            <ul>
                <li><a href="{{route('about')}}">About us</a></li>
                <li><a href="{{route('services')}}">Services</a></li>
                <li><a href="{{route('products')}}">Products</a></li>
                <li><a href="{{route('ourteams')}}">Our team</a></li>
                <li><a href="{{route('contact')}}">Contact us</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="header__top">
                <div class="header__top__wrapper">
                    <div class="header__top__tel">
                        <span>
                            <img src="{{asset('assets/front/icons/navbar/carbon_phone-filled.png')}}" alt="">
                        </span>
                        <!-- Assuming $settings has been passed to the view -->
                        <span><a href="tel:{{$settings->phone}}">{{$settings->phone}}</a>
                    </div>
                    <div class="header__top__logo"><a href="{{route('home')}}">
                            <img src="{{ asset($settings->logo) }}" alt="">

                        </a></div>
                    <div class="header__top__lang">
                        <span>
                            <img src="{{asset('assets/front/icons/navbar/icon-park-outline_earth.png')}}" alt="">
                        </span>
                        <span>EN</span>
                    </div>
                    <div class="header__hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav class="navbar">
                <div class="navbar__wrapper">
                    <ul>
                        <li><a href="{{route('about')}}">About us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="{{route('products')}}">Products</a></li>
                        <li><a href="{{route('ourteams')}}">Our team</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div>
            </nav>
            @yield('header_body')
        </div>
        <div class="header__img">
            <img src="{{asset('assets/front/images/header/Group 1 (2).png')}}" alt="">
        </div>
    </header>
</div>