<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="robots" content="noindex,nofollow,nocrawl"> --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/images/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('assets/images/favicon/safari-pinned-tab.svg')}}" color="#1d4528">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    @yield('meta')
    {{-- <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "MaidBrite Cleaning Services",
          "address": {
          "@type": "PostalAddress",
          "streetAddress": "7 Marcus Garvey Blvd #406",
          "addressLocality": "Brooklyn, NY 11206",
          "addressRegion": "NY",
          "postalCode": "11206",
          "addressCountry": "USA"
          },
          "telephone": "212-951-0342",
          "email" : "sales@maidbritecleaners.com",
          "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday",
            "Sunday"
          ],
          "opens": "09:00",
          "closes": "21:00"
          },
          "priceRange": "$$",
          "currenciesAccepted": "USD",
          "paymentAccepted": "Cash, Credit Card",
          "description": "MaidBrite Cleaning Services provides exceptional, top-notch commercial and residential cleaning services to the NYC area. We offer a variety of services including house cleaning services, post construction cleaning, move in/out cleaning, apartment cleaning, maid cleaning, house keeping, deep cleaning and more!",
          "url": "https://Maidbritecleaners.com"
        }
    </script> --}}
    @yield('schema')
    {{-- preconnects --}}
    <link rel="preconnect"
      href="https://cdnjs.cloudflare.com"
      crossorigin />
    {{-- fonts --}}
    <link rel="stylesheet" href="{{ asset('assets/fonts/lato/stylesheet.css') }}">
    {{-- boostrap css packages --}}
        <link rel="preload" 
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" 
         as="style" onload="this.onload=null; this.rel='stylesheet'" />
<noscript><link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" /></noscript>
    {{--  swiper js css packages --}}
        <link rel="preload" 
        href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.css"
        integrity="sha512-qKRrPbwf0yKAsKZGGfiNjmd66a7GtkLhLqTqH9boYbDPgUQmDw0mGXfC3HlkbEFEw3HjNmSaS9SR/d07ZXOUVw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" 
         as="style" onload="this.onload=null; this.rel='stylesheet'" />
