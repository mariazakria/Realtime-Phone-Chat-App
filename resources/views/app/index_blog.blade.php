@extends('layouts.index')
@section('title')
    Blog | {{ env('APP_NAME') }}
@endsection

@section('meta')
    <meta name="title" content="Blog | H2OBros Plumbing">
    <meta name="description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    {{-- <meta name="keywords"
        content="house cleaning services, cleaning lady, commercial cleaning, cleaning services near me, housekeeping, post construction cleaning, move out cleaning, apartment cleaning, green cleaning, home cleaning services, deep cleaning services, office cleaning, professional cleaning services, move in cleaning service, maid service, commercial cleaning company, same day cleaning, sanitization services, moving cleaning service, construction clean up, extreme cleaning, disinfecting services, cleaning agencies, construction cleanup service, move out cleaning checklist, hire a housekeeper, commercial cleaners near me, detailed cleaning services, declutter services near me, thorough cleaning, office cleaners near me, contracting cleaning services, disinfectant services, general cleaning, sanitize company, scrub cleaning, commercial office cleaners, sanitization company">
        --}}
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="H2OBros Plumbing">
    <meta property="og:title" content="Blog | H2OBros Plumbing">
    <meta property="og:description"
        content="🔥 Unleash Top-Notch Commercial Plumbing Excellence in NYC! 💧 Emergency Fixes, Upgrades & More – Your Business Deserves the Best. Discover NYC Commercial Plumbing Pros Now! 🌟">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{asset('assets/images/home_page.webp')}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="Blog  | H2OBros Plumbing ">
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


@section('css')

<style>
    
/* blog  left and right pangination icons */
   .page-link .fa-sharp {
    border: solid black;
    border-width: 0 3px 3px 0;
    display: inline-block;
    padding: 4px;
    }

    .page-link .fa-chevron-right {
    transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    }

    .page-link .fa-chevron-left {
    transform: rotate(135deg);
    -webkit-transform: rotate(135deg);
    }

</style>
    
@endsection

@section('content')
    <!-- blog section -->
    <section>
        <div class="container p-md-5">
            <div class="py-4 text-center fs-1 text-blue">
                <h1 id="st" class="font-median">Blog</h1>
            </div>
            <!-- blogs -->
            <div class="row py-5 row-gap-5 mx-md-0" id="blogs">
                @include('app.pagination.blogs.index')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var containerH = $('#blogs').height();
                $.ajax({
                    url: $(this).attr('href'),
                    method: 'GET',
                    dataType: 'html',
                    beforeSend: function() {
                        // showLoader();
                        $('#blogs').height(containerH)
                    },
                    success: function(response) {

                        $('#blogs').html(response);
                    },
                    complete: function() {
                        // hideLoader();
                        var target = $("#st");
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        // Reload Lozad
                        const observer = lozad('.lozad', {
                            loaded: function(el) {
                                el.classList.add('fade-in');
                            }
                        });
                        observer.observe();

                        // Reload AOS
                        AOS.refresh();
                    }
                });
            });
        })
    </script>
@endsection
