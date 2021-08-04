(function($) {
    "user strict";


    // Scroll To Top 
    var scrollTop = $(".scrollToTop");
    $(window).on('scroll', function() {
        if ($(this).scrollTop() < 500) {
            scrollTop.removeClass("active");
        } else {
            scrollTop.addClass("active");
        }
    });
    //Click event to scroll to top
    $('.scrollToTop').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
    // doctor section slide 
    $('.doc_slide').owlCarousel({
        items: 4,
        nav: true,
        dots: false,
        autoplay: false,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 500,
        smartSpeed: 500,
    });

    // brand section slide 
    $('.brand-slide').owlCarousel({
        items: 4,
        nav: true,
        dots: false,
        autoplay: false,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: false,
        touchDrag: false,
        autoplayTimeout: 5000,
        autoplaySpeed: 500,
        smartSpeed: 500,
    });

    // collapse 
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("collapse_active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }






    // portfolio section filter custom js



})(jQuery);