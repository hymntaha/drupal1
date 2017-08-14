(function($) {

    $.fn.fadeInOnLoad = function (delay, speed) {
        this.stop().delay(delay).css({ opacity: 0.0 }).animate({ opacity: 1.0 }, speed, function () {
        });
    }

    $(document).ready(function(){

        //########## Primary Navigation ##########//

        $("#nice-menu-1").superfish({
            delay: 300,                                              
            animation: { opacity: 'show', height: 'show' },         
            speed: 'fast'                                           
        });
        
        //########## Slideshow ##########//

        $('#slideshow img:first').addClass('active');

        var active = $('#slideshow img.active');

        $(active).css({ opacity: 0.0 }).animate({ opacity: 1.0 }, 1400, function () {});

        active = active.next();

        $(active).stop().delay(3000).css({ opacity: 0.0 }).animate({ opacity: 1.0 }, 1400, function () {});

        active = active.next();

        $(active).stop().delay(6000).css({ opacity: 0.0 }).animate({ opacity: 1.0 }, 1400, function () {
            $('#block-views-recent-closes-block .view-content').roundabout("startAutoplay");
        });

        $('#home-text').fadeInOnLoad(6000, 1400);
        $('#block-views-recent-closes-block').fadeInOnLoad(6000, 1400);

        //########## Carousel ##########//

        if ($('#block-views-recent-closes-block .view-content .views-row').length > 0) {
            $('#block-views-recent-closes-block .view-content').roundabout({
                childSelector: '.views-row',
                btnNext: "#next",
                btnPrev: "#previous",
                minOpacity: 0.8,
                minScale: 0.7,
                maxScale: 1.0,
                duration: 350,
                autoplay: false,
                autoplayDuration: 3000,
                autoplayPauseOnHover: true,
            });

            $('#block-views-recent-closes-block .carouselButtons').hover(
            function () {
                $('#block-views-recent-closes-block .view-content').roundabout("stopAutoplay")
            }, function () {
                $('#block-views-recent-closes-block .view-content').roundabout("startAutoplay")
            });
        }

        //########## Tipsy Tool Tip ##########//

        $('.views-tooltip').each(function () {

            var me = this,
                timer = null,
                visible = false;

            function leave() {
                timer = setTimeout(function () {
                    $(me).tipsy('hide');
                    visible = false;
                }, 0);
            }

            function enter() {
                if (visible) {
                    clearTimeout(timer);
                } else {
                    $(me).tipsy('show');
                    $('.tipsy').hover(enter, leave);
                    visible = true;
                }
            }

            $(this).tipsy({html: true, trigger: 'manual'});
            $(this).hover(enter, leave);

        });


        //########## Fix IE 8 not picking up on psuedo element last-child ##########//

        $("#nice-menu-1 li ul li:last-child a").css("border-bottom", "1px solid #FFF");

        //########## js for press page  ##########//

        $('#node-32 .content .field .field-items .field-item ul:gt(5)').hide();

        if('#node-32 .content .field .field-items .field-item p:contains(",")'){
            $('#node-32 .content .field .field-items .field-item p:contains(",")').wrap( "<div class='date'></div>" );
        }

        $('#node-32 .content .field .field-items .field-item .date:gt(5)').hide();

        $('#node-32 .content .field .field-items .field-item p:gt(12)').hide();

        $('#node-32 .content .field .field-items .field-item').after( "<div class='show-more'><a id='show-more-link' href='javascript:void(0)'>Show More</a></div>");

        $('#show-more-link').click(function() {
            $('#node-32 .content .field .field-items .field-item ul:gt(5)').show();
            $('#node-32 .content .field .field-items .field-item .date:gt(5)').show();
            $('#node-32 .content .field .field-items .field-item p:gt(12)').show();
            $(this).hide();
        });


    });   
})(jQuery);

(function($) {
    Drupal.behaviors.events = {
        attach: function(context, settings) {
            $('#block-views-clients-list-block', context).ajaxStart(function(){
                $('#block-views-clients-list-block', context).fadeTo(100, 0.5);
            });
            $('#block-views-clients-list-block', context).ajaxSuccess(function(){
                $('#block-views-clients-list-block', context).css('opacity', 0.5).fadeTo(300, 1.0);
                //$('#block-views-clients-list-block', context).fadeTo(100, 1.0);
            });
        }
    };
})(jQuery);


