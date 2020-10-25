$(function() {


//smooth scroll
    $(".navigate-btn").on("click", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        $('.hidden-menu').removeClass('show-menu');
        $('.menu-burger').toggleClass('hidden');
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    });


//form input add .active if no empty
    $(".form__input").change(function () {
        if ($(this).val().trim().length) {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
    });


    $(".form-masked").mask("+7 (999) 999-9999");



});


