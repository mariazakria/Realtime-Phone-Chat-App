@extends('layouts.index')
@section('title')
    Free Quote Now | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="Free Quote Now | H2OBros Plumbing">
    <meta name="description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Free Quote Now | H2OBros Plumbing">
    <meta property="og:description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/images/home_page.webp')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Free Quote Now  | H2OBros Plumbing ">
    <meta name="twitter:description"  content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta name="twitter:image" content="{{asset('assets/images/home_page.webp')}}">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="summary">
    <meta itemprop="name" content="H2OBros Plumbing">
    <meta itemprop="url" content="{{ url()->current() }}">
    <meta itemprop="thumbnailUrl" content="{{asset('assets/images/home_page.webp')}}">
    <meta itemprop="image" content="{{asset('assets/images/home_page.webp')}}">
    <link rel="image_src" href="{{asset('assets/images/home_page.webp')}}">
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
    <!-- get a qutoe section -->
    <section class="position-relative">
        <!-- bg-img -->
        <img class="img lazy lozad"
        alt="request quote"
            data-src="{{ asset('assets/images/water-drains-down-a-stainless-steel-sink-2023-03-14-01-50-05-utc.jpg') }}"
            width="100%" height="590"
            style="height: 560px !important;
                    background-size: cover;
                    display: flex;
                    max-width: 100%;
                    border-radius: 10px;
                    object-fit: cover;" />
        <div class="py-4 px-3 p-md-4 px-lg-5 position-absolute bottom-0 w-100 h-100 d-flex item-center justify-center">
            <div class="d-flex flex-col gap-4 rounded-3 h-100 py-4 bg-black col-12 col-sm-10 col-md-8"
                style="--bs-bg-opacity: 0.4">
                <div class="mx-auto">
                    <p class="text-center text-white fs-1 p-0">Get a Quote!</p>
                    <p class="tex-white px-1 py-0 fs-6 text-center">
                        NYC's most trusted and recommended commercial Plumbing service!
                    </p>
                    <form action="{{ route('free-quote') }}" method="POST"
                        class="d-flex flex-column gap-4 gap-md-3 px-4 row">
                        @csrf
                        <input class="col-12 p-2 outline-none rounded-1" type="text" name="name" id=""
                            style="outline: none !important" placeholder="Name" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="email" name="email" id=""
                            style="outline: none !important" placeholder="Email" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="text" name="phone" id=""
                            style="outline: none !important" placeholder="Phone Number" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="text" name="zip"
                            id="" style="outline: none !important" placeholder="Zipcode" />
                        <input class="col-12 p-2 p-2 outline-none rounded-1" type="text" name="describe"
                            id="" style="outline: none !important" placeholder="What do you need cleaned?" />
                        <button class="my-2 col-sm-8 col-xl-5 tex-white mx-auto py-2 btn-lightgreen fs-5 rounded-1">
                            Free Quote Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
