@extends('layouts.index')
@section('title')
    Leak Detection | {{ env('APP_NAME') }}
@endsection



@section('meta')
    <meta name="title" content="Leak Detection | H2OBros Plumbing">
    <meta name="description"
        content="🔍 Detect Leaks Before They Drown You! 🚫 Don't Let Water Woes Worsen. NYC Commercial Plumbing Pros' Leak Detection Masters Safeguard Your Space. Spot, Seal, and Secure. Don't Miss a Drip! 💧">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Leak Detection | H2OBros Plumbing">
    <meta property="og:description"
        content="🔍 Detect Leaks Before They Drown You! 🚫 Don't Let Water Woes Worsen. NYC Commercial Plumbing Pros' Leak Detection Masters Safeguard Your Space. Spot, Seal, and Secure. Don't Miss a Drip! 💧">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/new/service_8.jpg')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Leak Detection  | H2OBros Plumbing ">
    <meta name="twitter:description"  content="🔍 Detect Leaks Before They Drown You! 🚫 Don't Let Water Woes Worsen. NYC Commercial Plumbing Pros' Leak Detection Masters Safeguard Your Space. Spot, Seal, and Secure. Don't Miss a Drip! 💧">
    <meta name="twitter:image" content="{{asset('assets/new/service_8.jpg')}}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta itemprop="name" content="H2OBros Plumbing">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{asset('assets/new/service_8.jpg')}}">
    <meta itemprop="image" content="{{asset('assets/new/service_8.jpg')}}">
    <link rel="image_src" href="{{asset('assets/new/service_8.jpg')}}">
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
        {!! file_get_contents('couch-faqs.json') !!}
    </script> --}}
@endsection

@section('meta')
@endsection
@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/new/service_8.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/new/service_8.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/new/service_8.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Leak Detection</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Trusted and recommended Leak Detection service in NYC
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

            <h1 class="text-center text-green fs-1 py-5 text-uppercase">Leak Detection</h1>


            <p><strong>
                    Have you ever experienced a sudden increase in your water bill or noticed damp
                    spots on your walls or ceiling? You might have a water leak problem! It&#39;s a common
                    plumbing issue that needs immediate attention before it may lead to more significant
                    and expensive problems. Water leaks can be anywhere, it could be a slab leak,
                    leaking toilet, water leaking from a ceiling, ceiling leak, or simply a leaking pipe
                    Ignoring a water leak can cause structural damage, and mold growth, and pose a
                    serious health risk.
                </strong></p>
            <p class="fs-3"><strong>Water Leak Detection</strong></p>
            <p>Water leak detection is the key to solving this issue, and it involves finding and fixing
                the leaks within your plumbing system. Luckily, our team of qualified plumbers is
                trained and experienced in locating even the trickiest leaks be it a water heater
                leaking, toilet leaking at base, leaky faucet, toilet leaking from tank, leaky bathtub
                faucet, or a slab leak. We use specialized leak detection equipment such as acoustic
                sensors and high-definition cameras to pinpoint the exact location of the leak without
                causing any damage to your property.</p>

            <p class="fs-3"><strong>Water Leak Symptoms</strong></p>
            <p>A water leak can be identified with the help of several symptoms such as a sudden
                spike in water bill, ceiling sagging or warped floors, discolored ceiling, bumpy paint
                or bumpy wallpaper, sound of running water despite no taps in use, water meter
                continues to run when no faucets are on, Mold or musty odors in certain areas of
                your home. If any of these symptoms tend to be present in your home, give our
                experts at H2OBros Plumbing a ring.</p>
            <p class="fs-3"><strong>Emergency Leak Detection</strong></p>
            <p>Noticing symptoms that need to be taken care of urgently? Don’t be quick to search
                the web for “24 hour plumbers” or “plumbers near me”. Call us and we’ll have our
                emergency plumbers at your door in no time. We also offer services such as drain
                cleaning, sewer cleaning, hydro jetting, water heater repair and installation, sump
                pump services, etc.
            </p>

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
            <p class="fs-1 text-blue pt-4">Check out our Couch cleaning work</p>
        </div>
        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/1608aedb622de4.jpg') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="MSocial" height="420"
                                width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/10010-NY-sofa-cleaning-NYC-New-York-couch-cleaner-NYC-PristineGreen-Upholstery-and-Carpet-Cleaning-min.webp') }}"
                                style>

                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Green and non-toxic carpet cleaning services" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11105 couch cleaner nyc NY PristineGreen Upholstery and Carpet Cleaning Queens sofa cleaning nyc.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Office carpet cleaning" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11105-couch-cleaner-nyc-deep-clean-microfiber-couch-Queens-NY-PristineGreen-Upholstery-and-Carpet-Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper">
                            <img class=" lazy lozad service-slider-imgs rounded-2" alt="Office carpet cleaning"
                                width="420" height="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/11385 NY PristineGreen Upholstery and Carpet Cleaning Queens stanley steemer prices for couch cleaning sofa cleaning nyc.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/carpet cleaner NYC upholstery cleaning Brooklyn Queens NY 11385 PristineGreen Upholstery and Carpet Cleaning.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/carpet cleaning service PristineGreen Upholstery and Carpet Cleaning coronavirus steam cleaning prevention 10010 NY New York.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/Couch Cleaning Companies.jpg') }}"
                                style>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide-inner border-0">
                        <div class="slide-content-wrapper"><img class=" lazy lozad service-slider-imgs rounded-2"
                                alt="Hotel Belleclaire" height="420" width="420"
                                data-src="{{ Storage::disk('public')->url('gallery/services/couch-cleaning/sofa cleaning nyc Queens professional couch cleaning prices PristineGreen Upholstery and Carpet Cleaning 11105 NY.jpg') }}"
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