<noscript><link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.css" /></noscript>
    @yield('preload')
    {{-- custom css file  --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/utiles.css') }}" />
   {{--  navbar css file --}}
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />


        <style>
            .footer-1-container__Service-links > span > a {
                 text-decoration: none;
                 color: #fff;
                 display: inline-block;
            }
            .footer-1-container__Service-links > span > a:hover {
                color:#ff6920 
                /* padding: 100px; */
            }
            .myphone a{
                color:#ff6920 !important;
            }
            .responsive-image {
                max-width: 100%;
                height: auto;
            }
        </style>


    {{-- css for slider --}}
    <style type="text/css">
        /* we offer section  */
        .we-off-sec-lady-img{width:385px;height:350px;background-repeat:no-repeat;background-size:contain;background-position:45%}@media(min-width:940px){.we-off-sec-lady-img{width:100%;height:100%;background-position:60%}}@media(min-width:1348px){.we-off-sec-lady-img{background-position:30% bottom;background-size:48%!important}}
        .service-container-img{justify-content:center!important}@media (max-width: 991px){.navbar-menu li a{padding:6px 8px 5px 7px !important;font-size:20px;text-align:left;font-weight:600} .navbar {height: 81px !important;}}.trusted-swiper-btn-prev{position:static!important;color:#000!important;background:transparent!important}.swiper-button-prev,.swiper-button-next{top:50%;width:30px;height:30px;margin-top:-15px;z-index:10}.swiper-button-prev{left:10px}.swiper-button-next{right:10px}.swiper-slide{display:flex;flex-direction:column;justify-content:center;align-items:center}.slide-content{text-align:center}.slide-content h3{font-size:1.5rem;margin-bottom:.5rem}.slide-content p{font-size:1rem;margin-bottom:1rem}.slide-content a{font-size:1rem;color:blue}.swiper-slide img{border-radius:30px}.swiper-slide-inner{border:1px solid #ccc;padding:15px;margin:50px;margin-top:-20px}.slide-content-wrapper{width:80%;margin:0 auto;text-align:center}.slide-content-wrapper img{display:block;margin:0 auto;max-width:100%;height:auto;border-radius:10px}.marg-left{margin-left:20px}.marg-right{margin-left:20px}@media screen and (max-width: 768px){.slide-content{margin-top:1rem}.swiper-button-next,.swiper-button-prev{top:55vw!important}}.swiper-button-next,.swiper-button-prev{position:absolute;top:var(--swiper-navigation-top-offset,50%);width:calc(var(--swiper-navigation-size)/ 44 * 27);height:var(--swiper-navigation-size);z-index:10;display:flex;align-items:center;justify-content:center;color:#fff;position:absolute;top:23vw;margin:0;margin-top:0;margin-top:0;width:2.4rem!important;height:2.4rem!important;background-repeat:no-repeat;background-color:#4078bc;background-size:auto 75%;background-position:center;border-radius:8px 0 0 8px;transition:width .3s ease;opacity:1;z-index:2;cursor:pointer}.swiper-button-prev{transform:scale(-1)}:root{--swiper-navigation-size:25px;font-weight:900}.swiper-button-prev::after{transform:scale(-1)}
        .callback-form-section,.callus-section{background-color:#ff6920}.active,.bg-lightgreen,.btn-success,.custom-nav-link::before,.services-section-accordion-header{background-color:#ff6920!important}.service-area-links>div :hover,.text-green-1{color:#ff6920!important}.footer-1-container__Service-links>span>a:hover,.footer-2-links :hover{color:#ff6920}.services-section-header p:first-child{color:#ff6920;font-size:3.1em}.services-section-accordion-header{color:#fff!important;border-radius:6px!important}.text-green{font-size:3rem!important;color:#ff6920!important}.border-lightgreen{border:1px solid #ff6920!important}.active{color:#fff!important}.custom-nav-link::before{transition:.3s;height:5px;content:"";position:absolute}.nav-link-ltr::before{width:0%;bottom:10px;color:#ff6920!important}.tab-pane{background-color:transparent!important;color:#4e4a4a!important}@media(max-width:992px){.navbar-logo a img{width:100px!important}.down-icon::before{content:"";display:block;background-size:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #ffff;position:absolute;content:"";top:22px;right:18px;width:0;height:0;background-image:none;-webkit-transition:.4s ease-in-out;-moz-transition:.4s ease-in-out;-o-transition:.4s ease-in-out;-ms-transition:.4s ease-in-out;transition:.4s;cursor:pointer}.up-icon::before{transition:.4s;transform:scale(-1)}.mobile-fixed-nav{position:fixed;top:0;z-index:9999}}@media (min-width:991px){nav .dropdown .project{transform:translateX(-300px) translateY(5px)}.new-nav-logo{position:absolute}.navbar-logo a img{width:204px!important}}.w-img-250{width:260px;height:auto}.services-items img{height:295px;object-fit:cover;widows:295px;max-width:100%}.slide-content-wrapper{display:inline}.tab-content.coupons-container#nav-tabContent{max-height:330px}.remove-bg{background-image:none!important}@media (min-width:992px){.drop-item a{color:inherit!important;text-decoration:underline 0.15em rgba(255,255,255,0)!important;transition:text-decoration-color .3s!important;text-underline-offset:5px!important}.drop-item a:hover{text-decoration-color:rgba(255,255,255,1)!important}}@media (min-width:767px){.new-gap-1{width:700px;padding-left:12px!important}}.btn.btn-primary strong{font-weight: bold!important}@media (min-height:420px) and (min-width:1024px){.callback-desktop-only{display:inline-block;background-color:#fff;position:fixed;right:24px;bottom:24px;width:248px;height:255px;box-shadow:0 0 4px #222;z-index:999}.callback-desktop-only .request-form-header{font-size:110%;padding:12px 16px;color:#fff;background-color:#0f5}.callback-desktop-only .request-form-holder .mb-2{margin-bottom:16px!important}.mb-2{margin-bottom:.5rem!important}.navbar .d-flex{height:auto!important}id.up-icon::before{transition:.4s;transform:rotate(225deg)!important;-webkit-transform:rotate(225deg)!important}.myphone-mobile-only.lol{display:none}}@media (max-width:786px){.myphone-mobile-only{position:fixed;right:24px;bottom:24px;width:96px;height:96px;text-decoration:none;border-radius:48px;overflow:hidden;z-index:99999;display:block}.myphone-mobile-only img{-o-object-fit:cover;object-fit:cover;width:100%;height:100%}}.video_section{width:100%!important}@media (max-width:991px){.nav-active{background:#798ab3!important}.navbar-menu{padding:0!important}.navbar-menu li{margin:0!important;padding:6px;border-bottom:1px solid #eeeeee85}.custom-arrow:after{content:"";display:block;background-size:0;border-left:12px solid transparent;border-right:12px solid transparent;border-top:12px solid #ffff;position:absolute;content:"";top:22px;right:18px;width:0;height:0;background-image:none;-webkit-transition:.4s ease-in-out;-moz-transition:.4s ease-in-out;-o-transition:.4s ease-in-out;-ms-transition:.4s ease-in-out;transition:.4s;cursor:pointer}.sub-menu-service-btn{display:block;height:100%;width:60px;position:absolute;right:0;top:0}.drop-item>a,.menu-icon-wrapper,.showhide{display:inline-block}.toggle-up-down-sub-icon::after{transition:.4s;transform:scale(-1)}.project{background-color:gray;margin:9px -6px -6px}.container-fluid.mobb{background-color:transparent}.drop-item{border-bottom:1px solid #eeeeee85!important;padding-bottom:6px!important;padding-top:6px!important;border-bottom:0!important}.drop-item>a{color:#fff;font-weight:500!important;font-size:18px!important;width:100%}.menu-icon-wrapper{position:relative;width:40px;height:40px;pointer-events:none;-webkit-transition:.1s;transition:.1s}.menu-icon-wrapper svg{-webkit-transform:scale(.1);-ms-transform:scale(.1);transform:scale(.1);-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;position:absolute;top:-33px;left:-33px}.menu-icon-wrapper svg path{stroke:#2f2c2c;stroke-width:30px;stroke-linecap:round;fill:transparent}.showhide{cursor:pointer;/*! text-align: center; *//*! padding: 0; */float:right;/*! text-decoration: none; */outline:0;-webkit-tap-highlight-color:transparent;/*! position: relative; *//*! width: 100%; *//*! height: 100%; */display:flex;justify-content:center;align-items:center;padding-left:10px;padding-right:16px;overflow:hidden}.navbar-menu li a{font-weight:400!important}.main-nav-item--phone{padding-top:0!important}.logo-res .navbar-logo img{width:172px;height:auto}}.offerservice-section-list-container>ul>li{gap:.2rem!important}.fa-chevron-left:before,.fa-chevron-right:before{content:""!important}.we_offer_section_lists span{width:50px;height:50px;border-radius:50%;border:2px solid #ff6920;display:flex;justify-content:center;align-items:center;margin-right:8px}.we_offer_section_lists li img{width:65%;object-fit:contain;filter:invert(40%) sepia(23%) saturate(3909%) hue-rotate(171deg) brightness(93%) contrast(101%)}.up-ar::before{border:solid #fff;border-width:0 3px 3px 0;display:inline-block;padding:5px;position:absolute;content:""}.down::before{transform:rotate(-316deg);-webkit-transform:rotate(-316deg)}
        @media(min-width: 1000px) {
        .content-container  p,
        .content-container  h2,
        .content-container  ul,
        .content-container  h3,
        .content-container  h4{
        padding-left: 7rem !important;
        padding-right: 7rem !important;
        }
      
        }

    </style>

@if (request()->is('services/*'))
<style type="text/css">
    .main-content-section h2 {
        font-weight: 900 !important;
        font-size: 1.2rem;
    }
    .text-uppercase{
        text-transform: uppercase !important;
    }

    @media(min-width: 1000px) {

        .main-content-section h2,
        .main-content-section p {
            padding-left: 7rem !important;
            padding-right: 7rem !important;
        }
     
        .content-container{
            padding-left: 7rem !important;
            padding-right: 7rem !important;
        }
    }
</style>
@endif
@yield('css')
</head>
<body>
    @if (!request()->routeIs('privacy'))
        @include('layouts.navbar')
    @endif
    @yield('content')
    @if (!request()->routeIs('privacy'))
        @include('layouts.footer')
    @endif
    {{-- jquery packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- bootstrap packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer ></script>
    {{-- lazy loading packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js"
        integrity="sha512-21jyjW5+RJGAZ563i/Ug7e0AUkY7QiZ53LA4DWE5eNu5hvjW6KUf9LqquJ/ziLKWhecyvvojG7StycLj7bT39Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    {{-- swiperjs packages  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.4/swiper-bundle.min.js"
        integrity="sha512-hJrV+LKHbu+Hxkn/+ZwGOCMUkap0ZfjJbca9WT38z69+MYmRzMlvUd401TOs1b4byAm4fGDESpEcCbG2A6cibQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    {{-- custom js file --}}
    @if (!request()->routeIs('privacy'))
        <script src="{{ asset('js/main.js') }}" defer></script>
    @endif
    {{-- animation and lazyload scripts --}}
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", async function() {

            var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            // spaceBetween:20,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                // spaceBetween:20,
            },
            breakpoints: {
                1148: {
                    slidesPerView: 3,
                }
            },
            pagination: {
                el: false,
            }
        });
        var swiper2 = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
            const observer = await lozad('.lozad', {
                rootMargin: '100px 0px', // Apply a 100px margin around the viewport
                threshold: 0.1, // Load images when they are 10% visible
                loaded: function(el) {
                    // Add a class to mark the image as loaded
                    el.classList.add('loaded');
                }
            });
            observer.observe();
        });
       $(document).on("click", ".up-icon", function(e) {
            e.preventDefault();
        })
        $(document).on("click", "#myitem1", function(e) {
            e.preventDefault();
        })
    </script>     
   <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", async function() {
         function toggleSlide(elementSelector, height) {
             const element = $(elementSelector);
  
             if (element.height() === 50) {
                 element.animate({
                     height: height
                 });
             } else {
                 element.animate({
                     height: 50
                 });
             }
         }
  
         $(document).ready(function() {
             $('id').on('click', function() {
                 // if ($(this).hasClass("down-icon")) {
  
                 // } else {
  
                 // }
                 $(this).toggleClass("up-icon");
                 $("#call_body").slideToggle();
  
                 toggleSlide('#cll', 270)
             })
  
                  toggleSlide('#cll', 270);
                  $("#call_body").slideToggle();
              })
  
          });
          </script>
  
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer ></script>
          <script type="text/javascript">
              document.addEventListener("DOMContentLoaded", async function() {
          
                  function showAlert(title, text, icon) {
                      swal({
                          title: title,
                          text: text,
                          icon: icon
                      });
                  }
  
          
                  $(document).ready(function() {
              
                      @if ($errors->any())
                          showAlert("Error", "{!! implode(' ', $errors->all()) !!}", "error");
                      @endif
          
                      @if (session()->has('message'))
                          showAlert("Success", "{{ session()->get('message') }}", "success");
                      @endif
                  });
              });
          </script>
  
  

    {{-- add your components js --}}
    @yield('js')



</body>

</html>
