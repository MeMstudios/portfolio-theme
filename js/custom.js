
(function($) {
    'use strict';

    // Main Navigation
    $( '.hamburger-menu' ).on( 'click', function() {
        $(this).toggleClass('close');
        $('.site-branding').toggleClass('hide');
        $('.site-navigation').toggleClass('show');
        $('.site-header').toggleClass('no-shadow');
    });

    // Scroll to Next Section
    $( '.scroll-down' ).on( 'click', function() {
        $( 'html, body' ).animate({
            scrollTop: $( '.scroll-down' ).offset().top + 100
        }, 800 );
        $('.arrow-down').hide(200);
        
    });
    //Hide the arrow on scroll down.
    $(window).scroll( function() {
        $('.arrow-down').hide();
    });

    //Show the hidden description    
    $('.description').on('click', function(event) {
        if (event.target.className != "description-link") {
            event.preventDefault();        
            var hidden = $('.hidden-description').css('opacity') == 0.0;        
            if (hidden) {
                $('.show').animate({
                    opacity: 0.0
                }, 420, function () {
                    $('.show').hide();
                    $('.hidden-description').show();
                });
                $('.hidden-description').animate({
                    opacity: 1.0
                }, 200)
            }
            else {
                //hide the hidden description
                $('.hidden-description').animate({
                    opacity: 0.0
                }, 420, function () {
                    $('.hidden-description').hide();
                    $('.show').show();
                });
                $('.show').animate({
                    opacity: 1.0
                }, 200);
            }
        }
    });
    $('.blue').on('mouseover', function(event) {
        
    })
    
})(jQuery);
