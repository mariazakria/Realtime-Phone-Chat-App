@extends('layouts.index')


@section('title')
    {{ $service_area->header }}
@endsection

@section('meta')
    <meta name="title" content=" Service Area | Maidbrite Cleaning Services">
    <meta name="description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company, quote, quote now, request a quote, contact form, Service Area">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services">
    <meta property="og:title" content=" Service Area  | Maidbrite Cleaning Services">
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


@section('css')
    <style>
        /* CSS styling for the map container */
        #map {
            height: 450px;
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <!-- main section -->

    <main class="position-relative">
        <!-- bg-img -->
        <img class="img lazy lozad serivce-area-imgs"
            data-src="{{ Storage::disk('public')->url('service-locations/' . $service_area->link) }}" width="100%"
            height="590" />
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end h-100 px-lg-5">
                <h1 class="text-green service-area-heading">
                    {{ $service_area->header }} <br />
                    <span class="text-skyblue">Carpet Cleaning</span>
                </h1>

                <div class="d-flex flex-column mx-auto mx-md-0 w-100 tex-white" id="bulletPoints">
                    <p class="p-0">{{ $service_area->name }} Carpet Cleaners</p>
                    <p class="p-0">Green and Non-Toxic Cleaning</p>
                    <p class="p-0">Only 5 Star Reviews</p>
                    <p class="p-0">Same Day Service</p>
                </div>
                <!-- Book now seciton -->
                <form action="{{ route('callback_number') }}" method="POST"
                    class="row gap-3 p-3 p-sm-0 col-md-8 col-xl-6 my-2 ">
                    @csrf
                    <input type="text" id="phone-input" name="phone" class="py-3 rounded-2 col-12 col-md-8 ele1" />
                    <button class="py-3 rounded-2  col-12 col-md-3 bg-lightgreen text-white">BOOK NOW</button>
                </form>
            </div>
        </div>
    </main>

    <!-- main content section  -->
    @include('app.static_components.review_banner')
    <section>
        <div class="container py-5 main-content-section-container text-lightgray">
            <h3 class="text-center text-green fs-1 py-2">{{ $service_area->name }}</h3>
            {!! $service_area->description !!}
            <p class="fs-5">
                We also have other business locations serving the rest of NYC at these
                locations
            </p>
            <p>
                <a href="/service-areas/business-locations/gramercy-manhattan/">Gramercy, Manhattan</a><br />
                <a href="/service-areas/business-locations/ues-manhattan/">Upper East Side, Manhattan</a><br />
                <a href="/service-areas/business-locations/astoria-queens/">Astoria, Queens</a><br />
                <a href="/service-areas/business-locations/ridgewood-queens/">Ridgewood, Queens</a>
            </p>
        </div>
    </section>

    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')
    @include('app.static_components.trusted_by')

    <!-- map address section -->
    <section>
        <div class="container-fuild flex flex-column-reverse flex-md-row">
            <div
                class="bg-lightgray-1 col-md-5 col-xl-4 p-4 p-lg--5 d-flex flex-col item-center text-center justify-center">
                <h4 class="text-lightgray">
                    MaidBrite Cleaning Services
                </h4>
                <p class="text-lightgray">
                    115 E 23rd St 3rd floor<br />
                    New York, NY 10010<br />
                    <a class="text-lightgray" href="tel:%28347%29%20871-6530">(347) 871-6530</a><br />
                    <a class="text-lightgray"
                        href="mailto:sales@maidbritecleaners.com">sales@maidbritecleaners.com</a>
                </p>
            </div>
            <div class="col">
                {{-- <img class="lazy img-fluid lozad" alt="Google Map" width="1260" height="450" style="height: 450px"
                    data-src="https://maidbritecleaners.com/assets/images/map/map-gramercy.webp" /> --}}
                <div id="map"></div>
            </div>
        </div>
    </section>

    <!-- offering services section -->

    <!-- Company info section -->
    @include('app.static_components.companyinfo_banner')

    <!-- call us section -->
    @include('app.static_components.callus_banner')
@endsection

@section('js')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB_zev3AUlvTv9UGwZGPnUCSnM1aMsPLo"></script>
    <script type="text/javascript">
        function initMap() {
            // Specify the center location as an address, dynamically applicable
            var centerLocation = "115 E 23rd St 3rd floor, New York, NY 10010";

            // Create a geocoder object
            var geocoder = new google.maps.Geocoder();

            // Convert the center location to coordinates
            geocoder.geocode({
                address: centerLocation
            }, function(results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    // Retrieve the first result's geometry (location)
                    var location = results[0].geometry.location;

                    // Create a map object
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: location,
                        zoom: 18
                    });

                    // Create a marker for the location
                    var locationMarker = new google.maps.Marker({
                        position: location,
                        map: map,
                        title: centerLocation
                    });
                    // Create an info window
                    var infoWindow = new google.maps.InfoWindow({
                        content: "MaidBrite Cleaning Services"
                    });

                    // Add click event listener to open the info window
                    locationMarker.addListener('click', function() {
                        infoWindow.open(map, locationMarker);
                    });
                } else {
                    // Geocoding was not successful
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
        }

        // Load the map after the Google Maps API is loaded
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
@endsection
