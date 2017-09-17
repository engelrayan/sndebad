/*global $ */
$(document).ready(function () {
    "use strict";

    $('.t').cycle({
        fx: 'scrollHorz',
        sync: true,
        prev: '#left',
        next: '#right'
    });

    $('#paus').click(function () {
        $('.t').cycle('pause');
    });


    $('#play').click(function () {
        $('.t').cycle('resume', true);
    });


    $('#show-adv').click(function () {
        $('.jop-show1').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.forget').click(function () {
        $('.form-body').hide(1000);
        $('.forgetpass').show(1000);
    });

    $('.gohome').click(function () {
        $('.forgetpass').hide(1000);
        $('.form-body').show(1000);
    });


    $('#show-up').click(function () {
        $('.myhead').stop();
        $('.myhead').slideUp();
    });

    $('#show-down').click(function () {
        $('.myhead').stop();
        $('.myhead').slideDown();
    });


    $('#edit-comp').click(function () {
        $('.edit-comp').bPopup({
            speed: 450,
            transition: 'slideDown'
                //        positionStyle: 'fixed'
        });
    });


    $('#edit-prod').click(function () {
        $('.add-prod').bPopup({
            speed: 450,
            transition: 'slideDown'
                //        positionStyle: 'fixed'
        });
    });

    $('.add-prod-btn').click(function () {
        $('.add-prod').bPopup({
            speed: 450,
            transition: 'slideDown'
                //        positionStyle: 'fixed'
        });
    });

    $('#edit-offer').click(function () {
        $('.add-offer').bPopup({
            speed: 450,
            transition: 'slideDown'
                //        positionStyle: 'fixed'
        });
    });


    //for tooltip
    $('[data-toggle="tooltip"]').tooltip();

    $('#add-dept').click(function () {
        $('.an-sort').slideToggle(300);
    });

    $(".open-map").click(function (e) {
        $(".s-area").animate({
            'margin-left': '140px'
        }, 400);
        e.stopPropagation();
    });

    $(document).click(function (e) {
        if (!$(e.target).is('.s-area, .s-area *')) {
            $(".s-area").animate({
                'margin-left': '-550px'
            }, 400);
        }
    });

    $(".open-cog").click(function (e) {
        $(".control-pg").animate({
            'margin-left': '0px'
        }, 400);
        e.stopPropagation();
    });

    $(document).click(function (e) {
        if (!$(e.target).is('.control-pg, .control-pg *')) {
            $(".control-pg").animate({
                'margin-left': '-240px'
            }, 400);
        }
    });


    $('.login-btn').click(function () {
        $('.login-form').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });
    
    $('.btn-info').click(function () {
        $('.flash-msg').bPopup({
            speed: 450
        });
    });
    
    $('#show-flah2').click(function () {
        $('.flash-msg1').bPopup({
            speed: 450
        });
    });
    
    $('.forget-mail').click(function () {
        $('.forget-mail1').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });


    $('.show-pass').click(function () {
        $('.login-pass').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.pr-ord').click(function () {
        $('.order-prod').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('#show-all').click(function () {
        $('.all-shown').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.signup-btn').click(function () {
        $('.area-serch').bPopup({
            speed: 650,
            transition: 'slideIn',
            transitionClose: 'slideBack'
        });
    });

    $('#edit-social').click(function () {
        $('.edited-social').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.show-jop').click(function () {
        $('.jop-show').bPopup({
            speed: 650,
            transition: 'slideIn',
            transitionClose: 'slideBack'
        });
    });

    $('.slider4').bxSlider({
        slideWidth: 270,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 1,
        controls: true,
        auto: true,
        responsive: true,
        autoHover: true,
        pager: false
    });

    $('.slider5').bxSlider({
        slideWidth: 270,
        minSlides: 2,
        maxSlides: 4,
        moveSlides: 1,
        slideMargin: 1,
        controls: true,
        auto: true,
        responsive: true,
        autoHover: true,
        pager: false
    });

    //mixit up
    $('#portfolio-container').mixItUp();

    $('.add-other').click(function () {
        var oth = $('#other').html();
        $(this).parents('.widme').find('#other').append(oth);
    });

    $('.login-btn1').click(function () {
        $('.messg-sent').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('.login-btn2').click(function () {
        $('.messg-sent').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    });

    $('#show-adj8').click(function () {
        $('#adj8').fadeIn(6000);
    });

    $('.show-tab2').click(function () {
        $('#tab1').hide();
        $('#tab2').show();
    });

    $('.show-tab1').click(function () {
        $('#tab2').hide();
        $('#tab1').show();
    });


});

function checkButton1() {
    "use strict";
    if (document.getElementById("bm").checked === true) {
        $('.bef-login').bPopup({
            contentContainer: '.content'
        });
    } else if (document.getElementById("emp").checked === true) {
        $(".show-search").stop();
        $(".show-search").fadeToggle();
    }
}

function checkButton2() {
    "use strict";
    if (document.getElementById("bm1").checked === true) {
        $('.login-form').bPopup({
            speed: 450,
            transition: 'slideDown'
        });
    } else if (document.getElementById("emp1").checked === true) {
        window.open('addComp.html', '_self');
    }
}