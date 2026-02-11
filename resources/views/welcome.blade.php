<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Grass Roots |</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Porto - Multipurpose Website Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLora:400,500,700%7CHandlee&display=swap&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">

    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-one-page-agency.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-one-page-agency.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

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
                                        <img alt="Porto Grass Roots" src="img/demos/one-page-agency/logo.png">
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
                                                        <a class="nav-link" href="#googlemaps" data-hash>
                                                            Book Now
                                                        </a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a class="nav-link" href="#googlemaps" data-hash>
                                                            Contact Us
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (Route::has('login'))

                                                    @auth
                                                        <li>
                                                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                                                Dashboard
                                                            </a>
                                                        </li>
                                                    @else
                                                        <li><a href="{{ route('login') }}" data-hash data-hash-offset="0"
                                                                data-hash-offset-lg="32" class="nav-link">
                                                                Log in
                                                            </a>
                                                        </li>

                                                        @if (Route::has('register'))
                                                            <li> <a href="{{ route('register') }}" data-hash
                                                                    data-hash-offset="0" data-hash-offset-lg="32"
                                                                    class="nav-link">
                                                                    Register
                                                                </a>
                                                            </li>
                                                        @endif
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
                                        class="text-color-light font-weight-semibold opacity-hover-9 text-decoration-none">(800)
                                        123-4567</a>
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

                            {{-- <!-- Carousel Slide 2 -->
                            <div class="owl-item position-relative"
                                style="background-image: url(img/demos/one-page-agency/slides/slide-2.jpg); background-size: cover; background-position: center;">
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
                                                Creative Web Design
                                            </h1>
                                            <p class="text-4 text-color-grey px-md-5 pb-3 mx-md-5 mb-3 appear-animation"
                                                data-appear-animation="fadeInUpShorter"
                                                data-appear-animation-delay="1400">Porto is simply the best choice for
                                                your new website. The most complete package in the world. </p>
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
                            </div> --}}

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
                                    data-appear-animation="maskUp">ABOUT GRASS ROOTS</h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <h3 class="text-color-dark font-weight-bold text-transform-none line-height-1 text-10 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="200">Who We Are</h3>
                            </div>
                            <p class="text-color-dark custom-font-secondary text-5-5 line-height-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Grass Roots
                                is a landscaping business focused on delivering dependable and affordable lawn care
                                services. We understand that a well-maintained yard makes a lasting impression, which is
                                why we take pride in precision cutting, clean finishes, and responsible grass disposal.
                            </p>
                            <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="600">Our services are designed to meet different customer
                                needs—from basic lawn trimming to complete grass cutting, bagging, and disposal
                                solutions.</p>
                            <a href="#what-we-do"
                                class="d-inline-flex align-items-center text-color-primary font-weight-bold text-4 text-decoration-none custom-link-effect-1 appear-animation"
                                data-hash data-hash-offset="0" data-hash-offset-lg="32"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                                Find Out More
                                <img width="15" height="15"
                                    src="img/demos/one-page-agency/icons/arrow-down.svg" alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'removeClassAfterInit': 'fadeIn', 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                        <div class="col-5 col-sm-7 col-md-12 col-lg-6 text-center">
                            <div class="position-relative d-inline-flex">
                                <img src="img/gallery/Capture.PNG"
                                    class="img-fluid rounded-circle box-shadow-5 position-absolute top-50pct transform3dy-n50 z-index-3"
                                    alt="" style="right: 75%;" />
                                <img src="img/gallery/lawn-treatments-square-1024x1024.jpg"
                                    class="img-fluid rounded-circle box-shadow-5 z-index-2" width="260"
                                    alt="" />
                                <img src="img/gallery/Capture1.PNG"
                                    class="img-fluid rounded-circle box-shadow-5 position-absolute top-50pct transform3dy-n50 z-index-1"
                                    alt="" style="left: 75%;" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
            </section>

            <section id="what-we-do" class="section bg-transparent overflow-hidden border-0 m-0 pb-0">
                <div class="container pt-5 mt-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-xl-5 pe-lg-5 pe-xl-0 pb-lg-5 mb-5 mb-xl-0">
                            <h2 class="text-color-primary font-weight-semibold text-3 positive-ls-2 mb-0">OUR SERVICES
                            </h2>
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-10 mb-5">What We Do 🌱
                            </h3>
                            <div class="pe-5">
                                <div class="d-flex">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-edit.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Lawn Cutting With Line Trimmers</h4>
                                        <p class="mb-4">Precise grass cutting using professional line trimmers,
                                            Ideal for small yards, edges, and hard-to-reach areas,
                                            Clean and even finish</p>
                                    </div>
                                </div>
                                <div class="d-flex my-3">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-notebook.svg" alt=""
                                        data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Cutting and Bagging</h4>
                                        <p class="mb-4">Full lawn cutting service, Grass clippings neatly bagged,
                                            Property left clean and tidy</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-phone-tablet.svg" alt=""
                                        data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Cutting, Bagging, and Disposal</h4>
                                        <p class="mb-4">Grass cut, bagged, and responsibly disposed of. No mess, no
                                            hassle.
                                        </p>
                                    </div>
                                </div>
                                <div class="d-flex my-3">
                                    <img width="65" height="65"
                                        src="img/demos/one-page-agency/icons/seo-notebook.svg" alt=""
                                        data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
                                    <div class="ms-4">
                                        <h4 class="font-weight-bold text-5 mb-2">Bagging and Disposal of Grass Cuttings
                                        </h4>
                                        <p class="mb-4">* Removal of pre-cut grass clippings, Safe and responsible
                                            disposal. Ideal after DIY lawn maintenance</p>
                                    </div>
                                </div>
                                <a href="#googlemaps"
                                    class="d-inline-flex align-items-center text-color-primary font-weight-bold text-4 text-decoration-none custom-link-effect-1"
                                    data-hash>
                                    Contact Us
                                    <img width="15" height="15"
                                        src="img/demos/one-page-agency/icons/arrow-down.svg" alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'removeClassAfterInit': 'fadeIn', 'extraClass': 'svg-fill-color-primary ms-2'}" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-xl-7 ps-0 ps-sm-5 pe-0 pt-lg-5 pt-xl-0 mt-lg-5 mt-xl-0">
                            <div class="position-relative">
                                <div class="position-absolute top-50pct transform3dy-n50 z-index-1"
                                    style="right: 80%;">
                                    <img src="/img/gallery/Capture1.PNG"
                                        class="box-shadow-5 appear-animation" data-appear-animation="fadeInUpShorter"
                                        data-appear-animation-delay="300" alt="" />
                                </div>
                                <img src="img/gallery/wefjpewfjowf0392.jpg"
                                    class="img-fluid box-shadow-5 appear-animation"
                                    data-appear-animation="fadeInUpShorter" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
            </section>


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

            <div class="map-above" style="min-height: 600px;">

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div id="googlemaps" class="map-above-map google-map m-0" style="min-height: 600px;"
                    data-spy-offset="20"></div>

                <section class="map-above-content section border-0 m-0 p-0">
                    <div class="container pt-3 pt-sm-5 pt-md-0">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <div class="bg-dark p-5">
                                    {{-- <div class="d-flex mt-4 mb-4">
                                        <img width="40" height="40"
                                            src="img/demos/one-page-agency/icons/location.svg" alt=""
                                            data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light mt-1'}" />
                                        <p class="text-color-light ms-2 mb-0">
                                            <strong class="d-block text-5 mb-1">Kingston, Jamaica</strong>
                                            <a href="#"
                                                class="d-inline-block text-color-light text-decoration-underline-2 font-weight-semibold text-3-5 opacity-hover-9">GET
                                                DIRECTIONS</a>
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center pb-2 mb-4">
                                        <img width="40" height="40"
                                            src="img/demos/one-page-agency/icons/phone.svg" alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                        <a href="tel:1234657890"
                                            class="d-inline-block text-color-light font-weight-bold text-decoration-none text-4 opacity-hover-9 ms-2">(876)
                                            419-8266</a>
                                    </div> --}}
                                    <form class="contact-form form-fields-size-md form-style-3 form-errors-light mb-2"
                                        action="{{ route('stripe-checkout') }}" method="POST" id="service-form">
                                        @csrf
                                        <div class="contact-form-success alert alert-success d-none mt-4">
                                            <strong>Success!</strong> Your quote has been calculated.
                                        </div>

                                        <div class="contact-form-error alert ale<rt-danger d-none mt-4">
                                            <strong>Error!</strong> There was an error calculating the cost.
                                            <span class="mail-error-message text-1 d-block"></span>
                                        </div>
                                        <!-- Customer KYC -->
                                        <br>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="total-cost">Customer Name:</label>
                                                <input type="text" class="form-control" id="customer_name"
                                                    name="customer_name">
                                            </div>
                                            <div class="form-group col">
                                                <label for="total-cost">Customer Email:</label>
                                                <input type="email" class="form-control" id="customer_email"
                                                    name="customer_email">
                                            </div>
                                        </div>


                                        <!-- Service Options -->
                                        <style>
                                            .optionspd {
                                                padding: 15px;
                                            }
                                        </style>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="services">Select Services:</label>
                                                <select style="height: 100%" name="services[]" id="services"
                                                    class="form-control" multiple required>
                                                    <option disabled class="optionspd" value="cutting-line-trimmers">🌱 Lawn
                                                        Cutting with Line Trimmers <strong>(Coming Soon)</strong></option>
                                                    <option disabled class="optionspd" value="cutting-bagging">🌱 Cutting and
                                                        Bagging <strong>(Coming Soon)</strong></option>
                                                    <option disabled class="optionspd" value="cutting-bagging-disposal">🌱
                                                        Cutting, Bagging, and Disposal <strong>(Coming Soon)</strong></option>
                                                    <option class="optionspd" value="bagging-disposal">🌱 Bagging and
                                                        Disposal of Grass Cuttings</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Google Map Location -->
                                        <!-- <div class="row">
            <div class="form-group col">
             <label for="location">Select Location:</label>
             <input type="text" class="form-control" id="location" name="location" placeholder="Enter your address or select on the map" required>
             <div id="map" style="height: 300px;"></div>
             <input type="hidden" id="latitude" name="latitude">
             <input type="hidden" id="longitude" name="longitude">
            </div>
           </div> -->

                                        <!-- Calculated Total Cost -->
                                        <br>
                                        <div class="row mt-3">
                                            <div class="col">
                                                <label class="form-label d-block">Service Type:</label>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="service_type" id="monthly" value="monthly">
                                                    <label class="form-check-label" for="monthly">
                                                        Monthly Subscription
                                                    </label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="service_type" id="one_time" value="one_time">
                                                    <label class="form-check-label" for="one_time">
                                                        One Time Job
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>



                                        <div class="row mt-3">
                                            <div class="form-group col">
                                                <label for="total-cost">Estimated Cost:</label>
                                                <input type="text" class="form-control" id="total-cost"
                                                    name="total_cost" readonly>
                                            </div>
                                            <div class="form-group col">
                                                <label for="job_date">Preferred Job Date:</label>
                                                <input type="date" class="form-control" id="job_date"
                                                    name="job_date" placeholder="Select a date">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col">
                                                <button type="submit"
                                                    class="btn btn-gradient custom-border-radius-1 font-weight-semibold box-shadow-4 text-3-5 btn-px-5 btn-py-3"
                                                    data-loading-text="Loading...">
                                                    <span class="px-3">BOOK NOW</span>
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                    <!-- Load Google Maps API -->
                                    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places&callback=initMap"
                                        async defer></script>

                                </div>
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
        let map;
        let geocoder;
        let marker;
        let selectedServices = [];
        const industryStandardRate = 100; // Assume industry standard is $100 for 5000 sq ft

        // Initialize the Google Maps API with autocomplete for the location input field
        function initMap() {
            geocoder = new google.maps.Geocoder();

            // Set default map position
            const mapOptions = {
                center: {
                    lat: 37.7749,
                    lng: -122.4194
                }, // Default: San Francisco
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('map'), mapOptions);

            // Initialize autocomplete
            const input = document.getElementById('location');
            const autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            autocomplete.addListener('place_changed', function() {
                const place = autocomplete.getPlace();
                if (place.geometry) {
                    const lat = place.geometry.location.lat();
                    const lng = place.geometry.location.lng();
                    document.getElementById('latitude').value = lat;
                    document.getElementById('longitude').value = lng;

                    map.setCenter(place.geometry.location);
                    marker.setPosition(place.geometry.location);
                }
            });

            // Allow user to place a marker on the map
            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                position: map.getCenter()
            });

            marker.addListener('dragend', function() {
                const position = marker.getPosition();
                document.getElementById('latitude').value = position.lat();
                document.getElementById('longitude').value = position.lng();
            });
        }

        // Service selection handling and cost calculation
        document.getElementById('services').addEventListener('change', function() {
            selectedServices = Array.from(this.selectedOptions).map(option => option.value);
            calculateTotalCost();
        });

        function calculateTotalCost() {
            let baseCost = industryStandardRate; // Base cost for 5000 sq ft
            let totalCost = 0;

            // Calculate cost based on selected services
            if (selectedServices.includes('cutting-line-trimmers')) totalCost += 20; // Example pricing
            if (selectedServices.includes('cutting-bagging')) totalCost += 25;
            if (selectedServices.includes('cutting-bagging-disposal')) totalCost += 60;
            if (selectedServices.includes('bagging-disposal')) totalCost += 30;

            // Apply discount (half of the industry standard)
            totalCost = totalCost / '0.25';

            document.getElementById('total-cost').value = `$${totalCost.toFixed(2) * 150}`;
        }

        // Trigger form submit
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

    <!-- Google Maps -->
    <script>
        /* 
            			Map Markers:
            			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
            			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
            			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
            			*/
        (g => {
            var h, a, k, p = "The Google Maps JavaScript API",
                c = "google",
                l = "importLibrary",
                q = "__ib__",
                m = document,
                b = window;
            b = b[c] || (b[c] = {});
            var d = b.maps || (b.maps = {}),
                r = new Set,
                e = new URLSearchParams,
                u = () => h || (h = new Promise(async (f, n) => {
                    await (a = m.createElement("script"));
                    e.set("libraries", [...r] + "");
                    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                    e.set("callback", c + ".maps." + q);
                    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                    d[q] = f;
                    a.onerror = () => h = n(Error(p + " could not load."));
                    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                    m.head.append(a)
                }));
            d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
                d[l](f, ...n))
        })
        ({
            key: "YOUR_API_KEY",
            v: "weekly"
        });

        async function initMap() {
            const {
                Map,
                InfoWindow
            } = await google.maps.importLibrary("maps");
            const {
                AdvancedMarkerElement,
                PinElement
            } = await google.maps.importLibrary(
                "marker",
            );
            const map = new Map(document.getElementById("googlemaps"), {
                zoom: 14,
                center: {
                    lat: -37.817240,
                    lng: 144.955820
                },
                mapId: "YOUR_MAP_API_ID",
            });
            const markers = [{
                position: {
                    lat: -37.817240,
                    lng: 144.955820
                },
                title: "Office 1<br>Melbourne, 121 King St, Australia<br>Phone: 123-456-1234",
            }];

            const infoWindow = new InfoWindow();

            markers.forEach(({
                position,
                title
            }, i) => {
                const pin = new PinElement({
                    background: "#e36159",
                    borderColor: "#e36159",
                    glyphColor: "#FFF",
                });
                const marker = new AdvancedMarkerElement({
                    position,
                    map,
                    title: `${title}`,
                    content: pin.element,
                });

                marker.addListener("click", ({
                    domEvent,
                    latLng
                }) => {
                    const {
                        target
                    } = domEvent;

                    infoWindow.close();
                    infoWindow.setContent(marker.title);
                    infoWindow.open(marker.map, marker);
                });
            });

        }

        initMap();
    </script>

