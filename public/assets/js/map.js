var PIXELSIGNS = PIXELSIGNS || {};

(function($) {

    /*!----------------------------------------------
    	# This beautiful code written with heart
    	# by Mominul Islam <hello@mominul.me>
    	# In Dhaka, BD at the PixelSigns Theme workstation.
    	---------------------------------------------*/

    // USE STRICT
    "use strict";

    PIXELSIGNS.initialize = {

        init: function() {
            PIXELSIGNS.initialize.general();
            // PIXELSIGNS.initialize.mobileMenu();
            PIXELSIGNS.initialize.sectionBackground();
            PIXELSIGNS.initialize.sectionSwitch();
            PIXELSIGNS.initialize.portfolio();
            PIXELSIGNS.initialize.countUp();
            PIXELSIGNS.initialize.swiperSlider();
            PIXELSIGNS.initialize.googleMap();
            //PIXELSIGNS.initialize.contactFrom();
        },

        /*========================================================*/
        /*=           Collection of snippet and tweaks           =*/
        /*========================================================*/

        general: function() {

            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 0,
                mobile: false,
                live: true,
                scrollContainer: null,
            });
            wow.init();

            /* Right click , ctrl+u and ctrl+shift+i disabled */
            // $('body').on('contextmenu', function (e) {
            // 	e.preventDefault();
            // 	e.stopPropagation();
            // 	return false;
            // });

            // $(document).on('keydown', function(e) {
            // 	if (
            // 		(e.ctrlKey && (e.keyCode == 85)) ||
            // 		(e.ctrlKey && (e.shiftKey && e.keyCode == 73)) ||
            // 		(e.ctrlKey && (e.shiftKey && e.keyCode == 75)) ||
            // 		(e.metaKey && (e.shiftKey && e.keyCode == 91))
            // 		) {
            // 		return false;
            // 	} else {
            // 		return true;
            // 	}
            // });

            /* Bootstrap Accordion  */
            $('.faq .card').each(function() {
                var $this = $(this);
                $this.on('click', function(e) {
                    var has = $this.hasClass('active');
                    $('.faq .card').removeClass('active');
                    if (has) {
                        $this.removeClass('active');
                    } else {
                        $this.addClass('active');
                    }
                });
            });

            /* Magnefic Popup */
            $('.popup-video').magnificPopup({
                type: 'iframe'
            });

            /** Pricing Tabs */
            $('.pricing-tab-switcher, .tab-btn').on('click', function() {
                $('.pricing-tab-switcher, .tab-btn').toggleClass('active');
                $(".pricing-tab").toggleClass('seleceted');

                $('.pricing-amount').toggleClass('change-subs-duration');
            });


            if ($('.tabs-box').length) {
                $('.tabs-box .pricing-tab  .tab-btn').on('click', function(e) {
                    e.preventDefault();
                    var target = $($(this).attr('data-tab'));

                    if ($(target).is(':visible')) {
                        return false;
                    } else {
                        target.parents('.tabs-box').find('.pricing-tab ').find('.tab-btn').removeClass('active-btn');
                        $(this).addClass('active-btn');
                        target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
                        target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab animated fadeIn');
                        $(target).fadeIn(300);
                        $(target).addClass('active-tab animated fadeIn');
                    }
                });
            }

            // Show first content by default
            $('#pix-tabs-nav li:nth-child(2)').addClass('active');
            $('#pix-tabs-content .content').hide();
            $('#pix-tabs-content .content:nth-child(2)').show();

            // click function
            $('#pix-tabs-nav li').on('click', function() {
                $('#pix-tabs-nav li').removeClass('active');
                $(this).addClass('active');
                $('#pix-tabs-content .content').hide();

                var activeTab = $(this).find('a').attr('href');
                $(activeTab).fadeIn(400);
                return false;
            });

            /*  Active Menu */
            $('.site-main-menu li a').each(function() {
                if ($(this).attr('href') == location.href.split("/").slice(-1)) {
                    $(this).addClass('current_page');
                }
            });

        },

        /*====================================*/
        /*=           Swiper Slider          =*/
        /*====================================*/

        swiperSlider: function() {

            $('.swiper-container').each(function() {

                var interleaveOffset = 0.5;

                var id = $(this).attr('id');
                var perpage = $(this).data('perpage') || 1;
                var loop = $(this).data('loop') || true;
                var speed = $(this).data('speed') || 700;
                var autoplay = $(this).data('autoplay') || 5000;
                var slidegroup = $(this).data('slidegroup') || 1;
                var space = $(this).data('space') || 0;
                var effect = $(this).data('effect');
                var direction = $(this).data('direction') || 'horizontal';
                var breakpoints = $(this).data('breakpoints');

                var swiper = new Swiper('#' + id, {
                    slidesPerView: perpage,
                    spaceBetween: space,
                    slidesPerGroup: slidegroup,
                    loop: loop,
                    speed: speed,
                    effect: effect,
                    direction: direction,
                    breakpoints: breakpoints,
                    autoplay: {
                        delay: autoplay,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                });
            })
        },

        /*==============================*/
        /*=           Portfolio          =*/
        /*==============================*/

        portfolio: function() {

            if ((typeof $.fn.imagesLoaded !== 'undefined') && (typeof $.fn.isotope !== 'undefined')) {

                $(".pixsass-portfolio-items").imagesLoaded(function() {
                    var container = $(".pixsass-portfolio-items");

                    container.isotope({
                        itemSelector: '.pixsass-portfolio-item',
                        percentPosition: true,
                        transitionDuration: '0.5s',
                        masonry: {
                            columnWidth: '.grid-sizer',
                            layoutMode: 'masonry',
                        }
                    });

                    $('.pixsass-isotope-filter a').on('click', function() {
                        $('.pixsass-isotope-filter').find('.current').removeClass('current');
                        $(this).parent().addClass('current');

                        var selector = $(this).attr("data-filter");
                        container.isotope({
                            filter: selector
                        });

                        return false;
                    });

                    $(window).resize(function() {
                        container.isotope();
                        blogContainer.masonry();
                    });

                });

                var blogContainer = $(".blog-items");

                blogContainer.masonry({
                    itemSelector: '.blog-item',
                    percentPosition: true
                });

            }
        },

        /*==================================*/
        /*=           Mobile Menu          =*/
        /*==================================*/

        mobileMenu: function() {

            var windowSize = $(window).width();

            if (windowSize < 991) {
                $('.site-main-menu li.active').addClass('open').children('ul').show();
                $('.site-main-menu li.menu-item-has-children>a').on('click', function() {
                    $(this).removeAttr('href');
                    var element = $(this).parent('li');
                    if (element.hasClass('open')) {
                        element.removeClass('open');
                        element.find('li').removeClass('open');
                        element.find('ul').slideUp(400);
                    } else {
                        element.addClass('open');
                        element.children('ul').slideDown(400);
                        element.siblings('li').children('ul').slideUp(400);
                        element.siblings('li').removeClass('open');
                        element.siblings('li').find('li').removeClass('open');
                        element.siblings('li').find('ul').slideUp(400);
                    }
                });
            }

            $('.toggle-menu').on('click', function(e) {
                e.preventDefault();
                var mask = '<div class="mask-overlay">';

                $('body').toggleClass('open-menu');
                $(mask).hide().appendTo('body').fadeIn('fast');
                $('.mask-overlay, .close-menu').on('click', function() {
                    $('body').removeClass('open-menu');
                    $('.mask-overlay').remove();
                });
            });
        },

        /*==========================================*/
        /*=           Section Background           =*/
        /*==========================================*/

        sectionBackground: function() {

            // Section Background Image
            $('[data-bg-image]').each(function() {
                var img = $(this).data('bg-image');
                $(this).css({
                    backgroundImage: 'url(' + img + ')',
                });
            });
        },

        /*=====================================*/
        /*=           Section Switch          =*/
        /*=====================================*/

        sectionSwitch: function() {
            $('[data-type="section-switch"], #menu-home li a, .scroll-btn').on('click', function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    if (target.length > 0) {

                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        },

        /*==============================*/
        /*=           Countup          =*/
        /*==============================*/

        countUp: function() {
            var options = {
                useEasing: true,
                useGrouping: true,
                separator: ',',
                decimal: '.',
                prefix: '',
                suffix: ''
            };

            var counteEl = $('[data-counter]');

            if (counteEl) {
                counteEl.each(function() {
                    var val = $(this).data('counter');

                    var countup = new CountUp(this, 0, val, 0, 2.5, options);
                    $(this).appear(function() {
                        countup.start();
                    }, {
                        accX: 0,
                        accY: 0
                    })
                });
            }
        },

        /*=================================*/
        /*=           Google Map          =*/
        /*=================================*/

        googleMap: function() {
            $('.gmap3-area').each(function() {
                var $this = $(this),
                    key = $this.data('key'),
                    lat = $this.data('lat'),
                    lng = $this.data('lng'),
                    mrkr = $this.data('mrkr');

                $this.gmap3({
                        center: [lat, lng],
                        zoom: 8,
                        scrollwheel: false,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        styles: [{
                            "featureType": "administrative.country",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "visibility": "on"
                            }]
                        }]
                    })
                    .marker(function(map) {
                        return {
                            position: map.getCenter(),
                            icon: mrkr
                        };
                    })

            });
        },


    };

    PIXELSIGNS.documentOnReady = {
        init: function() {
            PIXELSIGNS.initialize.init();

        },
    };

    PIXELSIGNS.documentOnLoad = {
        init: function() {
            $(".page-loader").fadeOut("slow");
        },
    };

    PIXELSIGNS.documentOnResize = {
        init: function() {

        },
    };

    PIXELSIGNS.documentOnScroll = {
        init: function() {
            PIXELSIGNS.initialize.sectionBackground();

            if ($(window).scrollTop() > 300) {
                $('.return-to-top').addClass('back-top');
            } else {
                $('.return-to-top').removeClass('back-top');
            }
        },
    };

    // Initialize Functions
    $(document).ready(PIXELSIGNS.documentOnReady.init);
    $(window).on('load', PIXELSIGNS.documentOnLoad.init);
    $(window).on('resize', PIXELSIGNS.documentOnResize.init);
    $(window).on('scroll', PIXELSIGNS.documentOnScroll.init);

})(jQuery);



