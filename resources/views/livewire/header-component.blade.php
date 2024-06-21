<header class="header header--2 header--3">

    <div class="navarea navarea--2 navarea--3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-4 my-auto">
                    <div class="header__logo">
                        <a href="/">
                            <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="header__menu header__menu--2 header__menu--3">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="/">Home <span>+</span></a>


                                </li>

                                <li><a href="{{ route('contact-us') }}">Contact <span>+</span></a>

                                </li>

                                <li><a href="#">Services <span>+</span></a>
                                    <ul class="sub-menu">
                                        @foreach ($services as $service)
                                            <li><a href="{{ route('service-details', ['id' => $service->id]) }}">{{ $service->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="#">My Account <span>+</span></a>
                                    <ul class="sub-menu">
                                        @if (Route::has('login'))
                                        @auth
                                        {{-- //admin --}}
                                            @if (Auth::user()->utype === 'ADM')
                                            <li><a href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                                            <li><a href="{{ route('admin.services') }}">Services</a></li>
                                            <li><a href="{{ route('admin.blogs') }}">Blogs</a></li>
                                            <li><a href="{{ route('admin.contacts') }}">Contacts</a></li>


                                            <li ><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form') .submit();">Logout
                                            </a></li>

                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                            @else
                                            {{-- user --}}
                                            <li><a href="{{ route('user.dashboard') }}">User Dashboard</a></li>
                                            <li ><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form') .submit();">Logout
                                            </a></li>

                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                            @endif

                                        @else
                                                <li><a href="{{ route('login') }}">Login </a></li>
                                                <li><a href="{{ route('register') }}">Register </a></li>
                                            @endauth
                                        @endif
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-8 my-auto d-none d-xl-block d-lg-block">
                    <div class="navarea__right">
                        @if (Route::has('login'))
                            @auth
                            <a href="#" class="site-btn">{{ Route::has('login') ? 'Welcome '.Auth::user()->name  : ''}} <span>+</span></a>
                            @else
                            {{-- <a href="#" class="site-btn"> <span>+</span></a> --}}
                            @endauth
                        @endif
                        {{-- <button class="search-trigger">
                            <i class="fal fa-search"></i>
                        </button> --}}
                    </div>
                </div>
                </div>
            </div>
    </div>

</header>

