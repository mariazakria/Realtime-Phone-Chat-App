@extends('layouts.index')
@section('title')
    Water Main Services | {{ env('APP_NAME') }}
@endsection


@section('meta')
    <meta name="title" content="Water Main Services | H2OBros Plumbing">
    <meta name="description"
        content="💧 Fortify Your Foundation: NYC Commercial Plumbing Pros' Water Main Services! 🛡️ Uninterrupted Flow, Superior Repairs, and Expert Installations. Your Business Deserves the Best Water Management. Secure It Now! 🚰">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Water Main Services | H2OBros Plumbing">
    <meta property="og:description"
        content="💧 Fortify Your Foundation: NYC Commercial Plumbing Pros' Water Main Services! 🛡️ Uninterrupted Flow, Superior Repairs, and Expert Installations. Your Business Deserves the Best Water Management. Secure It Now! 🚰">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/new/water_main.jpg')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Water Main Services  | H2OBros Plumbing ">
    <meta name="twitter:description"  content="💧 Fortify Your Foundation: NYC Commercial Plumbing Pros' Water Main Services! 🛡️ Uninterrupted Flow, Superior Repairs, and Expert Installations. Your Business Deserves the Best Water Management. Secure It Now! 🚰">
    <meta name="twitter:image" content="{{asset('assets/new/water_main.jpg')}}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta itemprop="name" content="H2OBros Plumbing">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{asset('assets/new/water_main.jpg')}}">
    <meta itemprop="image" content="{{asset('assets/new/water_main.jpg')}}">
    <link rel="image_src" href="{{asset('assets/new/water_main.jpg')}}">
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


@section('content')
    <!-- main section -->

    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/new/water_main.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/new/water_main.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/new/water_main.jpg') }}"
                alt="Area Rug cleaning">
        </picture>


        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Water Main Services</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Get professional Water Main services in NYC
                </h3>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>

    <!-- review banner section  -->
    {{-- @include('app.static_components.review_banner') --}}

    <!-- main content section  -->
    <section class="">
        <div class="container py-5 main-content-section text-lightgray">

            <h1 class="text-center text-green fs-1 py-5 text-uppercase">Water Main Services</h1>


            <p><strong>
                    Your business&#39;s water line is a crucial component of your plumbing system,
                    responsible for distributing and maintaining your water supply. Factors such as time,
                    corrosion, extreme weather, or exposure to certain substances can cause water
                    main problems, leading to frozen pipes, leaking pipes, burst pipes, and potential
                    flooding. Don&#39;t worry - at H2OBros Plumbing, our expert plumbers are here to help.
                    We&#39;ll assess your water main issues and determine whether repair or replacement is
                    needed to ensure an uninterrupted water supply.
                </strong></p>
            <p class="fs-3"><strong>Water Line Repair</strong></p>
            <p>Water lines in homes or businesses can develop leaking pipes, mineral deposits, or
                corroded pipes over time, requiring the replacement of the entire line. These issues
                like burst pipes, pipes freezing, and low water pressure may require water line repair
                or water line replacement depending on the situation. At H2OBros Plumbing, we
                have the expertise to assess your water line issues and determine the best solution
                for your needs. Contact us if you notice any symptoms.</p>

            <p class="fs-3"><strong>Emergency Plumbing Repair</strong></p>
            <p>We understand that some issues will need to be dealt with promptly, which is why we
                offer fast and reliable service that minimizes disruptions. Don’t just go with the first
                search result for “24 hour plumber near me” or “emergency plumber near me”. With
                years of experience in the water line plumbing industry, we are the top choice for any
                water line issues that you face. With our 24 hour plumber service, you can have a
                plumber at your place within the hour! Contact us today to schedule an appointment!</p>

        </div>
    </section>


    <!-- Callback section -->
    @include('app.static_components.callback_form_banner')

    {{-- offer-serivces section --}}
    @include('app.static_components.we_offer')



    {{-- <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue pt-4">Check out our Area Rug cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/11385-carpet-cleaner-brooklyn-NY-Queens-rug-cleaner-brooklyn-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/Area-Rug-Cleaning-PristineGreen-Upholstery-and-Carpet-Cleaning-11105-NY.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/carpet-cleaner-nyc-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-10010-New-York-professional-house-cleaning-services-New-York-move-out-cleaning-PristineGreen-House-Cleaning-UES-Branch-NY-10021.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/carpet-cleaner-service-rug-cleaning-NYC-10010-NY-PristineGreen-Upholstery-and-Carpet-Cleaning-New-York.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/area-rug-cleaning/carpet-cleaning-NYC-Queens-NY-11385-carpet-cleaner-service-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
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
