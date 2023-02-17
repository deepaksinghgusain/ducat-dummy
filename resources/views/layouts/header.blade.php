<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    @yield('meta-section')

    <meta name="robots" content="index, follow" />
    <meta name="coverage" content="Worldwide" />
    <meta name="country" content="India" />

    <meta name="DC.title" content="Ducat India" />
    <meta name="geo.region" content="IN-UP" />
    <meta name="geo.placename" content="Noida" />
    <meta name="geo.position" content="28.577861;77.315091" />
    <meta name="ICBM" content="28.577861, 77.315091" />

    <meta name="Revisit-after" content="1 Days" />
    <meta name="Language" content="English" />
    <meta name="Publisher" content="Ducat India" />
    <meta name="Robots" content="index,follow" />
    <meta name="YahooSeeker" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="allow-search" content="yes" />
    <meta name="Rating" content="General" />
    <meta name="robots" content="noodp" />
    <meta name="googlebot" content="noodp" />
    <meta name="slurp" content="noydir" />
    <meta name="msnbot" content="noodp" />
    <meta name="robots" content="noodp,noydir" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.smartmenus.bootstrap-4.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main-ducat.css') }}">
    <link rel="stylesheet" href="{{ asset('images/test/ouibounce.min.css') }}">
    @yield('head-css')
    @yield('head-js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.min.css">
    <!-- Global site tag (gtag.js) - Google Ads: 1015237940 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1015237940"></script>
    @if (Request::segment(1) != 'best-digital-marketing-training-institute' || Request::segment(1) == '')
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-1015237940');
        </script>
    @endif
    @yield('end-head-tag')
    <!-- Facebook Pixel Code -->
    <style>
        .navbar-nav ul li a {
            text-transform: uppercase !important;
        }
    </style>
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '135246210591763');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=135246210591763&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-2598670-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-2598670-1');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57DQ53S');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        var clickmagick_cmc = {
            uid: '159394',
            hid: '164906598',
            cmc_project: 'DucatIndia',
        }
    </script>
    <script src='//cdn.clkmc.com/cmc.js'></script>

    <meta name="msvalidate.01" content="72BE4AC7034C652C6CBA71A43828CBDA" />



</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57DQ53S" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('start-body-tag')
    <header id="header" class="mainHeader">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-xl-3 col-md-3">

                    <div class="logo">
                        <a href="/">
                            <img src="/images/logo.png" alt="Ducat India">
                        </a>
                    </div>

                </div> <!-- End of COl XL 3 -->

                <div class="col-xl-9 col-md-9">
                    <div class="topSocial">
                        <a href="https://www.facebook.com/ducatEducation" target="_blank" class="facebook"><i
                                class="fa fa-facebook"></i></a>
                        <a href="https://www.twitter.com/@Ducat_education" target="_blank" class="twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/ducateducation" target="_blank" class="linkedin"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/c/DucatIndiatraining" target="_blank" class="youtube"><i
                                class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/ducateducation/" target="_blank" class="instagram"><i
                                class="fab fa-instagram"></i></a>

                    </div>
                    <div class="contactInfo">

                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="rightContent">
                            <h5>Email us on</h5>
                            <h6><a href="mailto:info@ducatindia.com" target="new">info@ducatindia.com</a></h6>
                        </div>

                    </div>

                    <div class="contactInfo mr-md-5 callMobile">

                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="rightContent">
                            <h5>Call us on</h5>
                            <h6><a href="tel:7070905090" target="new">70-70-90-50-90</a></h6>
                        </div>

                    </div>

                    <div class="contactInfo lastStyle mr-md-5">

                        <div class="icon">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div class="rightContent">
                            <h5>Whatsapp</h5>
                            <h6><a href="https://wa.me/+919999993213" target="new">+91 99-9999-3213</a></h6>
                        </div>

                    </div>

                </div> <!-- End of COl XL 9 -->

            </div> <!-- End of ROW -->

            <div class="row">

                <div class="col-xl-12">
                    @include('layouts.menu')

                </div> <!-- End of COL XL 12 -->

            </div> <!-- End of ROW -->

        </div> <!-- End of Container -->

    </header> <!-- End of Header -->

    @if (Request::segment('1') && Request::segment('1') != 'center')
        <section id="innerHead">

            <div class="container">

                <div class="row justify-content-md-center">

                    <div class="col-xl-10 text-center">

                        <form action="#" class="searchForm">
                            <input type="search" id="main-search-all"
                                placeholder="Search for the software or skill you want to learn">
                            <button type="submit" id="search-button-autocomplete"><i
                                    class="fas fa-search"></i></button>
                        </form>

                        <div class="coursesLinks mb-0">
                            @include('layouts.featured-courses')
                        </div>

                    </div> <!-- End of COl XL 10 -->

                </div> <!-- End of ROW -->

            </div> <!-- End of Container -->

        </section> <!-- End of Inner Head -->
    @endif
