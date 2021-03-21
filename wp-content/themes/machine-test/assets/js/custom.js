jQuery(document).ready(function () {

    jQuery(window).on('load', function () {
        getDynamicDimensions();
        customScroll();
        navMenu();
        jQuery(".slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        })

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


function navMenu() {

    jQuery("#navTrigger").click(function () {
        jQuery(this).find(".hamburger").toggleClass("change").parents("body").toggleClass("navbarOpen");
    })

    jQuery("#navTrigger").mouseenter(function () {
        jQuery(".mouseCursor").addClass("onNavButton");
    });

    jQuery("#navTrigger").mouseleave(function () {
        jQuery(".mouseCursor").removeClass("onNavButton");
    });

}

function customScroll() {

    //addClass To Body On Scroll
    function manageClass() {
        if (jQuery(window).scrollTop() > 50)
            jQuery("body").addClass("scrolled");
        else
            jQuery("body").removeClass("scrolled");
    }

    manageClass();
    jQuery(window).scroll(function () {
        manageClass();
    })
}