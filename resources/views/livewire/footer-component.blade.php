<footer class="site__footer site__footer--2 site__footer--3 pt-90">
    <div class="container">
        <div class="row mt-none-30">
            <div class="col-xl-4 col-lg-6 col-md-5 mt-30">
                <div class="footer__widget footer__widget--2 footer__widget--3">
                    <h4 class="title mb-30">Contact<span>.</span></h4>
                    <div class="contact-info">
                        <ul>
                            <li><a href="/cdn-cgi/l/email-protection#0b62656d644b7c6e69666a626725686466"><i
                                        class="fal fa-envelope"></i>
                                    <span class="__cf_email__"
                                        data-cfemail="f990979f96b98e9c9b94989095d79a9694">info@techbuzz.com</span></a>
                            </li>
                            <li><a href="tel:+987876765654554"><i class="fal fa-phone"></i> +256 751900666
                                    554</a></li>
                            <li><i class="fal fa-map-marker-alt"></i> Makerere ,kampala</li>
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
                                @foreach ($services as $service)
                                    <li><a href="{{ route('service-details', ['id' => $service->id]) }}">{{ $service->name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">It Services</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Faqs</a></li>
                                <li><a href="#">24/7 Support</a></li>
                            </ul>
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
                                <p>Copyright TechBuzz - <span>2024</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