</body>
<!-- <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class=z"inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                                    >
                                        Dashboard
                                    </a>
@else
    <a
                                        href="{{ route('login') }}"
                                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
    <a
                                            href="{{ route('register') }}"
                                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                            Register
                                        </a>
    @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-es-lg rounded-ee-lg lg:rounded-ss-lg lg:rounded-ee-none">
                    <h1 class="mb-1 font-medium">Let's get started</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel has an incredibly rich ecosystem. <br>We suggest starting with the following.</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Read the
                                <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
                                    <span>Documentation</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:start-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Watch video tutorials at
                                <a href="https://laracasts.com" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
                                    <span>Laracasts</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="https://cloud.laravel.com" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                                Deploy now
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ms-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg! aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                    {{-- Laravel Logo --}}
                    <svg class="w-full text-[#F53003] dark:text-[#F61500] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                        <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                        <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                        <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                        <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                        <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                        <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                    </svg>

                    {{-- Light Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ms-8 lg:ms-0 lg:-mt-[6.6rem] dark:hidden" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" />
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#F0ACB8" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#F0ACB8" />
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />
                            <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />
                            <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
                        </g>
                        <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />
                        </g>
                    </svg>

                    {{-- Dark Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ms-8 lg:ms-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
<div class="h-14.5 hidden lg:block"></div>
@endif
    </body> -->

</html>
