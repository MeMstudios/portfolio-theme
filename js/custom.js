
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
    $( '#pm-link' ).on( 'click', function(event) {
        event.preventDefault();
        if ($(window).width() < 850) {
            $( 'html, body' ).animate({
                scrollTop: $( '#pm' ).offset().top
            }, 650 );
        }
    });
    $( '#dev-link' ).on( 'click', function(event) {
        event.preventDefault();
        if ($(window).width() < 850) {
            $( 'html, body' ).animate({
                scrollTop: $( '#dev' ).offset().top
            }, 650 );
        }
    });
    $( '#devops-link' ).on( 'click', function(event) {
        event.preventDefault();
        if ($(window).width() < 850) {
            $( 'html, body' ).animate({
                scrollTop: $( '#devops' ).offset().top
            }, 650 );
        }
    });
    $( '#music-link' ).on( 'click', function(event) {
        event.preventDefault();
        if ($(window).width() < 850) {
            $( 'html, body' ).animate({
                scrollTop: $( '#music' ).offset().top
            }, 650 );
        }
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
                }, 200, function () {
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
                }, 200, function () {
                    $('.hidden-description').hide();
                    $('.show').show();
                });
                $('.show').animate({
                    opacity: 1.0
                }, 200);
            }           
        }
    });
    $('.portfolio-content').on('mouseover', function(event) {
        if ($(this).hasClass('pm')) {
            $('#pm-head').css('visibility', 'visible');
            $('#pm-head').css('opacity', '1');
            $('#dev-head').css('visibility', 'hidden');
            $('#dev-head').css('opacity', '0');
            $('#devops-head').css('visibility', 'hidden');
            $('#devops-head').css('opacity', '0');
            $('#music-head').css('visibility', 'hidden');
            $('#music-head').css('opacity', '0');
            $('.blue').css('opacity', '0.4')
            $('.yellow').css('opacity', '0.8');
            $('.green').css('opacity', '0.8');
            $('.purple').css('opacity', '0.8');
        }
        else if ($(this).hasClass('dev')) {
            $('#pm-head').css('visibility', 'hidden');
            $('#pm-head').css('opacity', '0');
            $('#dev-head').css('visibility', 'visible');
            $('#dev-head').css('opacity', '1');
            $('#devops-head').css('visibility', 'hidden');
            $('#devops-head').css('opacity', '0');
            $('#music-head').css('visibility', 'hidden');
            $('#music-head').css('opacity', '0');
            $('.blue').css('opacity', '0.8')
            $('.yellow').css('opacity', '0.4');
            $('.green').css('opacity', '0.8');
            $('.purple').css('opacity', '0.8');
        }
        else if ($(this).hasClass('devops')) {
            $('#pm-head').css('visibility', 'hidden');
            $('#pm-head').css('opacity', '0');
            $('#dev-head').css('visibility', 'hidden');
            $('#dev-head').css('opacity', '0');
            $('#devops-head').css('visibility', 'visible');
            $('#devops-head').css('opacity', '1');
            $('#music-head').css('visibility', 'hidden');
            $('#music-head').css('opacity', '0');
            $('.blue').css('opacity', '0.8')
            $('.yellow').css('opacity', '0.8');
            $('.green').css('opacity', '0.4');
            $('.purple').css('opacity', '0.8');
        }
        else if ($(this).hasClass('music')) {
            $('#pm-head').css('visibility', 'hidden');
            $('#pm-head').css('opacity', '0');
            $('#dev-head').css('visibility', 'hidden');
            $('#dev-head').css('opacity', '0');
            $('#devops-head').css('visibility', 'hidden');
            $('#devops-head').css('opacity', '0');
            $('#music-head').css('visibility', 'visible');
            $('#music-head').css('opacity', '1');
            $('.blue').css('opacity', '0.8')
            $('.yellow').css('opacity', '0.8');
            $('.green').css('opacity', '0.8');
            $('.purple').css('opacity', '0.4');
        }
    });
    
})(jQuery);
