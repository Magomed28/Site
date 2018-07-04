

//cart-count
$(document).ready(function(){
    $(".add-to-cart").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/addAjax/"+id, {}, function (data) {
            $("#cart-count").html(data);
        });
        return false;
    });
});

//left-menu
$(document).ready(function(){
    $(".left-menu-icon").click(function(){



        if($(".left-menu").css('left') === '-350px')
        {
            $(".left-menu-icon i:first-child").css('padding-top', 1);
            $(".left-menu-icon i:last-child").css('margin-top', 13);
            $(".left-menu").css('left', 0);
            $(".left-menu-icon i:first-child").css('transform', 'rotate(-45deg)');
            $(".left-menu-icon i:last-child").css('transform', 'rotate(45deg)');
            $(".left-menu-overlay").css('opacity',1)
            $(".left-menu-overlay").css('visibility', "visible")
        }


        else if($(".left-menu").css('left') === '0px')
        {
            $(".left-menu-icon:hover i:first-child").removeAttr("style");
            $(".left-menu-icon:hover i:last-child").removeAttr("style");
            $(".left-menu").css('left', -350);
            $(".left-menu-icon i:first-child").css('transform', 'rotate(0deg)');
            $(".left-menu-icon i:last-child").css('transform', 'rotate(0deg)');
            $(".left-menu-overlay").css('opacity',0)
            $(".left-menu-overlay").css('visibility', "hidden")
        }


    });
});


//slick slider
$(document).ready(function() {
    $('.novelties-slider').slick({
        dots: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplay: true,
        autoplaySpeed: 2500,
        prevArrow: '<button type="button" class="slick-prev slick-arrow"><img src="/template/img/slider-prev-arrow.png"></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow"><img src="/template/img/slider-next-arrow.png"></button>',
        responsive: [
            {
                breakpoint: 1225,
                settings: { 
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 1017,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 793,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

});



//mega-menu
$(document).ready(function(){
   $("#brand").mouseenter(function(){
       $(".brand-mega-menu").css("visibility", "visible")
   })

});

$("#header").mouseleave(function()
    {
    $(".brand-mega-menu").css("visibility", "hidden")
    });

$("#header").click(function()
    {
       $(".brand-mega-menu").css("visibility", "hidden")
    });




//При ширине экрана меньше 576px, прячем меню
function windowSize(){
    if ($(window).width() <= '576') {
        $('.main-menu').hide();

    }
    else {
        $('.main-menu').show();
    }
}

$(window).on("load resize", windowSize);