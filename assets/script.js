jQuery(document).ready(function ($) {

    const backToTop = jQuery('.back-to-top');

    // Show/Hide Back to Top button
    jQuery(window).scroll(function () {
        
        if (jQuery(this).scrollTop() > 200) {
            backToTop.fadeIn();
        } else {
            backToTop.fadeOut();
        }
    });

    // Scroll to top on click
    backToTop.on('click', function () {
        jQuery('html, body').animate({ scrollTop: 0 }, 500);
    });

});
