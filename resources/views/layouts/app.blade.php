<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>TechBuzz</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.ico') }}" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @livewireStyles
    </head>
    <body>
        <header class="header header--2 header--3">
            <div class="navarea navarea--2 navarea--3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-4 my-auto">
                            <div class="header__logo">
                                <a href="/">
                                    <img src="{{asset('assets/images/logo/logo-white.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="header__menu header__menu--2 header__menu--3">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="/">My Account <span>+</span></a>
                                          
                                        </li>
                                      
                                        <li><a href="/">Contact <span>+</span></a>
                                            
                                        </li>
                                        
                                        
                                        <li><a href="/">Login </a></li>
                                        <li><a href="/">Register </a></li>

                                    </ul>
                                </nav>
                                <div class="mobile-menu"></div>
                            </div>
                        </div>
                    @if (Route::has('login'))
                    @auth
                       @if(Auth::user()->utype==='ADM')
                      //admin
                      <ul>
                        <li><a href="/">My Account ({{auth::user()->name }})<span>+</span></a>
                          
                        </li>
                      
                        <li><a href="{{route('admin.dashboard')}}">Dashboard<span>+</span></a>
                            
                        </li>
                        
                        
                        <li><a href="{{route('login')}}">Login </a></li>
                        <li><a href="{{route('login')}}">Register </a></li>

                    </ul>
                    @else
                    // user
                    <ul>
                        <li><a href="/">My Account ({{Auth::user()->name }}) <span>+</span></a>
                          
                        </li>
                      
                        <li><a href="{{route('user.dashboard')}}">Dashboard<span>+</span></a>
                            
                        </li>
                        
                        
                        <li><a href="{{route('login')}}">Login </a></li>
                        <li><a href="{{route('login')}}">Register </a></li>

                    </ul>
                    @endif
                    @else
                    <li><a href="{{route('login')}}">Login </a></li>
                    <li><a href="{{route('register')}}">Register </a></li>
                    @endif
                    @endif
                    </div>                  
                </div>
            </div>

        </header>
      
            
        {{-- @yield('content')
         --}}
        {{ $slot }}


         <!-- footer area start -->
    
     <footer class="site__footer site__footer--2 site__footer--3 pt-90">
        <div class="container">
            <div class="row mt-none-30">
                <div class="col-xl-4 col-lg-6 col-md-5 mt-30">
                    <div class="footer__widget footer__widget--2 footer__widget--3">
                        <h4 class="title mb-30">Contact<span>.</span></h4>
                        <div class="contact-info">
                            <ul>
                                <li><a href="/cdn-cgi/l/email-protection#0b62656d644b7c6e69666a626725686466"><i class="fal fa-envelope"></i>
                                        <span class="__cf_email__" data-cfemail="f990979f96b98e9c9b94989095d79a9694">[email&#160;protected]</span></a></li>
                                <li><a href="tel:+987876765654554"><i class="fal fa-phone"></i> +987 876 765 654
                                        554</a></li>
                                <li><i class="fal fa-map-marker-alt"></i> 13/A, Holownin City, NYC</li>
                            </ul>
                        </div>
                        <a href="contact.html" class="site-btn mt-40">Get Direction <span><i
                                    class="fal fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7 mt-30">
                    <div class="footer__widget footer__widget--2 footer__widget--3">
                        <h4 class="title mb-30">Services<span>.</span></h4>
                        <div class="row no-gutters">
                            <div class="col">
                                <ul>
                                    <li><a href="service-details.html">IT Software</a></li>
                                    <li><a href="service-details.html">IT Support</a></li>
                                    <li><a href="service-details.html">IT Platforms</a></li>
                                    <li><a href="service-details.html">Cloud Computing</a></li>
                                    <li><a href="service-details.html">Cyber Security</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="service-details.html">UIX Design</a></li>
                                    <li><a href="service-details.html">Web Develop</a></li>
                                    <li><a href="service-details.html">Game Design</a></li>
                                    <li><a href="service-details.html">24/7 Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="footer__widget footer__widget--2 footer__widget--3">
                        <h4 class="title mb-30">News Feeds</h4>
                        <div class="newsfeed__wrap">
                            <div class="newsfeed__item newsfeed__item--2 newsfeed__item--3 mb-20">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/news/news-small-3.jpeg') }}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                    </ul>
                                    <h4 class="title"><a href="news-details.html">We are specialists in both
                                            economics and information</a></h4>
                                </div>
                            </div>
                            <div class="newsfeed__item newsfeed__item--2 newsfeed__item--3">
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/news/news-small-4.jpeg') }}" alt="">
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th June 2020</a></li>
                                    </ul>
                                    <h4 class="title"><a href="news-details.html">We are specialists in both
                                            economics and information</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__area copyright__area--2 mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="copyright-text">
                            <div class="row">
                                <div class="col-xl-12 text-center">
                                    <p>Copyright By@Example - <span>2020</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </footer>
     <!-- footer area end -->

    
     <!-- Fullscreen search -->
     <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
     </div>
     <!-- end fullscreen search -->

     <!--========= JS Here =========-->
     <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
     <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
     <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
     <script src="{{ asset('assets/js/lightcase.js') }}"></script>
     <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('assets/js/js_jquery.knob.js') }}"></script>
     <script src="{{ asset('assets/js/js_jquery.appear.js') }}"></script>
     <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
     <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
     <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
     <script src="{{ asset('assets/js/wow.min.js') }}"></script>
     <script src="{{ asset('assets/js/waypoint.js') }}"></script>
     <script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
     {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/fontawesome.min.js" integrity="sha512-1M9vud0lqoXACA9QaA8IY8k1VR2dMJ2Qmqzt9pN2AH7eQHWpNsxBpaayV0kKkUsF7FLVQ2sA2SSc8w5VOm7/mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
     <script src="{{ asset('assets/js/main.js') }}"></script>
    
     @livewireScripts
    
    </body>
</html>
