<div>
    <!-- breadcrumb area start -->
    <section class="breadcrumb pt-150 pb-150 bg_img" data-background="{{ asset('assets/images/bg/breadcrumb-bg-1.jpeg') }}" data-overlay="dark" data-opacity="5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb__wrap">
                        <h2 class="title">Service Details</h2>
                        <div class="breadcrumb__nav">
                            <ul>
                                <li><span>//</span></li>
                                <li><a href="/">Home</a></li>
                                <li>|</li>
                                <li>Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="about__area about__area--7 pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 pr-55">
                    <div class="about__bg about__bg--7 bg_img" data-background="">
                        <img src="{{ asset('image/services') }}/{{ $service->image }}" alt="">
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 pl-20">
                    <div class="about__wrap about__wrap--4">
                        <div class="section__heading mb-35">
                            <h4 class="section__heading--title-small"><span class="mr-10">//</span>OUR SERVICES</h4>
                            <h2 class="section__heading--title">{{ $service->name }}</h2>
                            <div class="section__heading--content mt-20">
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    
                        <div class="row mt-none-20">
                            <div class="col-xl-6 mt-20">
                                <ul class="service__box--lists">
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Web Template Design</li>
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Theme Development</li>
                                </ul>
                            </div>
                            <div class="col-xl-6 mt-20">
                                <ul class="service__box--lists">
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Game Design</li>
                                    <li><span class="icon"><i class="fal fa-check"></i></span> Illustration Design</li>
                                </ul>
                            </div>
                        </div>
                        <a href="{{ route('contact-us') }}" class="site-btn">Get Started Now <span>+ </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

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
   
</div>