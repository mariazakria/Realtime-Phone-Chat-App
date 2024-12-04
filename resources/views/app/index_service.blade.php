@extends('layouts.index')

@section('title')
    Service Areas | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content=" Services | Maidbrite Cleaning Services">
    <meta name="description"
        content="Reach out to Maidbrite Cleaning Services for all your house cleaning services, sanitization needs, and commercial cleaning. We're here to help you keep your space pristine!">
    <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company, quote, quote now, request a quote, contact form, Services">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Maidbrite Cleaning Services">
    <meta property="og:title" content=" Services  | Maidbrite Cleaning Services">
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
        input:focus {
            outline: none;

        }

        @media screen and (max-width:765px) {
            .fs-max-md-6 {
                font-size: 16px !important;
            }
        }
    </style>
@endsection

@section('content')
    <!-- offer service section -->
    <section class="bg-lightgray">
        <div class="container py-5">
            <div>
                <p class="text-green-1 fs-2 text-center">
                    View Where We Serve Our Clients!
                </p>
            </div>
            <div class="d-flex flex-col gap-5">
                <div class="rounded-4 border-lightgreen overflow-hidden">
                    <div
                        class="bg-lightgreen tex-white px-3 px-md-5 py-2 fs-5 fs-max-md-6 font-median d-flex align-items-center justify-content-between">
                        <span>Our Branches</span>
                    </div>
                    <div class="row p-4 p-md-4 gap-3 gap-lg-0 service-area-links">
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('gramercy_manhattan') }}"> Gramercy, Manhattan NYC</a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('astoria_queens') }}"> Astoria Queens NYC</a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('ues_manhattan') }}"> Upper East Side, Manhattan</a>
                        </div>
                        <div class="col-12 col-md-5 col-lg-3">
                            <a href="{{ route('ridgewood_queens') }}"> Ridgewood Queens NYC</a>
                        </div>
                    </div>
                </div>

                <div class="rounded-4 border-lightgreen overflow-hidden">
                    <div
                        class="bg-lightgreen tex-white px-3 px-md-5 py-2 fs-5 fs-max-md-6 font-median d-flex align-items-center justify-content-between">
                        <span>Service Areas in NYC</span>
                        <input id="search_area" type="text" placeholder="Search Areas..."
                            class="border bg-lightgray-1 px-2 col-7 col-md-6 col-lg-4 py-1 rounded-2 text-lightgray">
                    </div>
                    <div class="row p-4 p-md-4 gap-3 gap-lg-0 service-area-links" id="tar_ele">

                        @foreach ($data as $location)
                            <div class="col-12 col-md-5 col-lg-3">
                                <a title="{{ $location->title }}" href="{{ $location->href }}">
                                    {{ $location->content }}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




@section('js')
    <script type="text/javascript">
        function searchAndHide(searchText) {
            const elements = Array.from(document.querySelectorAll(
                '#tar_ele a')); // Assuming the list items are <a> elements

            for (let i = 0; i < elements.length; i++) {
                const element = elements[i];
                const innerText = element.innerText.trim().toLowerCase();

                if (innerText.includes(searchText.toLowerCase())) {
                    // Match found, show the element
                    element.style.display = 'block';
                } else {
                    // No match found, hide the element
                    element.style.display = 'none';
                }
            }
        }

        $(document).ready(function() {
            $("#search_area").on("keyup", function() {
                const searchText = this.value.trim();
                searchAndHide(searchText);
            })
        })
    </script>
@endsection
