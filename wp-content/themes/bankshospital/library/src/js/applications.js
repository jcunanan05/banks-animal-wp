/*!
 * Banks Animal Hospital || Custom JS functions
 * */
(function ($) {
    // Window width for checks for fake resize trigger on iPad
    var windowWidth = $(window).outerWidth();

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // functions to run on ready
    $(document).ready(function () {
        // place banner captions
        placeBannerCaption();

        // place design home caption
        placeDesignCaption();

        // Update / trigger mobile menu
        mobileMenu();

        // Add / adjust fixed header spacer
        headerSpacer();

        // Menu scroll
        menuScroll();

        // Table styles
        resetTableProperties();

        // Main Banner slider
        var bannerSlider = $('.banner--slider');

        // init-slider
        bannerSlider.flickity({
            // options
            autoPlay: 4000,
            prevNextButtons: false,
            pauseAutoPlayOnHover: false,
            lazyLoad: 2,
            wrapAround: true,
            selectedAttraction: 0.008,
            friction: 0.20
        });

        // un-pause on mouse leave
        bannerSlider.on("mouseleave", function () {
            bannerSlider.flickity('playPlayer');
        });



        // Magnific popup for video
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        $('.image-full').magnificPopup({
            type: 'image',
            closeOnContentClick: true
        });
    });

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // Methods to run on window load
    $(window).load(function () {
        // re-init slider to fix first load issue
        $('.banner--slider').flickity('resize');

    });

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // timer for resize debounce (delay resize)
    var resizeTimer;

    // functions to run on resize events
    $(window).on("resize orientationchange", function () {
        if ($(window).outerWidth() != windowWidth) {
            // Update the window width for next time
            windowWidth = $(window).outerWidth();

            // clear timeout
            clearTimeout(resizeTimer);

            // call functions here in debounce
            resizeTimer = setTimeout(function () {

                /**
                 * Call resize functions here
                 * */

                // place banner caption
                placeBannerCaption();

                // place design home caption
                placeDesignCaption();

                // Update / trigger mobile menu
                mobileMenu();

                // Add / adjust fixed header spacer
                headerSpacer();

            }, 100);
        }
    });


    /* ------------------------------------------------------- */
    /* xxxxxxxxxxxxxxxxxxxxxx Functions xxxxxxxxxxxxxxxxxxxxxx */
    /* ------------------------------------------------------- */

    // positioning fix for flexbox incompatibility of IE & firefox
    function placeBannerCaption(s) {
        // caption container
        var caption = $(".banner--caption");


        // apply styles
        caption.each(function () {
            var captionHeight = $(this).outerHeight(),
                captionWidth = $(this).outerWidth();
            $(this).css({
                "top": "50%",
                "left": "50%",
                "margin-top": -(captionHeight / 2),
                "margin-left": -(captionWidth / 2)
            });
        });
    }


    // positioning fix for flexbox incompatibility of IE & firefox
    function placeDesignCaption(s) {
        // caption container
        var caption = $(".virtual-tour--caption"),
            captionHeight = caption.outerHeight();

        // resolution for trigger
        var windowSize = 768,
            windowWidth = $(window).width();

        // If resolution matches
        if (windowWidth >= windowSize) {
            // apply styles
            caption.css({
                "top": "50%",
                "margin-top": -(captionHeight / 2)
            });
        } else {
            // apply styles
            caption.css({
                "top": "auto",
                "margin-top": "auto"
            });
        }

    }

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // off canvas menu for mobile devices
    function mobileMenu() {
        // resolution for trigger
        var windowSize = 768,
            windowWidth = $(window).outerWidth(),
            menuClone = $("#mm-nav--container");

        // If resolution matches
        if (windowWidth <= windowSize) {
            // selectors
            var menuContainer = $("#nav--container"),
                menuButton = $(".menu-button");

            // If instance of menu already created then ignore & do not create a new instance
            if (menuClone.length === 0) {
                // initiate menu
                menuContainer.mmenu({
                    "navbars": [
                        {
                            "position": "top"
                        }
                    ],
                    offCanvas: {
                        position: "right", // changing this alters the position of the menu
                        zposition: "front"
                    }
                }, {
                    clone: true
                });

                // update selector after creation of clone first time
                menuClone = $("#mm-nav--container");
            }

            // API target
            var API = menuClone.data("mmenu");

            // click event to open
            menuButton.on("click", function () {
                API.open();
            });

        } else {
            // API target
            var API = menuClone.data("mmenu");

            // Close menu if open
            if (API && API !== null) {
                API.close();
            }
        }
    }

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // Fixed header spacer
    function headerSpacer() {
        // Vars
        var headerContainer = $(".header--fixed-wrapper"),
            headerSpacer = $(".header--fixed-spacer"),
            headerSpacerHeight = headerContainer.outerHeight();

        // apply style
        headerSpacer.css({
            "padding-top": headerSpacerHeight
        })
    }

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // Entry effects
    animate = new WOW({
        boxClass: 'anim'
    });
    animate.init();

    /* ================================= */
    /* xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx */
    /* ================================= */

    // Menu scroll
    function menuScroll() {
        var menuItem = $(".main-navigation > li > a"),
            // resolution for trigger
            windowSize = 768,
            windowWidth = $(window).outerWidth();


        // handle links with @href started with '#' only
        menuItem.on('click', function (e) {
            // target element id
            var id = $(this).attr('href');

            // target element
            var $id = $(id);
            if ($id.length === 0) {
                return;
            }

            // top position relative to the document
            var pos = ($(id).offset().top - ($(".header--fixed-wrapper").outerHeight() + 20));

            // If resolution matches
            if (windowWidth <= windowSize) {
                setTimeout(function () {
                    // animated top scrolling
                    $('body').animate({scrollTop: pos});
                }, 500);

            } else {
                $('body, html').animate({scrollTop: pos});
            }
        });
    }


    // reset CMS table styles
    function resetTableProperties() {
        // properties to be removed
        var properties = ["border", "cellpadding", "cellspacing"];

        // remove/reset properties
        $.each(properties, function (ind, elem) {
            // apply on each table
            $("table").each(function (tableInd, table) {
                $(table).attr(elem, 0);
                $(table).addClass("table");
            })
        });

        // wrap each table in parent wrapper for smaller devices
        $("table").each(function (tableInd, table) {
            // wrap inside table-responsive
            $(table).wrap("<div class='table-responsive grey-bg'></div>");
        })
    }
})(jQuery);