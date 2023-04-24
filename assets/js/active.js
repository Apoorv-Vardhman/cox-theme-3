/*
Template: COX - Multipurpose Bootstrap 5 Template
Author: Puja Sinha
*/

(function($) {
    "use strict";

    $(document).ready( function() {

        $(".hero-1 .hero-slider-active").owlCarousel({        
            items: 1,     
            dots: false,
            loop: true,
            autoplayTimeout: 8000,
            autoplay:true,
            nav: true,         
            navText: ['<i class="fas fa-long-arrow-left"></i>PREV', 'Next<i class="fas fa-long-arrow-right"></i>'],
        });

        $(".hero-slider-2").owlCarousel({        
            items: 1,     
            dots: false,
            loop: true,
            autoplayTimeout: 8000,
            autoplay:true,
            nav: true,
            animateOut: 'fadeOut',         
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
        });

        const $owlCarousel = $(".agency-slider-active").owlCarousel({        
            items: 1,     
            dots: true,
            loop: true,
            autoplayTimeout: 9000,
            autoplay:true,
        });

        $(".owl-carousel").on("initialized.owl.carousel", () => {
            setTimeout(() => {
                $(".owl-item.active .animated-text").addClass("is-transitioned");
            }, 200);
        });

        $owlCarousel.on("changed.owl.carousel", e => {
            $(".animated-text").removeClass("is-transitioned");
            
            const $currentOwlItem = $(".owl-item").eq(e.item.index);
            $currentOwlItem.find(".animated-text").addClass("is-transitioned");
            
            const $target = $currentOwlItem.find(".hero-contents");
        });

        $(".testimonial-carousel-list").owlCarousel({        
            items: 1,     
            dots: false,
            loop: true,
            autoplayTimeout: 8000,
            autoplay:true,
            nav: true,     
            navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
        });
        
        $(".brand-carousel-active").owlCarousel({ 
            margin: 80,
            loop: true,
            autoplayTimeout: 5000,
            autoplay:true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 2,                    
                },
                // breakpoint from 768 up
                480 : {
                    items: 3
                },
                // breakpoint from 768 up
                768 : {
                    items: 3
                },
                // breakpoint from 992 up
                992 : {
                    items: 4
                },
                
                1191 : {
                    items: 5
                },
            }
        });

        //05
        $(".brand-carousel-active-2").owlCarousel({ 
            margin: 80,
            loop: true,
            autoplayTimeout: 5000,
            autoplay:true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 2,                    
                },
                // breakpoint from 768 up
                480 : {
                    items: 3
                },
                // breakpoint from 768 up
                768 : {
                    items: 3
                },
                // breakpoint from 992 up
                992 : {
                    items: 5
                },
                
                1191 : {
                    items: 6
                },
            }
        });

        $(".brand-carousel-2").owlCarousel({ 
            margin: 50,
            loop: true,
            autoplayTimeout: 5000,
            autoplay:true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 2,                    
                },
                // breakpoint from 768 up
                480 : {
                    items: 3
                },
                // breakpoint from 768 up
                768 : {
                    items: 3
                },
                // breakpoint from 992 up
                992 : {
                    items: 4
                },
                
                1191 : {
                    items: 6
                },
            }
        });

        $(".global-carousel").owlCarousel({ 
            margin: 80,
            loop: true,
            autoplayTimeout: 5000,
            autoplay:true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 2,                    
                },
                // breakpoint from 768 up
                480 : {
                    items: 3
                },
                // breakpoint from 768 up
                768 : {
                    items: 3
                },
                // breakpoint from 992 up
                992 : {
                    items: 4
                },
                
            }
        });

        $(".project-showcase-carousel").owlCarousel({ 
            margin: 30,
            loop: true,
            center: true,
            autoplayTimeout: 5000,
            autoplay:true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 1,                    
                },
                // breakpoint from 768 up
                480 : {
                    items: 1
                },
                // breakpoint from 768 up
                768 : {
                    items: 2
                },
                // breakpoint from 992 up
                992 : {
                    items: 2
                },
                
                1191 : {
                    items: 3
                },
            }
        });

        $(".portfolio-showcase-carousel-active").owlCarousel({ 
            margin: 30,
            loop: true,
            autoplayTimeout: 5000,
            autoplay:true,
            dots: true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 1,                    
                },
                // breakpoint from 768 up
                480 : {
                    items: 1
                },
                // breakpoint from 768 up
                768 : {
                    items: 2
                },
                // breakpoint from 992 up
                992 : {
                    items: 3
                },
                
                1191 : {
                    items: 3
                },

                1400 : {
                    items: 5
                },
            }
        });
        
        $(".project-carousel-card-active").owlCarousel({ 
            margin: 30,
            loop: true,
            nav: true,           
            navText: ['<i class="fas fa-long-arrow-left"></i>', '<i class="fas fa-long-arrow-right"></i>'],
            autoplayTimeout: 6000,
            autoplay:true,                                                                          
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 1,                    
                },
                // breakpoint from 768 up
                768 : {
                    items: 2
                },

                1191 : {
                    items: 3
                },

                1600 : {
                    items: 4
                },
            }
        });

        $(".portfolio-carousel-active").owlCarousel({ 
            loop: true,
            autoplayTimeout: 8000,
            autoplay:true,
            center: true,                                                                      
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 2,
                    margin: 10,                
                },
                // breakpoint from 768 up
                768 : {
                    items: 2,
                    margin: 30,
                },
                // breakpoint from 992 up
                992 : {
                    items: 3,
                    margin: 30,  
                },

                1400 : {
                    items: 4,
                    margin: 30,
                    center: false, 
                }
            }
        });

        //5
        $(".owl-carousel").owlCarousel({ 
            items: 1,
            loop: true,
            autoplayTimeout: 8000,
            autoplay:true,
            center: true,                                                                      
        });


        $(".testimonial-carousel-active").owlCarousel({        
            items: 1,     
            dots: false,
            loop: true,
            autoplayTimeout: 8000,
            autoplay:true,
            nav: true,           
            navText: ['<i class="fas fa-long-arrow-down"></i>', '<i class="fas fa-long-arrow-up"></i>'],
        });

        $(".service-gallery").owlCarousel({        
            items: 1,     
            dots: true,
            autoplayTimeout: 8000,
            autoplay:true,
            nav: true,          
            navText: ['<i class="fas fa-long-arrow-left"></i>', '<i class="fas fa-long-arrow-right"></i>'],
        });


        /* =============================================
            # Magnific popup init
         ===============================================*/
        $(".popup-link").magnificPopup({
            type: 'image',
            fixedContentPos: false
        });

        $(".popup-gallery").magnificPopup({
            type: 'image',
            fixedContentPos: false,
            gallery: {
                enabled: true
            },
            // other options
        });

        $(".popup-video, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
        
        /*==========================
           Scroll To Up Init
        ============================*/
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '1110', // Distance from top before showing element (px)
            topSpeed: 2000, // Speed back to top (ms)
            animation: 'slide', // Fade, slide, none
            animationInSpeed: 300, // Animation in speed (ms)
            animationOutSpeed: 300, // Animation out speed (ms)
            scrollText: '<i class="fas fa-angle-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });

        // Sticky Menu
        $(window).scroll(function() {
            var Width = $(document).width();

            if ($("body").scrollTop() > 100 || $("html").scrollTop() > 100) {
                if (Width > 767) {
                    $("header").addClass("sticky");
                }
            } else {
                $("header").removeClass("sticky");
            }
        });

        $('.container').imagesLoaded(function() {
            $('.portfolio-cat-filter').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });

            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                    columnWidth: '.grid-item'
                }
            });
        });

        var catButton = '.portfolio-cat-filter button';

        $(catButton).on('click', function(){
            $(catButton).removeClass('active');
            $(this).addClass('active');
        });


        $('#hamburger').on('click', function() {            
            $('.mobile-nav').addClass('show');
            $('.overlay').addClass('active');
        });

        $('.close-nav').on('click', function() {            
            $('.mobile-nav').removeClass('show');            
            $('.overlay').removeClass('active');          
        });

        $(".overlay").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $('.overlay').removeClass('active');
        });

        $("#mobile-menu").metisMenu();

        new WOW().init();

        const counterUp = window.counterUp.default

        const callback = entries => {
            entries.forEach( entry => {
                const el = entry.target
                if ( entry.isIntersecting && ! el.classList.contains( 'is-visible' ) ) {
                    counterUp( el, {
                        duration: 3500,
                        delay: 15,
                    } )
                    el.classList.add( 'is-visible' )
                }
            } )
        }

        const IO = new IntersectionObserver( callback, { threshold: 1 } )

        const el = document.querySelectorAll( '.single-fun-fact span' );
        el.forEach((el) => {
            IO.observe(el);
        });


        $('.side-menu-toggle, .offcanvas-btn').on('click', function() {            
            $('.offset-menu').addClass('show');
        });

        $('#offset-menu-close-btn').on('click', function() {            
            $('.offset-menu').removeClass('show');
        });

        $('.search-btn').on('click', function() {            
            $('.search-box').toggleClass('show');
        });

        
    }); // end document ready function

    function loader() {
        $(window).on('load', function() {
            // Animate loader off screen
            $(".preloader").addClass('loaded');                    
            $(".preloader").delay(600).fadeOut();                       
        });
    }
    loader();

})(jQuery); // End jQuery
