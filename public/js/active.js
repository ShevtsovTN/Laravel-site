(function ($) {
    'use strict';

    let $window = $(window);

    // :: Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: Search Form Active
    let searchbtnI = $(".searchbtn i");
    let searchbtn = $(".searchbtn");

    searchbtnI.addClass('fa-search');
    searchbtn.on('click', function () {
        $("body").toggleClass('search-close');
        searchbtnI.toggleClass('fa-times');
    });

    // :: More Filter Active Code
    $("#moreFilter").on('click', function () {
        $(".search-form-second-steps").slideToggle('1000');
    });

    // :: Nav Active Code
    if ($.fn.classyNav) {
        $('#southNav').classyNav({
            theme: 'dark'
        });
    }

    // :: Sticky Active Code
    if ($.fn.sticky) {
        $("#stickyHeader").sticky({
            topSpacing: 0
        });
    }

    // :: Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip()
    }

    // :: Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
        /*$('.list .option').on('click', function(){
            //console.log(this.attributes['data-value'].value);
            let value = this.attributes['data-value'].value;
            let parent = document.querySelector('#listings');
            let itemsArray = [];
            let nodeListListening = document.querySelectorAll('.listing');
            for (let i = 0; i < nodeListListening.length; i++) {
                itemsArray.push(parent.removeChild(nodeListListening[i]));
            }
            switch (value) {
                case '0':
                    for (let i = 0; i < objListing.length; i++) {
                        console.log(objListing[i]);
                    }
                    break;
                case '1':
                    for (let i = 0; i < objListing.length; i++) {
                        console.log(objListing[i]);
                    }
                    break;
                case '2':
                    // nodeListListening.attributes['data-value'].value
                    itemsArray.sort(function(nodeA, nodeB) {
                        let numberA = nodeA.attributes['data-value'].value;
                        let numberB = nodeB.attributes['data-value'].value;
                        if (numberA < numberB) return 1;
                        if (numberA > numberB) return -1;
                        return 0;
                    })
                        .forEach(function(node) {
                            parent.appendChild(node)
                        });
                    console.log(parent);
                    break;
                case '3':
                    for (let i = 0; i < objListing.length; i++) {
                        console.log(objListing[i]);
                    }
                    break;
            }
        });*/
    }
    // Sorting Code


    // :: Owl Carousel Active Code
    if ($.fn.owlCarousel) {

        let welcomeSlide = $('.hero-slides');

        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        welcomeSlide.on('translate.owl.carousel', function () {
            let slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                let anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            let slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                let anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            let anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            let anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        // Dots Showing Number
        let dot = $('.hero-slides .owl-dot');

        dot.each(function () {
            let dotnumber = $(this).index() + 1;
            if (dotnumber <= 9) {
                $(this).html('0').append(dotnumber);
            } else {
                $(this).html(dotnumber);
            }
        });

        $('.testimonials-slides').owlCarousel({
            items: 3,
            margin: 50,
            loop: true,
            center: true,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 3
                }
            }
        });

        $('.featured-properties-slides, .single-listings-sliders').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>']
        });
    }

    // :: CounterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1000,
            easingType: 'easeInOutQuart',
            scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
        });
    }

    // :: PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }

    // :: Slider Range
    $('.slider-range-price').each(function () {
        let min = jQuery(this).data('min');
        let max = jQuery(this).data('max');
        let unit = jQuery(this).data('unit');
        let value_min = jQuery(this).data('value-min');
        let value_max = jQuery(this).data('value-max');
        let t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = ui.values[0] + unit + ' - ' + ui.values[1] + unit;
                t.closest('.slider-range').find('.range').html(result);
                t.closest('.slider-range').find('.to').attr('value', ui.values[1]);
                t.closest('.slider-range').find('.from').attr('value', ui.values[0]);
            }
        });
    })

    // :: Slider Range Data to Input




})(jQuery);
