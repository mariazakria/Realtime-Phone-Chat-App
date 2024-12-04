<nav class="custom-nav navbar px-1 py-2 sticky-top shadow-lg">
    <div class="container custom-col position-relative">
        <div class="row logo-res w-100">
            <div class="col-md-4 col-lg-6 d-flex justify-content-between logo-col">
                <div class="navbar-logo">
                    <a href="/" class="d-block ms-lg-5 ms-xl-5 ps-lg-3 ps-xl-4 ms-4 new-nav-logo">
                    <img alt="H2OBros Plumbing" class="responsive-image lozad"
                            data-src="{{ asset('assets/images/logo/Logo-01.svg') }}"/>
                    </a>
                </div>
            </div>
            <div
                class="col-md-8
                            col-lg-6 d-lg-flex justify-content-center justify-content-md-end d-none">
                <div class="top-phone" style="padding-bottom: 12px; padding-top: 3px;">
                    <div class="myphone ">
                        <h3 class="mb-0 fw-bold" style="color:#fff">

                            <a class="myphone d-flex align-items-center gap-1" href="tel:212-951-0798" style="color:#ff6920;!important"><img width="35" height="35" alt="call-us"
                                    class="lozad" data-src="{{ asset('assets/images/call.webp') }}">
                                    212-951-0798</a>
                        </h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row w-100">
            <div class="custom-col position-relative">
                <div class="justify-content-end">
                    <ul class="navbar-menu">
                        <li class="dropdown">
                            <a class="custom-nav-link nav-link  nav-link-ltr" href="/services">Plumbing Services <span
                                    class="custom-arrow sub-menu-service-btn" id="myitem1"></span></a>
                            <div class="project hide-mob">
                                <div class="container-fluid mobb">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="drop-item"><a href="{{ route('hour_24_plumbers') }}">24 Hours
                                                    Plumber Services</a>
                                            </div>
                                            <div class="drop-item"><a
                                                    href="{{ route('commercial_plumbing_repair') }}">Commercial Plumbing
                                                    Repair</a></div>
                                            <div class="drop-item"><a href="{{ route('drain_cleaning') }}">Drain
                                                    Cleaning</a></div>
                                            <div class="drop-item"><a href="{{ route('bathroom_plumbing') }}">Bathroom
                                                    Plumbing</a></div>
                                            <div class="drop-item"><a href="{{ route('hydro_jetting') }}">Hydro
                                                    Jetting</a></div>


                                        </div>
                                        <div class="col-md-6">
                                            <div class="drop-item"><a href="{{ route('water_heaters') }}">Water
                                                    Heaters</a></div>
                                            <div class="drop-item"><a href="{{ route('sewer_repair') }}">Sewer
                                                    Repair</a></div>
                                            <div class="drop-item"><a href="{{ route('leak_detection') }}">Leak
                                                    Detection</a></div>
                                            <div class="drop-item"><a href="{{ route('sump_pump') }}">Sump Pump
                                                    Services </a></div>
                                            <div class="drop-item" style="border-bottom:unset !important;"><a
                                                    href="{{ route('water_main') }}">Water Main Services</a>
                                            </div>

                                            {{-- <div class="col-md-4 av-yelp-g">
                                            <img class="lozad"
                                                data-src="https://pristinegreencleaning.com/assets/icons/Carpet-Upholstery-Cleaning-Google-Yelp-Rating.png"
                                                alt="Carpet Upholstery Cleaning Google Yelp Rating">
                                        </div> --}}
                                        </div>
                                    </div>
                                </div>
                        </li>
                        <li class="me-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                href="{{ route('free-quote') }}">Request
                                a
                                Quote</a>
                        </li>
                  
                        {{-- <li class="ms-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                href="{{ route('gallery') }}">Gallery</a></li> --}}
                                <li class="ms-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                    href="{{ route('contact-us') }}">Contact
                                    Us</a></li>
                                    {{-- <li class="ms-lg-0"><a class="nav-link custom-nav-link  nav-link-ltr"
                                        href="{{ route('about-us') }}">About
                                        Us</a></li> --}}
                        {{-- <li class="dropdown-mega position-static no-border social-mobile">
                            <p style="padding-bottom: 0px!important;">Our socials</p>
                            <div class="our-socials">
                                <a href="https://www.facebook.com/PristineGreen-Upholstery-and-Carpet-Cleaning-380402999024630/?__tn__=%2Cg/"
                                    target="_blank" rel="noreferrer">
                                    <img rel="canonical" class="lozad" alt="facebook" width="32px" height="32px"
                                        data-src="{{ asset('assets/images/5365678_fb_facebook_facebook logo_icon.png') }}">
                                </a>
                                <a href="https://twitter.com/PGCarpetClean" target="_blank" rel="noreferrer">
                                    <img rel="canonical" class="lozad" alt="twitter" width="32px" height="32px"
                                        data-src="{{ asset('assets/images/5296516_tweet_twitter_twitter logo_icon.svg') }}"></a>
                                <a href="https://www.instagram.com/MaidBrite  Cleaners/" target="_blank"
                                    rel="noreferrer">
                                    <img rel="canonical" class="lozad" alt="instagram" width="32px" height="32px"
                                        data-src="{{ asset('assets/images/5296765_camera_instagram_instagram logo_icon.webp') }}"></a>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="navbar-toggle">
      <span class="toggle__icon"></span>
      <span class="toggle__icon"></span>
      <span class="toggle__icon"></span>
    </div> -->
    <div class="d-flex align-items-center">
        <div class="main-nav-item--phone"> <a class="main-nav-link" href="tel:212-951-0798"><img width="35"
                    height="35" alt="call-us" class="lozad"
                    data-src="{{asset("assets/images/call.webp")}}"></a>
        </div>
        <button aria-label="toggle-btn" class="hamburger__toggle">
            <span  href="javascript:void(0)" id="menu-icon-trigger" class="menu-icon-trigger toggle-menu-mob showhide">
                <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible">
                    <svg width="1000px" height="1000px">
                        <path id="pathD"
                            d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"
                            style="
              stroke-dashoffset: 5803.15;
              stroke-dasharray: 2901.57, 2981.57, 240;
            ">
                        </path>
                        <path id="pathE" d="M 300 500 L 700 500"
                            style="
              stroke-dashoffset: 800;
              stroke-dasharray: 400, 480, 240;
            ">
                        </path>
                        <path id="pathF"
                            d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"
                            style="
              stroke-dashoffset: 6993.11;
              stroke-dasharray: 3496.56, 3576.56, 240;
            ">
                        </path>
                    </svg>
                </span>
            </span>

        </button>
    </div>

</nav>
<!-- NAVBAR END -->
