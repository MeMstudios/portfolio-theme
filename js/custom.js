
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
        event.preventDefault();
        $('.show').hide(100);
        $('.hidden-description').show(100);
    });
    //hide the hidden description
    $('.hidden-description').on('click', function(event) {
        event.preventDefault();
        $('.hidden-description').hide(100);
        $('.show').show(100);
    });
    
})(jQuery);
