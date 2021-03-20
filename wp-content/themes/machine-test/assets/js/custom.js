
jQuery(document).ready(function () {

    jQuery(window).on('load', function () {
        setTimeout(function () {
            getDynamicDimensions();
        }, 300);

    })

    jQuery(".testimonials").slick({
        slidesToShow: 3,
        slidesToScroll: 1
    })
});



function getDynamicDimensions() {
    //getting values
    containerOffset = jQuery(".container").offset().left;
    //setting values
    jQuery("body").css({
        "--containerOffset": containerOffset + 'px'
    });

    //change values on resize
    jQuery(window).resize(function () {
        getDynamicDimensions();
    });
}
