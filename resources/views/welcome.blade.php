<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MSFF0G5S77"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-MSFF0G5S77');
    </script>
    <!-- Basic -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> --}}
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="keywords"
        content="
    Grass Roots JM, Grass Roots Jamaica Limited, GrassRootsJM, GrassRootsJamaica, 
    lawn care Jamaica, lawn mowing Kingston, yard maintenance Jamaica, grass cutting Phoenix Park Village, 
    monthly lawn service Jamaica, residential lawn care Kingston, commercial lawn care Jamaica, 
    grass trimming services Jamaica, yard clean up Phoenix Park Village, landscaping services Kingston, 
    lawn maintenance Phoenix Park Village, garden care Jamaica, professional lawn care Jamaica,
    grass cutting services Jamaica, lawn mowing services Kingston, yard maintenance services Jamaica,
    Phoenix Park Village lawn care, Kingston lawn care services, Jamaica landscaping company, 
    residential yard care Jamaica, commercial landscaping Kingston, garden maintenance Jamaica,
    tree trimming services Jamaica, hedge trimming Kingston, grass removal services Jamaica, 
    Phoenix Park Village yard cleanup, lawn fertilizer services Jamaica, turf care Kingston, 
    seasonal lawn care Jamaica, grass cutting near me Jamaica, lawn mowing near me Kingston,
    yard cleanup near me Jamaica, professional landscaping Phoenix Park Village, lawn edging services Jamaica, 
    small yard maintenance Kingston, organic lawn care Jamaica, lawn aeration services Kingston, 
    lawn weed control Jamaica, irrigation and watering services Jamaica, front yard care Kingston,
    backyard lawn service Jamaica, grass roots lawn experts Jamaica, affordable lawn care Kingston, 
    licensed landscapers Jamaica, local lawn services Phoenix Park Village, dependable yard care Jamaica,
    top rated lawn care Jamaica, full service landscaping Kingston, quality grass trimming Jamaica, 
    monthly yard service Phoenix Park Village, Grass Roots JM lawn services
    ">
    <meta name="description"
        content="Grass Roots Limited provides reliable lawn cutting, yard maintenance, grass trimming, and scheduled monthly lawn care services across Jamaica. Affordable, professional, and hassle-free recurring service for homes and businesses.">

    <meta name="author" content="Grass Roots Limited">

    <!-- Open Graph -->
    <meta property="og:title" content="Grass Roots Limited | Professional Lawn Care in Jamaica">
    <meta property="og:description"
        content="Reliable lawn cutting, yard maintenance, and scheduled monthly lawn care services across Jamaica.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://grassrootsjm.com/">
    <meta property="og:image" content="https://grassrootsjm.com/images/social-preview.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Grass Roots Limited | Lawn Care in Jamaica">
    <meta name="twitter:description" content="Professional grass cutting and yard maintenance services in Jamaica.">
    <meta name="twitter:image" content="https://grassrootsjm.com/images/social-preview.jpg">

    <link rel="canonical" href="https://grassrootsjm.com/">

    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <meta name="geo.region" content="JM-KIN">
    <meta name="geo.placename" content="Kingston">
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">



    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLora:400,500,700%7CHandlee&display=swap&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/css/animate/animate.compat.css">
    <link rel="stylesheet" href="/css/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="/css/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/theme-elements.css">
    <link rel="stylesheet" href="/css/theme-blog.css">
    <link rel="stylesheet" href="/css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="/css/demos/demo-one-page-agency.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-one-page-agency.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Theme Custom CSS -->


    @verbatim
        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Grass Roots JM Limited",
  "alternateName": "GrassRootsJM",
  "url": "https://grassrootsjm.com",
   "logo": "https://grassrootsjm.com/assets/logo.png",
  "image": "https://grassrootsjm.com/assets/hero-image.png",
  "description": "Grass Roots JM Limited provides professional lawn cutting, trimming, bagging, disposal, and yard maintenance services for residential and commercial clients in Phoenix Park Village, Kingston, and St. Andrew, Jamaica.",
  "areaServed": [
    { "@type": "Place", "name": "Phoenix Park Village, Jamaica" },
    { "@type": "Place", "name": "Kingston, Jamaica" },
    { "@type": "Place", "name": "St. Andrew, Jamaica" }
  ],
    "address": {
    "@type": "PostalAddress",
    "streetAddress": "Phoenix Park Village",
    "addressLocality": "St. Catherine",
    "addressRegion": "St. Catherine",
    "postalCode": "JMA000",
    "addressCountry": "JM"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 18.036,
    "longitude": -76.819
  },
  "telephone": "+1-876-419-8266",
  "email": "hello@grassrootsjm.com",
  "image": "https://grassrootsjm.com/img/logo.png",
  "priceRange": "$$",
    "openingHours": "Mo-Sa 07:00-19:00",
  "sameAs": [
    "https://www.facebook.com/grassrootsjm",
    "https://www.instagram.com/grassrootsjm",
    "https://www.linkedin.com/company/grass-roots-limited"
  ],
  "makesOffer": [
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Lawn Cutting with Line Trimmers",
        "description": "Precision lawn cutting using professional line trimmers for small yards, edges, and hard-to-reach areas in Phoenix Park Village, Kingston, and St. Andrew."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Grass Trimming & Edging",
        "description": "Expert grass trimming and edging for residential and commercial properties to keep lawns neat and well-defined."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Bagging & Disposal of Grass Cuttings",
        "description": "Responsible collection, bagging, and disposal of grass clippings to maintain a clean and tidy property."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Monthly Lawn Maintenance",
        "description": "Scheduled monthly lawn care services including cutting, trimming, and maintenance to keep lawns healthy year-round."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Yard Clean-Up & Debris Removal",
        "description": "Removal of leaves, debris, and waste from residential and commercial yards to maintain a tidy landscape."
      }
    },
    {
      "@type": "Offer",
      "itemOffered": {
        "@type": "Service",
        "name": "Seasonal Lawn Care & Fertilization",
        "description": "Premium lawn services including fertilization and seasonal care to promote lush, healthy grass in Jamaica’s climate."
      }
    }
  ]
}
</script>
    @endverbatim

    <link rel="stylesheet" href="/css/custom.css">
    <style>
        input,
        select,
        textarea,
        button {
            font-size: 16px;
            /* Prevents iOS from zooming */
        }

        body {
            -webkit-text-size-adjust: 100%;
            /* Prevents font auto-resizing */
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 10px;
                width: 100%;
            }
        }

        #map-container {
            position: relative;
            height: 200px;
            width: 100%;
            margin-bottom: 10px;
            border: 1px solid #ccc;
        }

        #map {
            height: 100%;
            width: 100%;
        }

        #fullscreenMap {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            display: none;
            background: white;
        }

        .btn {
            padding: 8px 15px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .btn:disabled {
            background: #ccc;
            cursor: not-allowed;
        }
    </style>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@turf/turf@6/turf.min.js"></script>

</head>

<body data-plugin-scroll-spy data-plugin-options="{'target': '.wrapper-spy'}">

    <div class="body">
        <header id="header"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}">
            <div class="header-body">
                <div class="header-container container-fluid px-0">
                    <div class="header-row">
                        <div class="header-column w-lg-25pct">
                            <div class="header-row">
                                <div class="header-logo px-4">
                                    <a href="demo-one-page-agency.html">
                                        <img alt="Grass Roots" src="img/demos/one-page-agency/logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-center w-lg-100pct">
                            <div class="header-row">
                                <div class="header-nav justify-content-center">
                                    <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="wrapper-spy collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="nav-link active" href="#home" data-hash>
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link" href="#who-we-are" data-hash
                                                        data-hash-offset="0" data-hash-offset-lg="32">
                                                        Who We Are
                                                    </a>
                                                </li>

                                                <!-- <li>
              <a class="nav-link" href="#what-we-do" data-hash data-hash-offset="0" data-hash-offset-lg="32">
               What We Do
              </a>
             </li>
             <li>
              <a class="nav-link" href="#portfolio" data-hash data-hash-offset="0" data-hash-offset-lg="32">
               Portfolio
              </a>
             </li>
             <li>
              <a class="nav-link" href="#cases" data-hash data-hash-offset="0" data-hash-offset-lg="32">
               Cases
              </a>
             </li>
             <li>
              <a class="nav-link" href="#our-team" data-hash data-hash-offset="0" data-hash-offset-lg="32">
               Our Team
              </a>
             </li>
             <li>
              <a class="nav-link" href="#blog" data-hash data-hash-offset="0" data-hash-offset-lg="32">
               Blog
              </a>
             </li> -->
                                                @if (Route::has('login'))
                                                    <li>
                                                        <a class="nav-link" href="#contact-form" data-hash>
                                                            Book Now
                                                        </a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a class="nav-link" href="#contact-form" data-hash>
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (Route::has('login'))
                                                    @auth
                                                        <li>
                                                            <a href="{{ url('#contact-form') }}" class="nav-link">
                                                                Dashboard
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li><a href="{{ route('login') }}" data-hash data-hash-offset="0"
                                                                data-hash-offset-lg="32" class="nav-link">
                                                                Log in
                                                            </a>
                                                        </li>

                                                        {{-- @if (Route::has('register'))
                                                            <li> <a href="{{ route('register') }}" data-hash
                                                                    data-hash-offset="0" data-hash-offset-lg="32"
                                                                    class="nav-link">
                                                                    Register
                                                                </a>
                                                            </li>
                                                        @endif --}}
                                                    @endauth
                                                @endif
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-column w-100pct w-lg-25pct justify-content-end">
                            <div class="header-row px-4">
                                <div class="d-none d-sm-flex align-items-center">
                                    <img width="30" height="30"
                                        src="img/demos/one-page-agency/icons/phone.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light me-1'}" />
                                    <a href="tel:1234567890"
                                        class="text-color-light font-weight-semibold opacity-hover-9 text-decoration-none">(876)419-8266</a>
                                </div>
                                <button class="btn header-btn-collapse-nav btn-gradient" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div role="main" class="main">

            <div class="position-relative">
                <div class="d-none d-sm-block position-absolute top-50pct transform3dy-n50 right-15 z-index-3 pe-3">
                    <ul
                        class="d-flex flex-column social-icons social-icons-clean social-icons-icon-light social-icons-medium">
                        <li class="social-icons-instagram">
                            <a href="http://www.instagram.com/" class="text-color-quaternary" target="_blank"
                                title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="social-icons-x my-2">
                            <a href="http://www.twitter.com/" class="text-color-quaternary" target="_blank"
                                title="Twitter">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" class="text-color-quaternary" target="_blank"
                                title="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="home"
                    class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual custom-dots-style-1 dots-inside dots-horizontal-center show-dots-hover show-dots-xs dots-light nav-style-1 nav-inside nav-inside-plus nav-light nav-md nav-font-size-md show-nav-hover mb-0"
                    data-plugin-options="{'autoplayTimeout': 7000, 'autoplay': false}" style="height: 100vh;">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">

                            <!-- Carousel Slide 1 -->
                            <div class="owl-item position-relative" style="background-color: #383f48;">
                                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0 animated kenBurnsToRightTop"
                                    style="background-image: url(https://centralgrounds.b-cdn.net/wp-content/uploads/2020/11/commercial-grass-cutting-services-worcestershire-scaled.jpg); opacity: 0.3; background-size: cover; background-position: center; animation-duration: 20s;">
                                </div>
                                <div class="container position-relative z-index-3 h-100">
                                    <div class="row justify-content-start align-items-center h-100">
                                        <div class="col-lg-7 text-center text-sm-start mb-4 pb-5 pb-lg-0">
                                            <h2 class="text-color-light font-weight-semibold text-3 text-sm-4 line-height-1 positive-ls-2 mb-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1000">
                                                Reliable Lawn Care, Rooted in Quality
                                            </h2>
                                            <h1 class="d-inline-block text-color-light font-weight-bold text-11 text-sm-13 text-md-14 line-height-1 position-relative mb-3 pb-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1200">
                                                Grass Roots

                                            </h1>
                                            <p class="text-4 text-color-light w-sm-75pct pe-md-5 pe-lg-0 pe-xl-5 pb-3 mb-4 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1400"><strong>Grass Roots</strong> is a
                                                professional landscaping and lawn care business dedicated to maintaining
                                                clean, healthy, and well-presented outdoor spaces. We specialize in
                                                efficient, reliable grass cutting and disposal services for residential
                                                and commercial properties.

                                                Built on quality workmanship and attention to detail, Grass Roots
                                                ensures every lawn is trimmed, cleared, and left looking its best. </p>
                                            <a href="#who-we-are"
                                                class="btn btn-gradient custom-btn-effect-1 custom-border-radius-1 d-inline-flex align-items-center font-weight-semibold text-3-5 btn-px-5 btn-py-3 appear-animation"
                                                data-hash data-hash-offset="0" data-hash-offset-lg="32"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1600"
                                                data-appear-animation-duration="1.7s">
                                                GET STARTED
                                                <img width="15" height="15"
                                                    src="img/demos/one-page-agency/icons/arrow-down.svg"
                                                    alt="" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'removeClassAfterInit': 'fadeIn', 'extraClass': 'svg-fill-color-light position-relative bottom-1 ms-4'}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="owl-item position-relative" style="background-color: #383f48;">
                                <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0 animated kenBurnsToRightTop"
                                    style="background-image: url(/images/528741.jpg); opacity: 0.3; background-size: cover; background-position: center; animation-duration: 20s;">
                                </div>
                                <div class="container position-relative z-index-3 h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-lg-7 text-center mb-4 pb-5 pb-lg-0">
                                            <h2 class="text-color-light font-weight-semibold text-3 text-sm-4 line-height-1 positive-ls-2 mb-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1000">
                                                LEAVE YOUR LAWN CARE TO US,
                                            </h2>
                                            <h1 class="text-color-light font-weight-bold text-11 text-sm-13 text-md-14 line-height-1 position-relative mb-3 pb-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1200">
                                                Reliable Lawn Care, Rooted in Quality
                                            </h1>
                                            <p class="text-4 text-color-light px-md-5 pb-3 mx-md-5 mb-3 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1400"><strong>Grass Roots</strong> is a
                                                professional landscaping and lawn care business dedicated to maintaining
                                                clean, healthy, and well-presented outdoor spaces. We specialize in
                                                efficient, reliable grass cutting and disposal services for residential
                                                and commercial properties.

                                                Built on quality workmanship and attention to detail, Grass Roots
                                                ensures every lawn is trimmed, cleared, and left looking its best.</p>
                                            <a href="#who-we-are"
                                                class="btn btn-gradient custom-btn-effect-1 custom-border-radius-1 d-inline-flex align-items-center font-weight-semibold text-3-5 btn-px-5 btn-py-3 appear-animation"
                                                data-hash data-hash-offset="0" data-hash-offset-lg="32"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1600"
                                                data-appear-animation-duration="1.7s">
                                                GET STARTED
                                                <img width="15" height="15"
                                                    src="img/demos/one-page-agency/icons/arrow-down.svg"
                                                    alt="" data-icon
                                                    data-plugin-options="{'onlySVG': true, 'removeClassAfterInit': 'fadeIn', 'extraClass': 'svg-fill-color-light position-relative bottom-1 ms-4'}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="owl-dots mb-5">
                        <button role="button" class="owl-dot active">
                            <span></span>
                        </button>
                        <button role="button" class="owl-dot">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <section id="who-we-are" class="section section-height-3 bg-transparent border-0 m-0">
                <div class="container py-4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 pe-lg-5 mb-5 mb-lg-0">
                            <div class="overflow-hidden">
                                <h2 class="text-color-primary font-weight-semibold text-3 line-height-7 positive-ls-2 mb-0 appear-animation"
                                    data-appear-animation="maskUp">ABOUT GRASS ROOTS JM LIMITED</h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <h3 class="text-color-dark font-weight-bold text-transform-none line-height-1 text-10 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="200">Who We Are 🌱
                                </h3>
                            </div>
                            <p class="text-color-dark custom-font-secondary text-5-5 line-height-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                Grass Roots JM Limited is a trusted landscaping company serving Phoenix Park Village,
                                Kingston,
                                St. Andrew, and surrounding areas. We provide professional lawn care services including
                                precise grass cutting, trimming, bagging, and responsible disposal. Our goal is to keep
                                residential and commercial lawns healthy, clean, and beautifully maintained.
                            </p>
                            <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="600">
                                Our services are designed for all needs — from regular yard maintenance and small
                                residential trimming
                                to full-scale lawn cutting, bagging, and disposal solutions. With GrassRootsJM, you get
                                reliable,
                                affordable, and professional lawn care that makes a lasting impression.
                            </p>
                            <a href="#what-we-do"
                                class="d-inline-flex align-items-center text-color-primary font-weight-bold text-4 text-decoration-none custom-link-effect-1 appear-animation"
                                data-hash data-hash-offset="0" data-hash-offset-lg="32"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                Explore Our Lawn Services
                                <img width="15" height="15"
                                    src="img/demos/one-page-agency/icons/arrow-down.svg" alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'removeClassAfterInit': 'fadeIn', 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                        <div class="col-5 col-sm-7 col-md-12 col-lg-6 text-center">
                            <div class="position-relative d-inline-flex">
                                <img src="img/gallery/Capture.jpg"
                                    class="img-fluid rounded-circle box-shadow-5 position-absolute top-50pct transform3dy-n50 z-index-3"
                                    alt="Grass Roots JM team in Phoenix Park Village" style="right: 75%;" />
                                <img src="img/gallery/lawn-treatments-square-1024x1024.jpg"
                                    class="img-fluid rounded-circle box-shadow-5 z-index-2" width="260"
                                    alt="Professional lawn care in Kingston" />
                                <img src="img/gallery/Capture2.jpeg"
                                    class="img-fluid rounded-circle box-shadow-5 position-absolute top-50pct transform3dy-n50 z-index-1"
                                    alt="Residential lawn maintenance St. Andrew" style="left: 75%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- 
            <section class="section section-height-3 bg-gradient border-0 m-0 appear-animation"
                data-appear-animation="fadeIn">
                <div class="container py-3">
                    <div class="row counters text-center">
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
                            <img width="95" height="95" src="img/demos/one-page-agency/icons/bubble.svg"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mb-2'}" />
                            <div class="counter">
                                <strong class="text-color-light text-10 negative-ls-2" data-to="30000"
                                    data-append="+">0</strong>
                                <label
                                    class="text-color-light font-weight-medium text-3 opacity-6 mb-0 line-height-1">SUPPORT
                                    HOURS</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0 appear-animation"
                            data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="300">
                            <img width="95" height="95" src="img/demos/one-page-agency/icons/star.svg"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mb-2'}" />
                            <div class="counter">
                                <strong class="text-color-light text-10 negative-ls-2" data-to="10"
                                    data-append="+">0</strong>
                                <label
                                    class="text-color-light font-weight-medium text-3 opacity-6 mb-0 line-height-1">YEARS
                                    IN BUSINESS</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0 appear-animation"
                            data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="300">
                            <img width="95" height="95" src="img/demos/one-page-agency/icons/add-user.svg"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mb-2'}" />
                            <div class="counter">
                                <strong class="text-color-light text-10 negative-ls-2" data-to="40000"
                                    data-append="+">0</strong>
                                <label
                                    class="text-color-light font-weight-medium text-3 opacity-6 mb-0 line-height-1">HAPPY
                                    CLIENTS</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorterPlus"
                            data-appear-animation-delay="500">
                            <img width="95" height="95" src="img/demos/one-page-agency/icons/code.svg"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mb-2'}" />
                            <div class="counter">
                                <strong class="text-color-light text-10 negative-ls-2" data-to="7000"
                                    data-append="+">0</strong>
                                <label
                                    class="text-color-light font-weight-medium text-3 opacity-6 mb-0 line-height-1">DEVELOPMENT
                                    HOURS</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            <section id="what-we-do" class="section bg-transparent overflow-hidden border-0 m-0 pb-0">
                <div class="container pt-5 mt-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-xl-5 pe-lg-5 pe-xl-0 pb-lg-5 mb-5 mb-xl-0">
                            <h2 class="text-color-primary font-weight-semibold text-3 positive-ls-2 mb-0">OUR SERVICES
                            </h2>
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-10 mb-5">Lawn & Yard
                                Care 🌱</h3>
                            <div class="pe-5">

                                <!-- Lawn Cutting with Line Trimmers -->
                                <div class="d-flex">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-edit.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Lawn Cutting with Line Trimmers in
                                            Phoenix Park Village</h4>
                                        <p class="mb-4">
                                            Professional grass cutting using line trimmers for small yards, edges, and
                                            hard-to-reach areas.
                                            Clean, precise, and even finish for residential and commercial lawns in
                                            Kingston and Phoenix Park Village.
                                        </p>
                                    </div>
                                </div>

                                <!-- Full Lawn Cutting & Bagging -->
                                <div class="d-flex my-3">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-notebook.svg" alt=""
                                        data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Complete Lawn Cutting & Bagging
                                            Services</h4>
                                        <p class="mb-4">
                                            Full-service lawn mowing with clippings neatly bagged.
                                            Ideal for residential yards and commercial properties in Kingston and
                                            surrounding areas.
                                            Property left clean, tidy, and ready to enjoy.
                                        </p>
                                    </div>
                                </div>

                                <!-- Grass Cutting, Bagging & Disposal -->
                                <div class="d-flex">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-phone-tablet.svg" alt=""
                                        data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Grass Cutting, Bagging & Responsible
                                            Disposal</h4>
                                        <p class="mb-4">
                                            Grass is cut, bagged, and disposed of responsibly — no mess, no hassle.
                                            Perfect for after DIY lawn work or regular scheduled maintenance in Phoenix
                                            Park Village.
                                        </p>
                                    </div>
                                </div>

                                <!-- Yard Clean Up -->
                                <div class="d-flex my-3">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-notebook.svg" alt=""
                                        data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Yard Clean Up & Garden Maintenance
                                        </h4>
                                        <p class="mb-4">
                                            Removal of debris, pre-cut grass, and waste. Safe and responsible disposal
                                            ensures your yard looks neat and healthy.
                                            Ideal for small and large properties across Kingston and Phoenix Park
                                            Village.
                                        </p>
                                    </div>
                                </div>

                                <a href="#contact-form"
                                    class="d-inline-flex align-items-center text-color-primary font-weight-bold text-4 text-decoration-none custom-link-effect-1"
                                    data-hash>
                                    Contact Us for Lawn Care in Phoenix Park Village
                                    <img width="15" height="15"
                                        src="img/demos/one-page-agency/icons/arrow-down.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'removeClassAfterInit': 'fadeIn', 'extraClass': 'svg-fill-color-primary ms-2'}" />
                                </a>
                            </div>
                        </div>

                        <!-- Images -->
                        <div class="col-lg-5 col-xl-7 ps-0 ps-sm-5 pe-0 pt-lg-5 pt-xl-0 mt-lg-5 mt-xl-0">
                            <div class="position-relative">
                                <div class="position-absolute top-50pct transform3dy-n50 z-index-1"
                                    style="right: 80%;">
                                    <img src="/img/gallery/Capture3.jpeg" class="box-shadow-5 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"
                                        alt="" />
                                </div>
                                <img src="img/gallery/wefjpewfjowf0392.jpg"
                                    class="img-fluid box-shadow-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--

            <section class="section border-0 m-0">
                <div class="container py-3">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-primary font-weight-semibold text-3 positive-ls-2 mb-0">HAPPY CLIENTS
                            </h2>
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-10 mb-5">Testimonials
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="owl-carousel custom-dots-style-1 dots-dark mb-0"
                                data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'autoplay': true, 'autoplayTimeout': 7000, 'loop': true, 'dots': true, 'nav': false}">
                                <div>
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-with-quotes testimonial-remove-right-quote testimonial-style-2 text-start mb-0">
                                        <blockquote class="pt-0">
                                            <p class="text-color-dark font-weight-medium text-5 line-height-6">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa
                                                esse eius provident qui animi. </p>
                                            <div class="divider divider-small divider-small-sm ps-4 ms-3">
                                                <hr>
                                            </div>
                                            <div class="testimonial-author ps-4 ms-3">
                                                <p class="alternative-font-4 text-start">
                                                    <strong class="font-weight-medium text-color-dark opacity-9">John
                                                        Albert Doe</strong>
                                                </p>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-with-quotes testimonial-remove-right-quote testimonial-style-2 text-start mb-0">
                                        <blockquote class="pt-0">
                                            <p class="text-color-dark font-weight-medium text-5 line-height-6">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa
                                                esse eius provident qui animi. </p>
                                            <div class="divider divider-small divider-small-sm ps-4 ms-3">
                                                <hr>
                                            </div>
                                            <div class="testimonial-author ps-4 ms-3">
                                                <p class="alternative-font-4 text-start">
                                                    <strong class="font-weight-medium text-color-dark opacity-9">John
                                                        Albert Doe</strong>
                                                </p>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class="custom-testimonial-style-1 testimonial testimonial-with-quotes testimonial-remove-right-quote testimonial-style-2 text-start mb-0">
                                        <blockquote class="pt-0">
                                            <p class="text-color-dark font-weight-medium text-5 line-height-6">Lorem
                                                ipsum dolor sit amet, consectetur adipisicing elit. Ducimus dicta culpa
                                                esse eius provident qui animi. </p>
                                            <div class="divider divider-small divider-small-sm ps-4 ms-3">
                                                <hr>
                                            </div>
                                            <div class="testimonial-author ps-4 ms-3">
                                                <p class="alternative-font-4 text-start">
                                                    <strong class="font-weight-medium text-color-dark opacity-9">John
                                                        Albert Doe</strong>
                                                </p>
                                            </div>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}


            <!-- <section class="section parallax border-0 p-0 m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 5, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}" data-image-src="img/blank.gif">
     <div class="d-flex justify-content-center">
      <div class="scrollable-parallax-wrapper bg-gradient overflow-hidden">
       <div class="container custom-container-style-3 custom-container-position-1 py-5 mx-0">
        <div class="row align-items-center">
         <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="img/demos/one-page-agency/mockup.png" alt="" class="img-fluid" />
         </div>
         <div class="col-lg-6">
          <h3 class="text-color-light font-weight-semibold text-3 positive-ls-2 mb-0">GET READY NOW</h3>
          <h2 class="text-color-light font-weight-bold text-transform-none text-10 mb-3">Purchase Porto</h2>
          <p class="text-color-light custom-font-secondary text-5-5 line-height-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit morbi imperdiet libero.</p>
          <p class="text-color-light font-weight-light text-3-5 pb-1 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur lorem ipsum dolor. </p>
          <a href="#" class="btn btn-dark custom-border-radius-1 font-weight-semibold box-shadow-4 text-3-5 btn-px-5 py-3">PURCHASE NOW</a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </section> -->


            <!-- <section class="section bg-transparent border-0 m-0">
     <div class="container py-4">
      <div class="row align-items-center text-center">
       <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
        <img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;" />
       </div>
       <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
        <img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;" />
       </div>
       <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
        <img src="img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;" />
       </div>
       <div class="col-sm-4 col-xl-2 mb-5 mb-sm-0">
        <img src="img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;" />
       </div>
       <div class="col-sm-4 col-xl-2 mb-5 mb-sm-0">
        <img src="img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;" />
       </div>
       <div class="col-sm-4 col-xl-2">
        <img src="img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;" />
       </div>
      </div>
     </div>
    </section> -->
            <div id="contact-form" class="map-above" style="min-height: 600px;">

                <section class="map-above-content section border-0 m-0 p-0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="bg-dark p-5 col-md-8 col-lg-6">
                                {{-- <div class="bg-dark p-5"> --}}


                                <div id="map-container">
                                    <div id="map"></div>
                                </div>

                                <div id="fullscreenMap">
                                    <div id="fullMap" style="height:100%; width:100%;"></div>
                                </div>
                                <a href="#booking" id="selectLocationBtn"
                                    class="d-inline-flex align-items-center text-color-primary font-weight-bold text-4 text-decoration-none custom-link-effect-1 appear-animation"
                                    data-hash data-hash-offset="0" data-hash-offset-lg="32"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                    Choose Your Location
                                </a>
                                <form class="contact-form form-fields-size-md form-style-3 form-errors-light mb-2"
                                    id="service-form" enctype="multipart/form-data">

                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger mt-3">
                                            <strong>Please fix the following errors:</strong>
                                            <ul class="mb-0 mt-2">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="contact-form-success alert alert-success d-none mt-4">
                                        <strong>Success!</strong> Your quote has been calculated.
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="total-cost">Customer Name:</label>
                                            <input type="text"
                                                class="form-control @error('customer_name') is-invalid @enderror"
                                                id="customer_name" name="customer_name"
                                                value="{{ old('customer_name') }}">

                                            @error('customer_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="form-group col">
                                            <label for="total-cost">Customer Email:</label>
                                            <input type="email"
                                                class="form-control @error('customer_email') is-invalid @enderror"
                                                id="customer_email" name="customer_email"
                                                value="{{ old('customer_email') }}">

                                            @error('customer_email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="total-cost">Lot Number:</label>
                                            <input type="number"
                                                class="form-control @error('lot_number') is-invalid @enderror"
                                                id="lot_number" name="lot_number" value="{{ old('lot_number') }}">

                                            @error('lot_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <div class="col">
                                            <label class="form-label d-block">Service Type:</label>
                                            {{-- <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="service_type" id="monthly" value="monthly">
                                                    <label class="form-check-label" for="monthly">Monthly
                                                        Subscription</label>
                                                </div> --}}
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="service_type"
                                                    id="one_time" value="one_time" checked>
                                                <label class="form-check-label" for="one_time">One Time
                                                    Job</label>
                                            </div>
                                            @error('service_type')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- Service Options -->
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="services">Select a Service</label>
                                            {{-- <div class="dropdown">
                                                <button
                                                    class="btn btn-gradient custom-btn-effect-1 custom-border-radius-1 dropdown-toggle w-100 text-start"
                                                    type="button" id="servicesDropdown" data-bs-toggle="dropdown">
                                                    Select A Service
                                                </button>
                                                <ul class="dropdown-menu w-100 p-3"
                                                    aria-labelledby="servicesDropdown">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input service-checkbox"
                                                                type="checkbox" name="services[]"
                                                                value="cutting-line-trimmers" id="service1">
                                                            <label class="form-check-label" for="service1">
                                                                🌱 Grass Cutting Only
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input service-checkbox"
                                                                type="checkbox" name="services[]"
                                                                value="cutting-bagging" id="service1">
                                                            <label class="form-check-label" for="service2">
                                                                🌱 Grass Cutting & Bagging Only
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input service-checkbox"
                                                                type="checkbox" name="services[]"
                                                                value="cutting-bagging-disposal" id="service1">
                                                            <label class="form-check-label" for="service3">
                                                                🌱 Grass Cutting And Disposal Only
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input service-checkbox"
                                                                type="checkbox" name="services[]"
                                                                value="bagging-disposal" id="service1">
                                                            <label class="form-check-label" for="service4">
                                                                🌱 Bagging & Disposal Only
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input service-checkbox"
                                                                type="checkbox" name="services[]"
                                                                value="disposal" id="service1">
                                                            <label class="form-check-label" for="service5">
                                                                🌱 Disposal Only
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> --}}
                                            <select class="form-control" id="services" name="services">
                                                <option value="" selected disabled>Select A Service</option>
                                                <option value="cutting-line-trimmers">🌱 Grass Cutting Only
                                                </option>
                                                <option value="cutting-bagging">🌱 Grass Cutting & Bagging Only
                                                </option>
                                                <option value="cutting-bagging-disposal">🌱 Grass Cutting And
                                                    Disposal Only</option>
                                                <option value="bagging-disposal">🌱 Bagging & Disposal Only
                                                </option>
                                                <option value="disposal">🌱 Disposal Only</option>
                                            </select>
                                            @error('services')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <label for="latitude">Latitude:</label> --}}
                                    <input type="hidden" id="latitude" name="latitude" readonly>


                                    {{-- <label for="longitude">Longitude:</label> --}}
                                    <input type="hidden" id="longitude" name="longitude" readonly>


                                    <!-- Total cost and job date -->
                                    <div class="row mt-3">
                                        <div class="form-group col">
                                            <label for="total-cost">Total (USD) :</label>
                                            <input type="number" class="form-control" id="total-cost"
                                                name="total_cost" readonly>
                                        </div>

                                        <div class="form-group col">
                                            <label for="job_date">Preferred Job Date:</label>
                                            <input type="date"
                                                class="form-control @error('job_date') is-invalid @enderror"
                                                id="job_date" name="job_date" min="" max=""
                                                value="{{ old('job_date') }}">
                                            @error('job_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit"
                                                class="btn btn-gradient custom-border-radius-1 font-weight-semibold box-shadow-4 text-3-5 btn-px-5 btn-py-3"
                                                data-loading-text="Loading...">
                                                <span class="px-3">BOOK NOW</span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- PayPal Button container -->
                                    <div id="paypal-button-container" class="mt-3"></div>

                                </form>

                                <!-- PayPal JS SDK -->
                                <script
                                    src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_LIVE_CLIENT_ID') }}&currency={{ env('PAYPAL_CURRENCY') }}">
                                </script>

                                {{-- Paypal Dev
                                <script
                                    src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}&currency={{ env('PAYPAL_CURRENCY') }}">
                                </script> --}}
                                {{-- Job Date --}}
                                <script>
                                    document.addEventListener("DOMContentLoaded", function() {
                                        const jobDateInput = document.getElementById("job_date");

                                        // List of blocked dates (example dates)
                                        const blockedDates = [
                                            '2026-03-21',
                                            '2026-03-22',
                                            '2026-03-23',
                                            '2026-03-24',
                                            '2026-03-25',
                                            '2026-03-26',
                                            '2026-03-27',
                                            '2026-03-30'

                                        ];

                                        // Function to check if a date is blocked
                                        function isBlocked(date) {
                                            return blockedDates.includes(date);
                                        }

                                        // Function to set restrictions on the date input
                                        function updateDateInput() {
                                            const today = new Date();
                                            today.setHours(0, 0, 0, 0); // Reset time part for accurate comparison

                                            // Set min to today (or next Monday)
                                            const nextMonday = new Date(today);
                                            const daysUntilMonday = (1 + 7 - today.getDay()) % 7; // How many days until next Monday
                                            nextMonday.setDate(today.getDate() + daysUntilMonday);

                                            jobDateInput.min = nextMonday.toISOString().split('T')[0]; // Min set to next available Monday

                                            // Clear blocked dates by setting an empty list of options
                                            jobDateInput.value = ""; // Reset the selection
                                        }

                                        // Function to dynamically disable blocked dates
                                        function blockDates() {
                                            // Clear the invalid options if they exist
                                            jobDateInput.setCustomValidity(''); // Clear any validity set

                                            if (jobDateInput.value) {
                                                const selectedDate = new Date(jobDateInput.value);
                                                selectedDate.setHours(0, 0, 0, 0);
                                                if (isBlocked(selectedDate.toISOString().split('T')[0])) {
                                                    jobDateInput.setCustomValidity("Selected date is not available.");
                                                    alert("Selected date is not available.");
                                                    jobDateInput.value = "";
                                                }
                                            }
                                        }

                                        // Initialize date restrictions and check for blocked dates
                                        updateDateInput();

                                        // Event listener to handle changes on the date input
                                        jobDateInput.addEventListener('change', blockDates);
                                    });
                                </script>


                                <script>
                                    // Prevent default form submit
                                    document.getElementById('service-form').addEventListener('submit', function(e) {
                                        e.preventDefault();

                                        const submitBtn = this.querySelector('button[type="submit"]');

                                        // Disable the button and show temporary text
                                        submitBtn.disabled = true;
                                        const originalText = submitBtn.innerHTML;
                                        submitBtn.innerHTML = 'Creating your booking...';

                                        createPayPalOrder(submitBtn, originalText);
                                    });

                                    function createPayPalOrder(submitBtn, originalText) {
                                        const form = document.getElementById('service-form');

                                        // Get selected service from the dropdown
                                        const selectedService = form.querySelector('#services').value;

                                        const data = {
                                            customer_name: form.customer_name.value,
                                            customer_email: form.customer_email.value,
                                            services: selectedService, // Now a single value instead of an array
                                            latitude: form.latitude.value,
                                            longitude: form.longitude.value,
                                            lot_number: form.lot_number.value,
                                            service_type: form.service_type.value,
                                            job_date: form.job_date.value,
                                            total_cost: form.total_cost.value
                                        };

                                        // Clear previous error messages
                                        form.querySelectorAll('.invalid-feedback').forEach(el => el.remove());
                                        form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));

                                        fetch("{{ route('checkout.create-order') }}", {
                                                method: 'POST',
                                                headers: {
                                                    'Content-Type': 'application/json',
                                                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                                                },
                                                body: JSON.stringify(data)
                                            })
                                            .then(async res => {
                                                if (res.status === 422) {
                                                    // Validation errors
                                                    const json = await res.json();
                                                    for (const field in json.errors) {
                                                        const input = form.querySelector(`[name="${field}"]`);
                                                        if (input) {
                                                            input.classList.add('is-invalid');

                                                            const errorDiv = document.createElement('div');
                                                            errorDiv.className = 'invalid-feedback';
                                                            errorDiv.innerText = json.errors[field][0];
                                                            input.parentNode.appendChild(errorDiv);
                                                        }
                                                    }
                                                    submitBtn.disabled = false;
                                                    submitBtn.innerHTML = originalText;
                                                } else {
                                                    return res.json();
                                                }
                                            })
                                            .then(response => {
                                                if (response && response.orderID) {
                                                    handlePayPalButtons(response);
                                                } else if (!response) {
                                                    submitBtn.disabled = false;
                                                    submitBtn.innerHTML = originalText;
                                                    Swal.fire({
                                                        icon: 'error',
                                                        title: 'Booking Failed',
                                                        text: 'Unable to create your booking. Please try again.'
                                                    });
                                                }
                                            })
                                            .catch(err => {
                                                submitBtn.disabled = false;
                                                submitBtn.innerHTML = originalText;
                                                Swal.fire({
                                                    icon: 'error',
                                                    title: 'Booking Failed',
                                                    text: 'Network error or server error. Please complete all required fields and try again.'
                                                });
                                                console.error(err);
                                            });
                                    }

                                    function handlePayPalButtons(response) {
                                        if (response.orderID) {
                                            // Hide original submit button
                                            document.querySelector('#service-form button[type="submit"]').style.display = 'none';

                                            paypal.Buttons({
                                                createOrder: () => response.orderID,
                                                onApprove: (details) => {
                                                    return fetch('/checkout/capture-order', {
                                                            method: 'POST',
                                                            headers: {
                                                                'Content-Type': 'application/json',
                                                                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                                                            },
                                                            body: JSON.stringify({
                                                                orderID: response.orderID
                                                            })
                                                        })
                                                        .then(res => res.json())
                                                        .then(res => {
                                                            if (res.status === 'success') {
                                                                Swal.fire({
                                                                    icon: 'success',
                                                                    title: 'Payment Completed',
                                                                    text: 'Your booking (ID: ' + res.booking_id +
                                                                        ') is confirmed!',
                                                                    confirmButtonText: 'OK'
                                                                }).then(() => {
                                                                    location.reload(); // Or redirect to confirmation page
                                                                });
                                                            } else {
                                                                Swal.fire({
                                                                    icon: 'error',
                                                                    title: 'Payment Failed',
                                                                    text: 'Something went wrong. Please try again later.',
                                                                }).then(() => {
                                                                    location.reload(); // Or redirect to confirmation page
                                                                });
                                                            }
                                                        });
                                                }
                                            }).render('#paypal-button-container');
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Order Creation Failed',
                                                text: 'Unable to create PayPal order. Please try again later.'
                                            });
                                        }
                                    }
                                </script>


                                {{-- </div> --}}
                            </div>
                            <div class="col-md-4 col-lg-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-primary font-weight-semibold text-3 line-height-7 positive-ls-2 mb-0 appear-animation"
                                        data-appear-animation="maskUp">BOOK YOUR LAWN SERVICE IN PHOENIX PARK VILLAGE
                                        TODAY</h2>
                                </div>
                                <div class="overflow-hidden mb-3">
                                    <h3 class="text-color-dark font-weight-bold text-transform-none line-height-1 text-10 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="200">Fast,
                                        Reliable Lawn Care in Kingston</h3>
                                </div>
                                <p class="text-color-dark custom-font-secondary text-5-5 line-height-4 appear-animation"
                                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                    Grass Roots JM Limited is your trusted landscaping partner, offering professional
                                    lawn cutting, trimming,
                                    bagging, and disposal services. We ensure your yard in Phoenix Park Village and
                                    Kingston stays clean,
                                    healthy, and pristine — hassle-free.
                                </p>
                                <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="600">
                                    Current services include precise lawn cutting with line trimmers, full bagging, and
                                    responsible disposal.
                                    Additional premium services such as complete yard maintenance, seasonal care, and
                                    organic lawn fertilization
                                    are coming soon. Book now to secure your spot and experience top-notch local lawn
                                    care!
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <footer id="footer" class="border-0 m-0 p-0">
        <div class="footer-copyright bg-color-light py-5">
            <div class="container">
                <div class="row align-items-center justify-content-center justify-content-md-between">
                    <div class="col-auto">
                        <div class="d-flex align-items-center">
                            <div
                                class="d-none d-sm-inline-flex align-items-center border border-top-0 border-bottom-0 border-start-0 pe-4">
                                <i class="far fa-clock text-4"></i>
                                <span class="font-weight-medium mx-2"> Mon - Sat 9:00am - 6:00pm</span>
                            </div>
                            <ul class="social-icons social-icons-clean social-icons-medium ms-sm-4">
                                <li class="social-icons-facebook">
                                    <a href="http://www.facebook.com/" class="text-color-quaternary" target="_blank"
                                        title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="social-icons-x">
                                    <a href="http://www.twitter.com/" class="text-color-quaternary" target="_blank"
                                        title="Twitter">
                                        <i class="fab fa-x-twitter"></i>
                                    </a>
                                </li>
                                <li class="social-icons-linkedin">
                                    <a href="http://www.linkedin.com/" class="text-color-quaternary" target="_blank"
                                        title="Linkedin">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <p class="text-3-5">Copyright © 2025. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- <Formify -->
    <script>
        document.querySelectorAll('.service-checkbox').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {

                let selected = [];
                document.querySelectorAll('.service-checkbox:checked').forEach(function(c) {
                    selected.push(c.nextElementSibling.innerText);
                });

                let button = document.getElementById('servicesDropdown');

                button.innerText = selected.length ?
                    selected.join(', ') :
                    'Choose required service...';
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const dropdown = document.getElementById("services");
            const costField = document.getElementById("total-cost");

            const prices = {
                "cutting-line-trimmers": 60.00,
                "cutting-bagging": 68.99,
                "cutting-bagging-disposal": 74.99,
                "bagging-disposal": 45.99,
                "disposal": 25.88,
            };

            function calculateTotalCost() {
                const selectedValue = dropdown.value;

                let totalCost = 0;
                // Calculate total cost based on the selected value
                if (selectedValue) {
                    totalCost = prices[selectedValue] || 0; // Fallback to 0 if no matching price
                }

                // Update cost field
                costField.value = totalCost.toFixed(2);

                // Update dropdown button text
                const dropdownButton = document.getElementById('servicesDropdown');
                if (selectedValue) {
                    dropdownButton.innerText = dropdown.options[dropdown.selectedIndex]
                        .innerText; // Show selected service
                } else {
                    dropdownButton.innerText = "Select A Service";
                }
            }

            // Add event listener to dropdown
            dropdown.addEventListener('change', calculateTotalCost);

            // Initial calculation
            calculateTotalCost();
        });
    </script>

    <!-- Vendor -->
    <script src="vendor/plugins/js/plugins.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js"></script>

    <!-- Demo -->
    <script src="js/demos/demo-one-page-agency.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script>

    <script>
        const phoenixParkBoundary = {
            "type": "Feature",
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [-76.945056, 17.967626],
                        [-76.926934, 17.949319],
                        [-76.923110, 17.952443],
                        [-76.929931, 17.960676],
                        [-76.933247, 17.963792],
                        [-76.936359, 17.965895],
                        [-76.940372, 17.969867],
                        [-76.942173, 17.969050],
                        [-76.945056, 17.967626]
                    ]
                ]
            }
        };

        // Initialize small map
        const map = L.map('map').setView([17.959, -76.936], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        L.geoJSON(phoenixParkBoundary, {
            style: {
                color: 'orange',
                fillColor: '#eaeb0b',
                fillOpacity: 0.4
            }
        }).addTo(map);

        let marker;

        // Fullscreen map setup
        const fullscreenMapDiv = document.getElementById('fullscreenMap');
        let fullMap;

        // Button to open full screen
        document.getElementById('selectLocationBtn').addEventListener('click', () => {
            fullscreenMapDiv.style.display = 'block';

            // Initialize fullscreen map only once
            if (!fullMap) {
                fullMap = L.map('fullMap').setView([17.959, -76.936], 16);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(fullMap);
                L.geoJSON(phoenixParkBoundary, {
                    style: {
                        color: 'orange',
                        fillColor: '#eaeb0b',
                        fillOpacity: 0.4
                    }
                }).addTo(fullMap);

                // Click handler
                fullMap.on('click', function(e) {
                    const latlng = e.latlng;
                    if (turf.booleanPointInPolygon([latlng.lng, latlng.lat], phoenixParkBoundary)) {
                        if (marker) marker.setLatLng(latlng);
                        else marker = L.marker(latlng).addTo(map); // marker stays synced to small map

                        // Update form fields
                        document.getElementById('latitude').value = latlng.lat.toFixed(6);
                        document.getElementById('longitude').value = latlng.lng.toFixed(6);

                        // Sync small map marker
                        if (map.hasLayer(marker)) marker.setLatLng(latlng);
                        else marker.addTo(map);

                        fullscreenMapDiv.style.display = 'none'; // close fullscreen after selection
                    } else {
                        alert("Please select a location within our service zone!");
                    }
                });
            }
        });
    </script>
</body>

</html>
