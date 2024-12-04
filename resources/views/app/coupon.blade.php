@extends('layouts.index')
@section('title')
    Get A Copon | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content=" Contact Us | Maidbrite Cleaning Services">
    <meta name="description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company, quote, quote now, request a quote, contact form, contact us">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services">
    <meta property="og:title" content=" Contact Us  | Maidbrite Cleaning Services">
    <meta property="og:description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Maidbrite Cleaning Services House and Commercial Cleaning in NYC  | Maidbrite Cleaning Services ">
    <meta name="twitter:description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="twitter:image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="Maidbrite Cleaning Services">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <meta itemprop="image" content="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">
    <link rel="image_src" href="{{ asset('assets/images/geo/11206-NY-Brooklyn-Maidbrite-Cleaning-Services-Cleaning-Lady-cleaning-services-near-me-near-me.jpg') }}">



    <meta name="abstract" content="Maidbrite Cleaning Services House and Commercial Cleaning in NYC">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="MaidBrite Cleaning Services">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="Maidbrite Cleaning Services">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">
@endsection

@section('content')
    <!-- get a qutoe section -->
    <section class="position-relative">
        <!-- bg-img -->
        <img class="img lazy lozad" data-src="{{ asset('assets/images/carpet-cleaner-service-free-quote.webp') }}"
            width="100%" height="590" style="height: 560px !important" />
        <div class="py-4 px-3 p-md-4 px-lg-5 position-absolute bottom-0 w-100 h-100 d-flex item-center justify-center">
            <div class="d-flex flex-col gap-4 rounded-3 h-100 py-4 bg-black col-12 col-sm-10 coupons-container"
                style="--bs-bg-opacity: 0.5">
                <div class="mx-auto w-100">
                    <p class="text-center text-white fs-1 p-0">
                        Carpet Cleaning Coupons
                    </p>
                    <p class="tex-white px-1 py-0 fs-6 text-center">
                        NYC's most trusted and recommended carpet cleaming service!
                    </p>
                    <!-- coupons lists -->
                    <ul class="row flex w-100 coupons-lists tex-white gap-4 flex-grow justify-content-center">
                        <li class="col-md-auto p-3 text-center">
                            <h4>FREE Carpet Deodorizing</h4>
                            <p>With Carpet Cleaning 2 rooms or 250 sq ft.</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>15% OFF</h4>
                            <p>Carpet Cleaning minimum of 2000 sq. ft.</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>FREE</h4>
                            <p>1 Room Clean With 4 Rooms Cleaning $99 minimum order</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>20% OFF</h4>
                            <p>
                                Commercial Cleaning Carpet, Rug, Upholstery $180 minimum order
                            </p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>10% OFF</h4>
                            <p>Upholstery Cleaning $85 minimum order</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>15% OFF</h4>
                            <p>Pet Odor Control</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>15% OFF</h4>
                            <p>Mold & Mildew Treatment $200 minimum order</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>10% OFF</h4>
                            <p>Area & Oriental Rug Cleaning $85 minimum order</p>
                        </li>
                        <li class="col-md-auto p-3 text-center">
                            <h4>15% OFF</h4>
                            <p>Tile & Grout Cleaning $200 minimum order</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
