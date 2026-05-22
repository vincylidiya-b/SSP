<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - Smartschool Plus</title>
    <meta name="description" content="@yield('description', 'SmartSchool Plus is a comprehensive cloud-based school management software designed for Indian schools.')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@yield('keywords', 'smartschool, products, education, modules, school management system, student information system')" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="google-site-verification" content="Y9GAMzIlDb5njPPiG3UyNOCr-uYqEkOkCVK9XQ5onKk" />

     <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://smartschoolonline.com/"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "@yield('title')",
        "item": "{{ url()->current() }}"
      }]
    }
    </script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/smsp-favicon.png') }}">
    <!-- Place favicon.ico in the root directory -->
    
    <!--Cookies-->
    
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/c82dc561ed931dcb26a24c104410b48b.js"></script>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-585XVGSPN7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-585XVGSPN7');
    </script>

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-skillgro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon-skillgro-new.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <!--<link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">-->
    <link rel="stylesheet" href="{{ asset('assets/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tg-cursor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min_1.css') }}">

</head>

<body>

    <!--Preloader-->
    <!--<div id="preloader">-->
    <!--    <div id="loader" class="loader">-->
    <!--        <div class="loader-container">-->
    <!--            <div class="loader-icon"><img src="{{ asset('assets/img/logo/logo-smsp-01.svg') }}" alt="Preloader">-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--Preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html"> <i class="tg-flaticon-arrowhead-up"></i> </button>
    <!-- Scroll-top-end-->

    @include('frontend.includes.header')

    <!-- main-area -->
    <main class="main-area fix">

       @yield('content')


    </main>
    <!-- main-area-end -->
    
     <div id="popup" class="popup" data-aos="zoom-out-right">
        <div class="popup-content">
            <span class="close-button" id="closePopup">&times;</span>
            <h2><span class="pop-ssp">Smart School 3.0</span> Coming Soon</h2>
			<img src="assets/img/banner/popup-image.png" style="width: 300px;" alt="Smart School 3.0 Coming Soon">
            <p>Stay tuned for more details as we approach the launch date. We appreciate your support and are committed to continuously improving our services for a better educational experience.</p>
        </div>
    </div>

    <!-- footer-area -->
    @include('frontend.includes.footer')
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/js/tween-max.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <script src="{{ asset('assets/js/tg-cursor.min.js') }}"></script>
    <script src="{{ asset('assets/js/vivus.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/svg-inject.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/js/plyr.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <!--    <script src="{{ asset('assets/js/jquery.min_1.js') }}"></script>-->
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    
     <!--For Bell icon-->
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 
    <script src="{{ asset('assets/js/popup.js') }}"></script>

    <script>
        SVGInject(document.querySelectorAll("img.injectable"));

        // Disable right-click
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });

        // Disable certain keyboard shortcuts (like Ctrl+U, F12, Ctrl+Shift+I)
        document.onkeydown = function(e) {
            if (e.keyCode == 123 || (e.ctrlKey && e.shiftKey &&
                    (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'C'.charCodeAt(0) || e.keyCode == 'J'.charCodeAt(0))
                    ) ||
                (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) {
                return false;
            }
        }

        // Show the warning message on copy attempt
        document.addEventListener('copy', function(event) {
            var warning = document.getElementById('copy-warning');
            var protectedText = document.getElementById('protected-text');

            if (warning && protectedText) {
                event.preventDefault(); // Prevent the copy action

                // Calculate position of the message
                var rect = protectedText.getBoundingClientRect();
                warning.style.top = (rect.top - 40) + 'px'; // Position above the text
                warning.style.left = (rect.left) + 'px';

                // Show the message
                warning.style.display = 'block';

                // Hide the message after 2 seconds
                setTimeout(function() {
                    warning.style.display = 'none';
                }, 2000);
            }
        }); 

    </script>
       @yield('scripts')
</body>

</html>