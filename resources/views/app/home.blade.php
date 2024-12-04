@extends('layouts.index')

@section('title')
    Top Commercial Plumbing Service in NYC | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="Top Commercial Plumbing Service in NYC | H2OBros Plumbing">
    <meta name="description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Top Commercial Plumbing Service in NYC | H2OBros Plumbing">
    <meta property="og:description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/images/home_page.webp')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Top Commercial Plumbing Service in NYC  | H2OBros Plumbing ">
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



@section('preload')

@endsection


@section('css')
    <style type="text/css">

    @media(min-width:769px) and (max-width:972px){
        .home-ban-h1{
            font-size: 35px !important;
        }
        .heading-2 .home-ban-h3{
            font-size: 26px !important;
        }

    }
 
        .right-0{
            right: 0;
        }
        /* .muted{
            background-image: url("{{asset('assets/images/volume-mute.svg')}}")
        }
        .unmuted{
            background-image: url("{{asset('assets/images/volume.svg')}}")
        } */
        /* IMAGE RANGE SLIDER STARTS HERE */
        .beforeAfterContainer {
            position: relative;
            width: 100%;
            height: 570px;
            border: 2px solid white;
        }

        .beforeAfterContainer .background-img {
            background-size: cover !important;
        }

        .beforeAfterContainer .img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: 900px 100%;
        }

        /* .beforeAfterContainer .foreground-img {
            background-image: url("{{ asset('assets/images/before-clean.jpg') }}");
            width: 50%;
        } */



        @media screen and (max-width:1332px) {
            .beforeAfterContainer {
                height: 450px;
            }
        }

        @media screen and (max-width:772px) {
            .beforeAfterContainer {
                height: 350px;
            }
        }




        /* for baby section */

        @media screen and (min-width: 765px) {
            .border-right-1 {
                border-right: 1px solid #4873b7 !important;
            }
        }

        @media screen and (max-width: 762px) {

            /* border for baby section */
            .border-sm-b-blue {
                border-bottom: 1px solid #4873b7 !important;
                border-right: none;
            }

            .border-sm-r-blue {
                border-right: 1px solid #4873b7 !important;
            }
        }

        .baby-ac-section {
            border: 1px solid rgb(72, 115, 183, 0.5) !important;
        }

        @media (max-width: 560px) {
            .border-right-1 {
                border-right: none !important;
            }
        }

        .baby-ac-section .nav-tabs .nav-link {
            border: none;
        }





        /* RANGE IMAGE SLIDER ENDS HERE */






        @media(max-width: 1474px) {
            .feature-section-title p {
                font-size: 1.3rem;
            }
        }

        .z-sec {
            z-index: 1;
        }

        .background-img {
            border: none !important;
        }

        .border-blud-for-tabs {
            border: 1px solid #4873b7 !important;
        }
    </style>

    {{-- reivews --}}
    <style>
     


        .aspect-1-1 {
            flex-shrink: 0;
            min-width: 100%;
            min-height: 100%
        }

        .slide-content-wrapper {
            display: inline;
        }

        .tab-content.coupons-container#nav-tabContent {
            max-height: 330px;
        }

        .btn.btn-primary {
            color: white;
            background-color: #ff6920;
            border-color: unset;
        }


        @media(max-width: 490px) {
            .home-ban-h1 {
                font-size: 35px !important;
            }

            .home-ban-h3 {
                font-size: 20px !important;
            }
        }

        .bg-main-h2o{
            background-size: cover;
  background-position: center;
        }

    </style>
@endsection

