$(document).ready(function() { 

    (function ($) { 

        $('.courses-carousel').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:true
                },
                1000:{
                    items:2,
                    nav:true,
                    loop:true
                }
            }
        });

        $('.testimonials-carousel').owlCarousel({
            loop:true,
            responsiveClass:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1,
                    dots: true,
                    nav:false
                },
                600:{
                    items:1,
                    dots: true,
                    nav:false
                },
                1000:{
                    items:1,
                    nav:true,
                    dots: true,
                    loop:true
                }
            }
        });

        $('.clientsLogo').owlCarousel({
            loop:true,
            margin: 30,
            autoplay:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                600:{
                    items:4,
                    nav:false
                },
                1000:{
                    items:6,
                    nav:true,
                    loop:true
                }
            }
        }); 

        $('.eventGallery').owlCarousel({
            loop:true,
            margin: 30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                600:{
                    items:4,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:false,
                    loop:true
                }
            }
        }); 

        $('.studentFullCarousel').owlCarousel({
            loop:true,
            margin: 30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:true,
                    dots: true,
                }
            }
        });

        $( ".dropdownIcon" ).click(function() {
            $( ".dropdownIcon" ).removeClass( "dropdownIconDown" );
            $( this ).toggleClass( "dropdownIconDown" );
        });  

        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
        
        $('.tab ul.tabs li a').click(function (g) { 
            var tab = $(this).closest('.tab'), 
                index = $(this).closest('li').index();
            
            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');
            
            tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
            tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
            
            g.preventDefault();
        } );


        $(".courseAccordian .title").click(function(e){
            $('courseAccordian .title').find('.fa.fa-plus open').toggleClass('open');
            $($(e.target).find('.fa.fa-plus').toggleClass('open'));
            $(".courseAccordian ol ul").slideUp();
            if ($(this).next().is(":hidden")){
                $(this).next().slideDown();
            }
        });


        var menuItems = document.querySelectorAll('li.dropDown');
        Array.prototype.forEach.call(menuItems, function(el, i){
            var activatingA = el.querySelector('a');
            var btn = '<button><span><span class="visuallyhidden">show submenu for “' + activatingA.text + '”</span></span></button>';
            activatingA.insertAdjacentHTML('afterend', btn);

            el.querySelector('button').addEventListener("click",  function(event){
                if (this.parentNode.className == "dropDown") {
                    this.parentNode.className = "dropDown open";
                    this.parentNode.querySelector('a').setAttribute('aria-expanded', "true");
                    this.parentNode.querySelector('button').setAttribute('aria-expanded', "true");
                } else {
                    this.parentNode.className = "dropDown";
                    this.parentNode.querySelector('a').setAttribute('aria-expanded', "false");
                    this.parentNode.querySelector('button').setAttribute('aria-expanded', "false");
                }
                event.preventDefault();
            });
        });     

        $('.contentAcc').magicAccordion({
            headingTag  : 'h2',
            bodyClass   : 'body',
            headClass   : 'head',
            activeClass : 'active',
            speed       : 200,
            easing      : 'swing'
        }).on( 'opened.magic', function(e){
            console.log(e.head);
        }).on( 'closed.magic', function(e){
            console.log(e.body);
        });

        var app = $('.contentAcc').data( 'magic-accordion' );
        $('.unbind').click( function(e) {
            e.preventDefault();
            app.unbind();
        });
        $('.rebind').click( function(e) {
            e.preventDefault();
            app.rebind();
        });

    })(jQuery);

    // window.onload = function() {
    //     document.addEventListener("contextmenu", function(e){
    //       e.preventDefault();
    //     }, false);
    //     document.addEventListener("keydown", function(e) {
    //     //document.onkeydown = function(e) {
    //       // "I" key
    //       if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
    //         disabledEvent(e);
    //       }
    //       // "J" key
    //       if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
    //         disabledEvent(e);
    //       }
    //       // "S" key + macOS
    //       if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
    //         disabledEvent(e);
    //       }
    //       // "U" key
    //       if (e.ctrlKey && e.keyCode == 85) {
    //         disabledEvent(e);
    //       }
    //       // "F12" key
    //       if (event.keyCode == 123) {
    //         disabledEvent(e);
    //       }
    //     }, false);
    //     function disabledEvent(e){
    //       if (e.stopPropagation){
    //         e.stopPropagation();
    //       } else if (window.event){
    //         window.event.cancelBubble = true;
    //       }
    //       e.preventDefault();
    //       return false;
    //     }
    // };


    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
        }

    });
    jQuery('.scrollup').click(function () {
            jQuery("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
    });

});

