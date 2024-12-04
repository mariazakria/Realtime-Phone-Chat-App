@extends('layouts.index')
@section('title')
    Sewer Repair | {{ env('APP_NAME') }}
@endsection


@section('meta')
    <meta name="title" content="Sewer Repair | H2OBros Plumbing">
    <meta name="description"
        content="🔧 Say Goodbye to Sewer Woes! 💪 NYC Commercial Plumbing Pros' Expert Sewer Repair Team is On the Case. Swift Solutions, Lasting Results. Reclaim a Trouble-Free Sewer System Now! 🏗️">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Sewer Repair | H2OBros Plumbing">
    <meta property="og:description"
        content="🔧 Say Goodbye to Sewer Woes! 💪 NYC Commercial Plumbing Pros' Expert Sewer Repair Team is On the Case. Swift Solutions, Lasting Results. Reclaim a Trouble-Free Sewer System Now! 🏗️">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/new/service_7.jpg')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Sewer Repair  | H2OBros Plumbing ">
    <meta name="twitter:description"  content="🔧 Say Goodbye to Sewer Woes! 💪 NYC Commercial Plumbing Pros' Expert Sewer Repair Team is On the Case. Swift Solutions, Lasting Results. Reclaim a Trouble-Free Sewer System Now! 🏗️">
    <meta name="twitter:image" content="{{asset('assets/new/service_7.jpg')}}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta itemprop="name" content="H2OBros Plumbing">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{asset('assets/new/service_7.jpg')}}">
    <meta itemprop="image" content="{{asset('assets/new/service_7.jpg')}}">
    <link rel="image_src" href="{{asset('assets/new/service_7.jpg')}}">
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

@section('content')
    <!-- main section -->
    <main class="position-relative">
        <!-- bg-img -->
        <picture class="lozad">
            <source media="(max-width: 878px)"
                srcset="{{ asset('assets/new/service_7.jpg') }}">
            <source media="(min-width: 878px)"
                srcset="{{ asset('assets/new/service_7.jpg') }}">
            <img class="service-bannner-img h-img-600"
                src="{{ asset('assets/new/service_7.jpg') }}"
                alt="cough cleaning">
        </picture>
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100 pb-120">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green">Sewer Repair</h1>
                <h3 class="tex-white text-center text-lg-start">
                    Get your professionally Sewer Repair in NYC!
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

            <h1 class="text-center text-green fs-1 py-5 text-uppercase">Sewer Repair</h1>



            <p><strong>
                    Sewers often tend to get clogged and stuck leading to the spreading of foul odors
                    and flooding. We need to clean sewer drains in order to avoid this issue. We at H2O
                    Bros Plumbing offer all kinds of services to clear your clogged sewer such as:
                </strong></p>
            <p class="fs-3"><strong>Sewer Line Inspection</strong></p>
            <p>A clogged sewer calls for a thorough sewer inspection by an expert. You can try
                clearing out the clogged sewer line yourself through d-i-y solutions such as sewer
                snaking. We will check out the problem and offer the most effective and affordable
                solution for your sewer line repair.</p>

            <p class="fs-3"><strong>Sewer Line Leak Detection</strong></p>
            <p>Attention all property owners! If you want to keep your home or business running
                smoothly, it&#39;s essential to invest in sewer line inspections and sewer line leak
                detection services. These services help prevent water waste and reduce utility bills,
                also, regular maintenance can increase the value of your property! To fix your sewer
                line problems we offer you services like sewer line replacement, sewer line cleanout
                and sewer pipe repair.</p>
            <p class="fs-3"><strong>Trenchless Sewer Line Repair</strong></p>
            <p>Traditional sewer line repair involves digging a trench to access the pipe, which can
                be disruptive to your yard and landscaping. trenchless plumbing services are much
                less invasive. These sewer lines as strong as they are may also need maintenance.
                For this, we offer trenchless sewer repair services. We offer trenchless sewer
                plumbing services like trenchless pipe replacement, trenchless sewer replacement,
                trenchless pipe relining, trenchless sewer line, trenchless piping, trenchless drain
                repair, trenchless sewer pipe replacement.
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
