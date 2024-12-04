@extends('layouts.index')
@section('title')
    H20bros Services | {{ env('APP_NAME') }}
@endsection


@section('meta')
    <meta name="title" content="H20bros Services | H2OBros Plumbing">
    <meta name="description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="H20bros Services | H2OBros Plumbing">
    <meta property="og:description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/new/main_service.jpg')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="H20bros Services  | H2OBros Plumbing ">
    <meta name="twitter:description"  content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta name="twitter:image" content="{{asset('assets/new/main_service.jpg')}}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta itemprop="name" content="H2OBros Plumbing">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{asset('assets/new/main_service.jpg')}}">
    <meta itemprop="image" content="{{asset('assets/new/main_service.jpg')}}">
    <link rel="image_src" href="{{asset('assets/new/main_service.jpg')}}">
    <meta name="abstract" content="Top Commercial Plumbing Service in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="Top Commercial Plumbing Service in NYC">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="H2OBros Plumbing">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection




@section('css')
    <style>
        .services-items .col-12 {
            padding-bottom: 38px !important;
        }
        .main-carpet-services-section {
            height: 600px;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-size: cover !important;
        }
    </style>
@endsection


@section('content')
    <!-- main section starts here -->
    <main style="background-position: 65% 20%;" data-background-image="{{ asset('assets/new/main_service.jpg') }}" class="lozad main-carpet-services-section d-flex align-items-end py-5">
        <div class="col-12 col-md-8 col-xl-6  p-5 pb-120">
            <!-- heading section -->
            <div class="">
                <h1 class=" text-green">
                    Services
                </h1>
                <h3 class="heading-2 text-center text-lg-start">Top Carpet Cleaner Service in NYC</h3>
            </div>
            <!-- Book now seciton -->
            <form action="{{ route('callback_number') }}" method="POST" class="row gap-3">
                @csrf
                <input type="text"  name="phone"  id="phone-input" class="py-3 rounded-2 col-md-8 col-12" />
                <button type="submit" class="py-3 rounded-2 bg-lightgreen text-white col-md-3 col-12">BOOK NOW</button>
            </form>
        </div>
    </main>
    <!-- main section starts here -->

    {{-- reviews banner section --}}
    {{-- @include('app.static_components.review_banner') --}}


    {{-- services section starts here --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-4">
                        <h2 class="lh-1-3 lh-md-auto fs-1 fs-md-3 py-3 text-green-1 text-uppercase ">
                            Services
                        </h2>
                    </div>
                    <div class="services-items col-md-12 row row-gap-4 row-gap-lg-5 justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 item text-center">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('hour_24_plumbers') }}"
                                class="d-flex flex-column gap-3">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img alt="post" class="img img-fluid lazy rounded-3 lozad" width="295"
                                            height="295"
                                            data-src="{{ asset('assets/resize/service_1.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="text-green-1 fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto" text-lightgray>
                                    24 Hours Plumber Services
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    We use our homes for everything which is why its important to keep it clean from top to
                                    bottom. Our comprehensive house cleaning services will suite all your needs!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center"
                                href="{{ route('commercial_plumbing_repair') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/comm.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Commercial Plumbing Repair
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Construction work is always messy: dirt, dust, and grime everywhere! Our trained team
                                    knows
                                    how to quickly and effectively clean every nook and cranny of your new project!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('drain_cleaning') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/drian_clean.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Drain Cleaning
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    When we move to a new place, the last thing we want to think about it cleaniung it after
                                    we
                                    have just had the hassle of moving. Hire us to do a complete top to bottom clean of your
                                    new
                                    house or apartment!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('bathroom_plumbing') }}">
                                <div class="top-holder">
                                    <div class="img-holder lozad">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/service_4.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Bathroom Plumbing
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    After we have packed up all our boxes, we are often too tired to clean the whole
                                    apartment
                                    before we move. That's why you should call us to do a complete and thorough clean of
                                    your
                                    old home to ensure no bills come in the mail from the landlord!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('hydro_jetting') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/service_5.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Hydro Jetting
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our apartments are the center of our lives, but sometimes life is too busy for us to
                                    spend
                                    time cleaning it! Our services do the heavy lifting for you so you can keep on living
                                    life
                                    without worrying about cleaning!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('water_heaters') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            alt="green carpet cleaner service"
                                            data-src="{{ asset('assets/resize/water_heater.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Water Heaters
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('sewer_repair') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/service_7.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Sewer Repair
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('leak_detection') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/service_8.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Leak Detection
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Our furry friends sometimes make accidents on our clean upholstery and carpet.
                                    Our pet odor
                                    removal and pet stain cleaning services in NYC remove those stains and smells
                                    safetly and
                                    effectively!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('sump_pump') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/sump_dump.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Sump Pump Services
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Car owners can spend hours every day in their vehicles, and
                                    slowly the car’s interior being its seats, trunk, carpets,
                                    mats, and even headliner gather dirt, odors, bacteria, and
                                    stains. Getting your car cleaned by an interior auto
                                    detailer will make your driving experience more hygienic,
                                    and guests will not feel uncomfortable with the dirty
                                    upholstery!
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 item">
                            <a class="d-flex flex-column gap-2 text-center" href="{{ route('water_main') }}">
                                <div class="top-holder">
                                    <div class="img-holder">
                                        <img class="img img-fluid lazy rounded-3 lozad" width="295" height="295"
                                            data-src="{{ asset('assets/resize/water_main.jpg') }}" />
                                    </div>
                                </div>
                                <h4 class="heading fw-bold fs-3 fs-md-5 lh-1-3 lh-md-auto text-green-1">
                                    Water Main Services
                                </h4>
                                <p class="paragraph text-lightgray text-ellipsis-3">
                                    Keeping the office clean and hygienic is essential for a productive work
                                    environment. Having
                                    a professional upholstery steam cleaner and rug shampooer regularly maintain
                                    your office’s
                                    fabric and leather furniture and carpets will ensure a safe and clean work
                                    environment with
                                    happy employees!
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- services section ends here --}}







    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')



    @include('app.static_components.callback_form_submit')

    @include('app.static_components.callus_banner')
@endsection
