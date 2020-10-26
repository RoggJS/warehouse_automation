$(function () {


    $('.menu__icon').on('click', function () {
        $(this).closest('.menu__icon').toggleClass('active');
        $('.header-menu__list').toggleClass('active');
        $('.header-menu__list').slideToggle('slow', function () {
            if ($('.header-menu__list').css('display') === 'none') {
                $('.header-menu__list').removeAttr('style');
            }
        });
    });


    $(".submenu-link").on("click", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        $('.header-menu__submenu').slideToggle('slow', function () {
            if ($('.header-menu__submenu').css('display') === 'none') {
                $('.header-menu__submenu').removeAttr('style');
            }
        });
        $('.submenu-container__arrow').toggleClass('rotate');
    });

    $('#popup-contact-from').on('submit', function () {

        $('.popup-form-container').hide(200);
        $('.popup-form-success').show(200);

    })

});


