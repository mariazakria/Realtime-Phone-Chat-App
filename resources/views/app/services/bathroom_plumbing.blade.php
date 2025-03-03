@extends('layouts.index')
@section('title')
    Bathroom Plumbing | {{ env('APP_NAME') }}
@endsection



@section('meta')
    <meta name="title" content="Bathroom Plumbing | H2OBros Plumbing">
    <meta name="description"
        content="🚿 Elevate Your Space with Premium Bathroom Plumbing in NYC! 💎 Expert Upgrades, Rapid Repairs & Stylish Installations. Dive into Luxury with NYC Commercial Plumbing Pros Today! 🛁">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Bathroom Plumbing | H2OBros Plumbing">
    <meta property="og:description"
        content="🚿 Elevate Your Space with Premium Bathroom Plumbing in NYC! 💎 Expert Upgrades, Rapid Repairs & Stylish Installations. Dive into Luxury with NYC Commercial Plumbing Pros Today! 🛁">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/new/service_4.jpg')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Bathroom Plumbing  | H2OBros Plumbing ">
    <meta name="twitter:description"  content="🚿 Elevate Your Space with Premium Bathroom Plumbing in NYC! 💎 Expert Upgrades, Rapid Repairs & Stylish Installations. Dive into Luxury with NYC Commercial Plumbing Pros Today! 🛁">
    <meta name="twitter:image" content="{{asset('assets/new/service_4.jpg')}}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta itemprop="name" content="H2OBros Plumbing">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{asset('assets/new/service_4.jpg')}}">
    <meta itemprop="image" content="{{asset('assets/new/service_4.jpg')}}">
    <link rel="image_src" href="{{asset('assets/new/service_4.jpg')}}">
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




@section('schema')
    {{-- <script type="application/ld+json">
        {!! file_get_contents('pet-faqs.json') !!}
    </script> --}}
@endsection



@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/new/service_4.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/new/service_4.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/new/service_4.jpg') }}"
                alt="Pet Stains and Odor cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Bathroom Plumbing</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Top-rated Bathroom Plumbing service in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>


    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section id="main-content-cleaning" class="py-7 main-content-cleaning-service">
        <div class="container py-5 main-content-section text-lightgray">



            <h1 class="text-center text-green fs-1 py-5 text-uppercase">Bathroom Plumbing</h1>

            <p> <strong>
                    Thinking about upgrading your bathroom with a new bathtub, sink, or toilet? Or are
                    you concerned about a leaking roof, slab leak, dripping faucet, or leaking pipe?
                    You can trust our experienced team at H2OBros Plumbing. We offer all kinds of
                    bathroom plumbing services such as drain cleaning, sewer cleaning, toilet
                    installation, leak detection, clog removal, hydro jetting, and roof leak repair.
                </strong>
            </p>

            <h2 class="fs-3">Bathroom Fixture Installation</h2>
            <p>When it comes to installation and repairs, we are the best there is. Be it replacing
                shower faucets, recessed light installation, bathtub leaking faucet, hanging a ceiling
                light, or toilet installation, we have done it all. Give us a ring and we’ll have the best
                of our team at your place in no time.</p>

            <h2 class="fs-3">Plumbing Repair</h2>
            <p>A bathroom leak, leaking roof, slab leak, dripping faucet, or leaking pipe can cause
                major damage to your home if it is not dealth with right away. Water can seep into
                the walls and floor, causing mold and mildew to grow, causing respiratory problems
                and other adverse health conditions. Therefore, a bathroom leak repair is essential
                to prevent further damage to your home. For this, we at H2OBros Plumbing offer
                services such as fixture repair, fixture replacement, replacing bathtub faucets,
                changing light fixtures, bathtub faucet repair, light fixture repair, etc.</p>



        </div>

    </section>


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')


    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')




    <!-- Slider -->
    {{-- <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Pet Stains and Odor cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-nyc-New-York-best-carpet-steam-cleaner-PristineGreen-Upholstery-and-Carpet-Cleaning-10010.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/11105-carpet-cleaner-nyc-NY-rug-cleaner-nyc-PristineGreen-Upholstery-and-Carpet-Cleaning-Queens.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/Queens%20Carpet%20Cleaner%20Service%20PristineGreen%20Upholstery%20and%20Carpet%20Cleaning%2011105%20residential%20carpet%20cleaning.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.webp') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/PristineGreen-Upholstery-and-Carpet-Cleaning-10010-NY.webp') }}"
                                style>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="w-100 h-100 position-absolute top-0 d-flex justify-content-between px-2 px-sm-4 align-items-center">
                <div id="swiper-button-prev" class="swiper-button-prev trusted-swiper-btn-prev"></div>
                <div id="swiper-button-next" class="swiper-button-next trusted-swiper-btn-prev"></div>
            </div>
        </div>

    </section> --}}



    <!-- what serivces you need section -->
    @include('app.static_components.callback_form_submit')
    {{-- @include('app.static_components.faq-section') --}}
    @include('app.static_components.callus_banner')
@endsection