@section('content')
    <!-- main section -->
    {{-- <div class="banner ">
        <div class="left-half" style="height: 419.9px !important;">
          <!-- heading section -->
          <div class="text-center text-md-start" style="padding-top: 30px;">
              <h1 class=" text-blue home-ban-h1" style="font-family: latobold; font-size: 45px;">
                Premier  
                  <br>
                  Cleaning Services
                  <br>
                  in NYC
              </h1>
              <p class="heading-2 home-ban-h3" style="font-family: latobold; font-size: 30px;">Top Commercial and House Cleaning Near You</p>
          </div>
          <!-- Book now seciton -->
          <form action="{{ route('callback_number') }}" method="POST" class="row gap-3 p-3 p-sm-0 new-gap-1">
              @csrf
              <input type="text"  name="phone" class="phone-input py-3 rounded-2 col-12  col-md-6 col-lg-7 ele1" />
              <button class="py-3 rounded-2  col-12 col-md-3 bg-lightgreen text-white">BOOK NOW</button>
          </form>
        </div>
        <div class="right-half position-relative w-100">
          <video disablePictureInPicture='true' class="lozad Bright-intro-video" autoplay muted loop id="custom-preload"
                  data-poster="{{asset('assets/images/home_page.webp')}}">
       
              Your browser does not support the video tag.
          </video>
          <div id="volume-btn" class="position-absolute right-0 p-3">
            <span class="volume-icon fs-2 muted"></span>
        </div>
        </div>
      </div> --}}

      <main style="height: 568px;
      overflow: hidden;" data-background-image="{{asset('assets/images/home_page.webp')}}" class="lozad position-relative main-home-banner-h-mob bg-main-h2o">
        <!-- bg-img -->
      
        <div class="p-4 p-lg-5 position-absolute bottom-0 w-100 h-100">
            <div class="d-flex flex-col justify-content-end gap-4 h-100 py-4">
                <h1 class="text-green home-main-banner-head fw-bold">
                    <strong>

                        Trusted Plumbing Services
                        <br>
                        in the Heart of NYC
                    </strong>
                </h1>
                <p class="tex-white fs-3">
                    Your Local NYC Plumbers, Always Here to Help
                </p>
                {{-- book now form --}}
                @include('app.static_components.booknow_form')
            </div>
        </div>
    </main>

    <!-- featured banner section-->
    {{-- <section class="feature-section">
        <div class="feature-section-container">
            <div class="feature-section-1 flex item-center">
                <span></span>
                <div class="feature-section-title">
                    <p class="">Featured In</p>
                </div>
                <span></span>
            </div>
            <div class="feature-container-img">
                <img class="lozad" alt="Featured in The new your times" height="112" width="553"
                    data-src="{{ asset('assets/images/nytimes-black.png') }}" style />
            </div>
        </div>
    </section> --}}

    <!-- slider section -->

    <!-- Slider -->
    <section class="slider-section overflow-hidden pt-3 pt-lg-50">
        <!-- services section header -->
        <div class="services-section-header py-4">
            <p class="fs-1 text-blue">What We Do Best</p>
        </div>
        @include('app.sliders.service_slider')
    </section>

    <!-- Services section -->
    <section class="services-section">
        <div class="py-5 p-md-3 p-xl-5 flex flex-col justify-center item-center">
            <!-- services section header -->
            <div class="services-section-header">
                <p>H2OBros Plumbing Services</p>
                <p>
                    Your Trusted Plumbing Services Provider in NYC, Brooklyn, Queens, Bronx, & Long Island
                </p>
                <p>Offering Drain & Commercial Plumbing Services</p>
            </div>
            <!-- section accordion & image -->
            <div class="container row justify-content-center align-items-center py-4 overflow-hidden gap-4">
                <!-- accordion -->
                <div class="services-section-accordion-container flex flex-col col-12 col-lg-5 col-xl-4">
                    <div class="accordion flex flex-column gap-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    What services do you provide?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We provide a variety of commercial and drain cleaning services in NYC
                                        including Plumber Services, hydro jetting, sewer repair, water heaters, leak detection services, bathroom plumbing services and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Where do you service?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        We provide our cleaning services to Brooklyn and Queens.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    How is your cleaning different?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        What sets us apart from other NYC drains and  commercial plumbing
                                        companies is that we only use green and non-toxic products in our plumbing services.
                                        These products have been certified by the US EPA as part of their "Safer Choice"
                                        program. We also offer incredible service, hence our average 4.9/5 star rating at
                                        all of our locations!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button services-section-accordion-header collapsed"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">
                                    Why choose us?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Choose H2OBros Plumbing Services for top-tier plumbing services in NYC, Brooklyn, Queens, Bronx, and Long Island. Our skilled, customer-centric team ensures quality work, transparent pricing, and timely solutions. Your plumbing peace of mind is our priority. Contact us today!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- img -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="beforeAfterContainer border-0">
                        <div data-background-image="{{ asset('assets/images/accoorss.jpg') }}" class="img background-img rounded-4 lozad"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- reivews section for small device starts here --}}
    {{-- <section class="mobile-rev d-md-none px-3" id="reviews">
        <div class="row my-4">
            <div class="col">
                <h3 class="text-blue fs-2 fs-md-5 lh-1-3 lh-md-auto">OUR REVIEWS!</h3>
            </div>
        </div>
        <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-a21f0f5315e17e7e" aria-live="polite"
                style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">

                <div class="swiper-slide" role="group" aria-label="1 / 3" style="width: 521px; margin-right: 30px;">
                    <div class="row">
                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/debra.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Debra<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Stuart is very
                                professional and
                                did a great job for us. He did a very thorough cleaning of our
                                sectional couch and rugs. They look better than new!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/karen.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Karen<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was
                                extremely prompt and
                                very professional. The couch looks and smells brand new.
                                Highly recommend for all upholstery services!!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/richard.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Steffi<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">I highly recommend
                                PristineGreen
                                cleaning. After two cleaning attempts by another service, one on-site steam
                                cleaning and then another off-site 'industrial' dry cleaning, the sofa still had visible
                                stains. I was met with excuses and ...
                                long stories till I decided to call for another service. Stuart was very straight forward
                                and honest over the phone. He focused on all
                                the discolored dark spots, an issue the other service said it was impossible to remove
                                without damaging the fabric. In an industry where
                                the fee of service reflects the quality, this was the opposite case where Stuart's service
                                was the lowest fee with the highest results.</span></div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="2 / 3"
                    style="width: 521px; margin-right: 30px;">
                    <div class="row">
                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/taylor.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Taylor<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Stuart responded
                                quickly when I
                                reached out. Gave me all the details upfront. Service was quick and my couches look new
                                again and smell fresh.
                                Would definitely use again for both my couches and rugs!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/nick.png') }}" alt="debra"
                                class="person lozad " width="40px" height="40px"> <span class="title">Nick<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was beyond
                                excellent! Prompt, professional, respectful, courteous and paid incredible attention to
                                detail.
                                I will never use anyone else! If I could give more than 5 stars, I would. Highly
                                recommend!</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/shelby.webp') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Shelby<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">A beer spilled on
                                my velvet sofa
                                and the grain of the velvet was entirely warped. I was able to book a cleaning in a couple
                                days
                                and they were in and out in under an hour. The sofa looks as good as new and there’s no
                                intense </span></div>
                    </div>
                </div>
                <div class="swiper-slide swiper-slide-active" role="group" aria-label="3 / 3"
                    style="width: 521px; margin-right: 30px;">
                    <div class="row">
                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/debra.png') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Ana
                                Maria <span class="time">a month ago</span></span> <span class="stars"><i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i></span> <span class="text">I called for an
                                appointment late last week and received an appointment and detailed quote immediately.
                                He arrived on time and took less than an hour to do my couch. Needless to say the couch came
                                out great I highly recommend prestinegreen cleaning</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/richard.png') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Richard<span
                                    class="time">a month ago</span></span> <span class="stars"><i class="fa"
                                    aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i></span> <span class="text">Excellent
                                experience with this
                                company. The owner was able to arrange a same-day appointment to clean our armchair, and was
                                courteous,
                                professional and efficient throughout. Highly recommended.</span></div>

                        <div class="col-lg-4 review"><img rel="canonical"
                                data-src="{{ asset('assets/images/review_images/karen.png') }}" alt="debra"
                                class="person lozad" width="40px" height="40px"> <span class="title">Eric
                                Braunstein <span class="time">a month ago</span></span> <span class="stars"><i
                                    class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i>
                                <i class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                                    class="fa" aria-hidden="true"></i></span> <span class="text">Had two carpets
                                and an ottoman cleaned at my apartment in UES of Manhattan. Was very prompt with reply re:
                                quote,
                                easy to schedule, and the cleaned items look great. Definitely would recommend for any
                                carpet or upholstery cleaning needs.</span></div>
                    </div>
                </div>
            </div>
            <div
                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                    role="button" aria-label="Go to slide 2"></span><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 3" aria-current="true"></span>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section> --}}
    {{-- reivews section for small device starts here --}}

    {{-- reivews section for large device starts here --}}
    {{-- <section class="py-5 bg-lightgray-1 d-none d-md-block desktop-revl" id="reviews">
        <div class="container">
            <div class="row my-4">
                <div class="col">
                    <h3 class="text-blue fs-2 fs-md-5 lh-1-3 lh-md-auto">OUR REVIEWS!</h3>
                </div>
            </div>
            <div class="row text-lightgray">
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/debra.png') }}" style="">
                    <span class="title">Debra<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart is very
                        professional and did a great job for us. He did a very thorough
                        cleaning of our
                        sectional couch and rugs. They look better than new!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/karen.png') }}" style="">
                    <span class="title">Karen<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was extremely
                        prompt and very professional. The couch looks and smells brand
                        new.
                        Highly recommend for all upholstery services!!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/richard.png') }}" style="">
                    <span class="title">Steffi<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">I highly recommend
                        PristineGreen cleaning. After two cleaning attempts by another
                        service, one on-site steam
                        cleaning and then another off-site 'industrial' dry cleaning, the sofa still had visible stains. I
                        was met with excuses and ...
                        long stories till I decided to call for another service. Stuart was very straight forward and honest
                        over the phone. He focused on all
                        the discolored dark spots, an issue the other service said it was impossible to remove without
                        damaging the fabric. In an industry where
                        the fee of service reflects the quality, this was the opposite case where Stuart's service was the
                        lowest fee with the highest results.</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/taylor.png') }}" style="">
                    <span class="title">Taylor<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart responded quickly
                        when I reached out. Gave me all the details upfront.
                        Service was quick and my couches look new again and smell fresh.
                        Would definitely use again for both my couches and rugs!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="assets/images/review_images/nick.png" style="">
                    <span class="title">Nick<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Stuart was beyond
                        excellent! Prompt, professional, respectful, courteous and paid
                        incredible attention to detail.
                        I will never use anyone else! If I could give more than 5 stars, I would. Highly recommend!</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/shelby.webp') }}" style="">
                    <span class="title">Shelby<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">A beer spilled on my
                        velvet sofa and the grain of the velvet was entirely warped. I
                        was able to book a cleaning in a couple days
                        and they were in and out in under an hour. The sofa looks as good as new and there’s no intense
                    </span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/debra.png') }}" style="">
                    <span class="title">Ana Maria <span class="time">a month ago</span></span>
                    <span class="stars"><i class="fa" aria-hidden="true"></i> <i class="fa"
                            aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i class="fa"
                            aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i></span> <span
                        class="text">I called for an appointment late last week and received an appointment and detailed
                        quote immediately.
                        He arrived on time and took less than an hour to do my couch. Needless to say the couch came out
                        great I highly recommend prestinegreen cleaning</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/richard.png') }}" style="">
                    <span class="title">Richard<span class="time">a month ago</span></span> <span class="stars"><i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i></span> <span class="text">Excellent experience with
                        this company. The owner was able to arrange a same-day
                        appointment to clean our armchair, and was courteous,
                        professional and efficient throughout. Highly recommended.</span>
                </div>
                <div class="col-lg-4 review lozad"><img rel="canonical" class="lozad" alt="debra" width="40px"
                        height="40px" data-src="{{ asset('assets/images/review_images/karen.png') }}" style="">
                    <span class="title">Eric Braunstein <span class="time">a month
                            ago</span></span> <span class="stars"><i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i> <i
                            class="fa" aria-hidden="true"></i> <i class="fa" aria-hidden="true"></i></span>
                    <span class="text">Had two carpets and an ottoman cleaned at my apartment in UES of Manhattan. Was
                        very prompt with reply re: quote,
                        easy to schedule, and the cleaned items look great. Definitely would recommend for any carpet or
                        upholstery cleaning needs.</span>
                </div>
            </div>




        </div>
    </section> --}}
    {{-- reivews section for large device  ends here --}}

    <!-- Callback-form section -->
    @include('app.static_components.callback_form_banner')


    {{-- Trusted by section starts here --}}




    {{-- Trusted by section  ends here --}}



    <!--  baby section -->
    <section
        data-background-image="{{ asset('assets/images/vintage-tape-water-plumbing-sink-2023-05-11-13-13-56-utc.jpg') }}"
        style="background-position: center 80%;"
        class="lozad baby-section d-flex align-items-center">

        <!-- tabs -->
        <div class="container-fluid d-flex flex-column py-5 p-md-5 justify-content-center h-100">
            <div style=" height: 512px !important;margin-left: auto !important;"
                class=" bg-lightgray h-auto mx-auto mx-md-0 col-12 col-sm-10 col-md-9 col-xl-7 p-3 p-md-5 rounded-4 baby-ac-section">
                <div style="width: fit-content !important"
                    class="border-blud-for-tabs nav nav-tabs border mb-3 w-auto rounded-3 overflow-hidden " id="nav-tab"
                    role="tablist">
                    <button
                        class="nav-link col-12 col-sm-6 col-md-auto rounded-0 active custom-border-none border-sm-b-blue border-sm-r-blue border-right-1"
                        id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                        aria-controls="nav-home" aria-selected="true">
                        24-hour Plumbing Services
                    </button>
                    <button
                        class="nav-link rounded-0 col-12 col-sm-6 col-md-auto custom-border-none  border-sm-b-blue border-right-1"
                        id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
                        role="tab" aria-controls="nav-profile" aria-selected="false">
                        Drain Cleaning
                    </button>
                    <button class="nav-link rounded-0  col-12 col-md-auto custom-border-none " id="nav-contact-tab"
                        data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab"
                        aria-controls="nav-contact" aria-selected="false">
                        Sewer Repair Services
                    </button>
                </div>
                <div class="tab-content coupons-container" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                        aria-labelledby="nav-home-tab">
                        <h3 class="text-blue">24-hour Plumbing Services</h3>
                        <p>
                            H2OBros Plumbing Services offers 24-hour plumber services to meet your plumbing needs around the clock. We understand that plumbing emergencies can strike at any time, causing inconvenience and potential damage. That's why we're here to provide rapid response and timely solutions, day or night.

                            


                        </p>
                        <p>
                            Our experienced team of plumbers is highly skilled and committed to delivering top-notch service. Whether it's a burst pipe, a clogged drain, or any plumbing issue, we have the expertise to tackle it efficiently. We prioritize clear communication, ensuring we understand your needs and exceed your expectations. Plus, our transparent pricing guarantees no hidden fees, giving you peace of mind even during plumbing emergencies.

                        </p>
                        <p>
                            Count on H2OBros Plumbing Services for licensed and insured plumbing expertise whenever you need it. We're dedicated to your plumbing well-being, ensuring your comfort, safety, and satisfaction 24/7.

                        </p>
                      

                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h3 class="text-blue">Drain cleaning</h3>
                        <p>
                            H2OBros Plumbing Services specializes in thorough drain cleaning solutions to keep your plumbing system in optimal condition. Our expert plumbers utilize advanced equipment and proven techniques to clear clogs, obstructions, and buildups from your drains effectively. Whether it's a minor blockage or a more complex issue, we have the expertise to restore proper flow and prevent future problems.

                        </p>
                        <p>
                            With our drain cleaning service, we ensure a comprehensive approach, addressing the root causes of blockages rather than offering temporary fixes. We pride ourselves on providing efficient, reliable, and timely solutions, 24 hours a day. Trust H2OBros Plumbing Services to keep your drains clean, clear, and functioning seamlessly for a worry-free plumbing experience.

                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <h3 class="text-blue">Sewer Repair Services</h3>
                        <p>
                            H2OBros Plumbing Services is your trusted partner for expert sewer repair solutions. When your sewer system is compromised, causing disruptions and potential hazards, our skilled team is here to swiftly and effectively address the issue. We conduct thorough inspections using advanced technology to pinpoint the problem and determine the best course of action.


                        </p>
                        <p>
                            Our sewer repair services encompass everything from minor repairs to complete sewer line replacements. We prioritize delivering lasting solutions that restore the integrity and functionality of your sewer system. With our licensed and insured plumbers at the helm, you can trust us to handle the repair process with precision, adhering to industry standards and ensuring your safety and satisfaction.

                        </p>
                        <p>
                            Choose H2OBros Plumbing Services for reliable, 24-hour sewer repair services that prioritize the longevity and efficiency of your sewer system. We're committed to providing exceptional workmanship and minimizing disruptions to your daily routine.

                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('app.static_components.we_offer')




    <!-- Company info section -->
    @include('app.static_components.companyinfo_banner')

    @include('app.static_components.callback_form_submit')

    <!-- call us section -->
    @include('app.static_components.callus_banner')
@endsection


@section('js')

{{-- <script>
    isVideoExist = document.getElementById('custom-preload');
    if (isVideoExist) {
        var innerVideo = `
            <source media="(orientation: landscape)" 
                src="{{ asset('videos/metro_new.mp4') }}"
                sizes="(min-width: 60rem) 80vw,
                (min-width: 40rem) 90vw,
                100vw"
                type="video/mp4">
            <source media="(orientation: portrait)" 
                src="{{ asset('videos/metro_new.mp4') }}"
                sizes="(min-width: 60rem) 80vw,
                (min-width: 40rem) 90vw,
                100vw"
                type="video/webm">
        `;
        window.addEventListener('load', async function () {
            var video = document.getElementById('custom-preload');
            var hasPlayed = false;

            function playVideo() {
                if (!hasPlayed) {
                    video.innerHTML = innerVideo;
                    video.autoplay = true;
                    hasPlayed = true;
                }
            }

            document.addEventListener('scroll', playVideo);
            $(document).on('mousemove', await playVideo);
            $(".volume-icon").click( function (){

                if($(".Bright-intro-video")[0].muted)
                {
                    $(".volume-icon").removeClass("muted");
                    $(".volume-icon").addClass("unmuted");
                    $(".Bright-intro-video")[0].muted = false;
                    $(".Bright-intro-video")[0].volume  = 0.5;
                    
                }
                else
                {
                    $(".volume-icon").addClass("muted");
                    $(".volume-icon").removeClass("unmuted");
                    $(".Bright-intro-video")[0].muted =true;
                }

                });
        });
    }

    
</script> --}}

    {{-- <script type="text/javascript">
  
        // window.onload = function() {
        //   var videoContainer = document.querySelector('.video-container');
        //   var video = videoContainer.querySelector('video');
        //   var errorEle = document.querySelector('#revbann');

        //    resizeVideo();

        //    window.addEventListener('resize', resizeVideo);

        //   function resizeVideo() {
        //     video.style.height = errorEle.offsetTop + 'px';
        //   }

        // //     doElsCollide = function(el1, el2) {
        // //         el1.offsetBottom = el1.offsetTop + el1.offsetHeight;
        // //         el1.offsetRight = el1.offsetLeft + el1.offsetWidth;
        // //         el2.offsetBottom = el2.offsetTop + el2.offsetHeight;
        // //         el2.offsetRight = el2.offsetLeft + el2.offsetWidth;

        // //         return !((el1.offsetBottom < el2.offsetTop) ||
        // //                  (el1.offsetTop > el2.offsetBottom) ||
        // //                  (el1.offsetRight < el2.offsetLeft) ||
        // //                  (el1.offsetLeft > el2.offsetRight))
        // //     };
        // }
  
    </script> --}}
@endsection
