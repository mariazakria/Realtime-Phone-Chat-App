@extends('layouts.index')


@section('title')
    About Us | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="About Us | H2OBros Plumbing">
    <meta name="description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="About Us | H2OBros Plumbing">
    <meta property="og:description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/images/home_page.webp')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="About Us  | H2OBros Plumbing ">
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
    <!-- About us banner section -->
    <section class="position-relative">
        <img class="w-100 lozad" height="112"
        alt="about us"
            data-src="{{ asset('assets/images/carpet-cleaning-services--Queens-11105-PristineGreen-Upholstery-and-Carpet-Cleaning-rug-cleaner--NY1.webp') }}" />
        <div class="position-absolute w-100 h-100 top-0 d-flex justify-center align-items-center">
            <h2 class="fs-1 font-median text-green-1 p-0 mb-1">About Us</h2>
        </div>
    </section>
    <!-- About us page section -->
    <section>
        <div class="container py-5 text-lightgray  content-container">
            <h2 class="text-blue text-center py-5">
                Experts in Plumbing Services
            </h2>
            <br>
            <br>
            <h3>
                Our Commitment
            </h3>
            <p>
                At H2Obros Plumbing Services, we are committed to excellence in every faucet we fix and pipe we install. Our mission is to ensure that your plumbing systems run seamlessly, keeping your home or business flowing with efficiency.
            </p>
            <br>
            <br>
            <h3>
                Why Choose H2Obros Plumbing Services?
            </h3>
            <br>
            <h4>1. Experience and Expertise</h4>
            <p>
                With years of experience under our tool belts, our team of plumbing experts is well-versed in handling a diverse range of plumbing projects. From minor repairs to complex installations, we bring unmatched expertise to the table.
            </p>
            <br>
            <h4>
                2. Customer-Centric Approach
            </h4>
            <p>
                Customer satisfaction is our priority. We believe in transparency, timely communication, and a personalized approach to address your plumbing concerns effectively. We listen to your needs and provide solutions that align with your budget and expectations.
            </p>
            <br>
            <h4>
                3. Reliable and Timely Service
            </h4>
            
            <p>
                Plumbing emergencies can strike at any moment. That's why we offer 24/7 emergency plumbing services to ensure that you're covered around the clock. Your peace of mind matters to us, and we're always just a call away.
            </p>
            <br>
            <h4>4. Quality Workmanship</h4>
            <p>
                Our dedicated team uses top-quality materials and the latest plumbing techniques to deliver lasting and reliable results. We stand by the quality of our work, aiming for long-term solutions that keep your plumbing systems in optimal condition.
            </p>
            <br>
            <br>
            <h3>Services We Offer</h3>
            <ul class="ms-3 ms-lg-5">
                <li>
                    24 Hours Plumber Services
                </li>
                <li>
                    Commercial Plumbing
                </li>
                <li>
                    Drain Cleaning
                </li>
                <li>
                    Bathroom Plumbing
                </li>
                <li>
                    Hydro Jetting
                </li>
                <li>
                    Water Heaters
                </li>
                <li>
                    Sewer Repair
                </li>
                <li>
                    Leak Detection
                </li>
                <li>
                    Sump Pump Services
                </li>
                <li>
                    Water Main Services
                </li>
            </ul>
            <br>
            <br>
            <h3>Contact Us</h3>
            <p>
                Ready to experience plumbing excellence? Reach out to the H2Obros Plumbing Services team today. Let's tackle your plumbing needs together and keep your space flowing smoothly!
            </p>
            <br>
            <p>
                <a href="{{route('contact_us')}}">
                    Contact Us
                </a>
                 to get started on your plumbing journey with the H2Obros!</p>
        </div>
    </section>

    @include('app.static_components.callus_banner')
@endsection
