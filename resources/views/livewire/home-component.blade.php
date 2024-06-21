<div>
    <!-- banner area start -->
    <section class="banner__area banner__area--2 banner__area--3">
        <div class="bannerSlide owl-carousel">
            <div class="bannerSlide__item bg_img" data-background="{{ asset('assets/images/banner/banner-slide-1.jpeg') }}" data-overlay data-opacity="7">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 text-center">
                            <div class="bannertext bannertext__2 bannertext__3">
                                <h5 class="subheading mb-15" data-animation="fadeInUp" data-delay=".3s"><span class="mr-10">//</span> Best IT Solution provider <span class="ml-10">//</span></h5>
                                <h1 class="heading" data-animation="fadeInUp" data-delay=".5s">IT Solutions <br>For Business.</h1>
                                <div class="buttons mt-25">
                                    <a href="{{ route('contact-us') }}" class="site-btn" data-animation="fadeInUp" data-delay=".7s">Get In Touch <span>+</span></a>
                                    <a href="#" class="site-btn transparent" data-animation="fadeInUp" data-delay=".9s">Learn More <span>+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="cricle cricle__1" data-animation="zoomIn" data-delay=".1s"></span>
                <span class="cricle cricle__2" data-animation="zoomIn" data-delay=".3s"></span>
            </div>
            <div class="bannerSlide__item bg_img" data-background="{{ asset('assets/images/banner/banner-slide-1.jpeg') }}" data-overlay data-opacity="7">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 text-center">
                            <div class="bannertext bannertext__2 bannertext__3">
                                <h5 class="subheading mb-15" data-animation="fadeInUp" data-delay=".3s"><span class="mr-10">//</span> Best IT Solution provider <span class="ml-10">//</span></h5>
                                <h1 class="heading" data-animation="fadeInUp" data-delay=".5s">IT Solutions <br>For Business.</h1>
                                <div class="buttons mt-25">
                                    <a href="contact.html" class="site-btn" data-animation="fadeInUp" data-delay=".7s">Get In Touch <span>+</span></a>
                                    <a href="about.html" class="site-btn transparent" data-animation="fadeInUp" data-delay=".9s">Learn More <span>+</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="cricle cricle__1" data-animation="zoomIn" data-delay=".1s"></span>
                <span class="cricle cricle__2" data-animation="zoomIn" data-delay=".3s"></span>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- appoinment area start -->
    <div class="appoinment">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="appoinment__wrap pt-80 pb-80">
                        <div class="row">
                            <div class="col-xl-2">
                                <h2 class="appoinment-title">Get An <br> Appointment
                                </h2>
                            </div>
                            <div class="col-xl-10">
                                @if (Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="appoinment__form" >
                                    <form action="#" wire:submit.prevent="submit">
                                        <div class="form__group" wire:ignore>
                                            <div class="form__group--item">
                                                <label for="name"><i class="fal fa-user"></i></label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter your full name" wire:model="name" required>
                                            </div>
                                            <div class="form__group--item">
                                                <label for="email"><i class="fal fa-user"></i></label>
                                                <input type="text"  class="form-control" id="email" placeholder="Enter your Email" wire:model="email" required>
                                            </div>
                                            <div class="form__group--item">
                                                <label for="contact"><i class="fal fa-user"></i></label>
                                                <input type="text" class="form-control" id="contact" placeholder="Enter your Contact" wire:model="phone" required>
                                            </div>
                                            <div class="form__group--item">
                                                <label for="service_id"><i class="fal fa-arrow-down"></i></label>
                                                <select class="form-control" name="service_id" id="service_id" wire:model="service_id" required>
                                                    <option value="">Select Service Name</option>
                                                    @foreach ($services as $service)
                                                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit"><i class="fal fa-paper-plane"></i>Book Appointment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- appoinment area end -->

    <!-- about area start -->
    <section class="about__area about__area--2 about__area--3 pt-100 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__heading mb-30 mt-65">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>about us</h4>
                        <h2 class="section__heading--title">We’ve Been Thriving for <br> 1 Year+<span>.</span></h2>
                        <div class="section__heading--content mt-20">
                            <p>TechBuzz is your first choice when it comes to IT solutions designed to help businesses to achieve their full potential,Our solutions are designed with user friendly interfaces making it very easy for you to transition to our digital solutions</p>
                        </div>
                    </div>
                    <div class="about__box about__box--2 about__box--3">
                        <ul class="nav" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#tab-1" role="tab" data-toggle="tab">Quality Matters</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">Experienced Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">Technologies</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="tab-1">
                                <p> At TechBuzz our focus is centred around the customer to make sure they get more than they expected ,our motto "Underpromis but overdeliver" ensures that customers get exaclty what will be of benefit to them.</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-2">
                                <p>Our team is made up of not only experinced but very friendly staff that is ready to pay detailed attention to all your software needs, no stone is left unturned whn worjing with our team of experts .</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab-3">
                                <p>TechBuzz ensures that all our solutions are uptodate with the lates security and fuctinal features,with TechBuzz you can always rest assured that you are well equipped with the lastes trend in technology.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-right">
                    <div class="about__bg about__bg--2 about__bg--3">
                        <img src="{{ asset('assets/images/bg/about-bg-2.jpeg') }}" alt="">
                        <div class="call-box">
                            <span>Call Us Anytime!</span>
                            <a href="+256 782248090">+256 782248090</a>
                            <img src="{{ asset('assets/images/icons/call-icon.png') }}" alt="" class="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- service area start -->
    <section class="service__area service__area--2 grey-bg pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent white">Services</h1>
                        <h2 class="section__heading--title">Digital Business Solutions <br> Tailor Made For You<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30">
                @foreach ($services as $service)
                    <div class="col-xl-4 col-lg-6 col-md-12 mt-30">
                        <div class="service__box service__box--2 service__box--3">
                            <div class="icon">
                                <img src="{{ asset('image/services') }}/{{ $service->image }}" class="default" alt="">
                                <img src="{{ asset('image/services') }}/{{ $service->image }}" class="hover" alt="">
                            </div>
                            <div class="content">
                                    <a href="{{ route('service-details', ['id' => $service->id]) }}">
                                        <h2 class="title">{{ $service->name }}</h2>
                                    </a>
                                    <p>{{ $service->description }}</p>
                                </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- support area start -->
    <section class="support__area pt-95 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading white mb-60">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>services<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent">Hire Us</h1>
                        <h2 class="section__heading--title">IT Services & Support For Business<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row custom-row mt-none-30">
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/support-icon-1.png') }}" class="default" alt="">
                            <img src="{{ asset('assets/images/icons/support-icon-h-1.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Approach</h2>
                            <p>Professionalism,Collaborative team work,Attention to detail</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/support-icon-2.png') }}" class="default" alt="">
                            <img src="{{ asset('assets/images/icons/support-icon-h-2.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Values</h2>
                            <p>Hardwork,Honesty,Harmony</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/support-icon-3.png') }}" class="default" alt="">
                            <img src="{{ asset('assets/images/icons/support-icon-h-3.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Resources</h2>
                            <p>Industry standards,Up to date,Secure and Trustworthy</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/support-icon-4.png') }}" class="default" alt="">
                            <img src="{{ asset('assets/images/icons/support-icon-h-4.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Growth Process</h2>
                            <p>Steady,Consistent,Timely</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 mt-30">
                    <div class="support__box">
                        <div class="icon">
                            <img src="{{ asset('assets/images/icons/support-icon-5.png') }}" class="default" alt="">
                            <img src="{{ asset('assets/images/icons/support-icon-h-5.png') }}" class="hover" alt="">
                        </div>
                        <div class="content">
                            <h2 class="title mb-15">Our Support</h2>
                            <p>Realiable 24/7 support all year round </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- support area end -->

    <!-- tema area start -->
    <section class="team-area pt-95 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="section__heading mb-50">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Team</h4>
                        <h2 class="section__heading--title">Our Experts Always Ready <br> To Solve Your Issues<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="team-carousel owl-carousel">
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-1.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Founder</span>
                                <h4 class="name">Generous</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-2.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">CEO</span>
                                <h4 class="name">Debbie</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-3.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Designer</span>
                                <h4 class="name">Douglas</h4>
                            </div>
                        </div>
                        <div class="team__box">
                            <div class="thumb">
                                <img src="{{ asset('assets/images/team/team-4.jpeg') }}" alt="">
                                <div class="social__icons">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <span class="designation">Developer</span>
                                <h4 class="name">George</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tema area end -->

    <!-- cta area start -->
    <section class="cta__area cta__area--2 pt-75 pb-75 bg_img" data-background="{{ asset('assets/images/bg/cta-bg-2.jpeg') }}" data-overlay="dark" data-opacity="7">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="section__heading white">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span> Call to action</h4>
                        <h2 class="section__heading--title">Just Make An Awesome Tour Here<span>.</span></h2>
                    </div>
                </div>
                <div class="col-xl-6 text-right">
                    <a href="{{ route('contact-us') }}" class="site-btn mt-40">Get Started Now <span>+</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

    <!-- testimonial area start -->
    <section class="testimonial__area testimonial__area--2 grey-bg pt-95 pb-95">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section__heading mb-50">
                        <h4 class="section__heading--title-small"><span class="mr-10">//</span>Testimonials<span class="ml-10">//</span></h4>
                        <h1 class="section__heading--transparent white">Feedback</h1>
                        <h2 class="section__heading--title">Our Happy Customers <br> Feedback
                            <span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonials__2 owl-carousel">
                        <div class="testimonial">
                            <h4 class="title mb-25">Professionalism</h4>
                            <p>TechBuzz guys are just the best,everything about them is Professional</p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('assets/images/others/testimonial-authore-2.jpeg') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Dr. Annabelle Habinka</h5>
                                    <span class="designatin">Lecturer Business Woman</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-25">Great Quality Software</h4>
                            <p>I am very happy with the school management software from TechBuzz,everything works perfectly </p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('assets/images/others/testimonial-authore-1.png') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Rosalina Kadama</h5>
                                    <span class="designatin"> Business Woman</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-25">Best ISP Services</h4>
                            <p>If you ever need fast secure and reliable internent i would recommend no other than TechBuzz team.</p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('assets/images/others/testimonial-authore-1.png') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">William Rutoro</h5>
                                    <span class="designatin">Graphics Designer</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                        <div class="testimonial">
                            <h4 class="title mb-25">Customer service</h4>
                            <p>I do not think there is any other team of IT experts willing to give you their clients attentive support as team TechBuzz </p>
                            <div class="authore mt-35 d-flex align-items-center">
                                <div class="authore--thumb mr-20">
                                    <img src="{{ asset('assets/images/others/testimonial-authore-3.jpeg') }}" alt="">
                                </div>
                                <div class="authore--content">
                                    <h5 class="name">Atim Mercy</h5>
                                    <span class="designatin">Hotel Manager</span>
                                </div>
                            </div>
                            <img src="{{ asset('assets/images/icons/quote.png') }}" alt="" class="quote-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->


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
    </div>
