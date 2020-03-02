$(function () {
    var swiper = new Swiper('.index .index-swiper .swiper-container', {
        loop: true,
        autoplay: true,
        pagination: {
            el: '.index .index-swiper .swiper-pagination',
        },
        navigation: {
            nextEl: '.index .index-swiper .swiper-button-next',
            prevEl: '.index .index-swiper .swiper-button-prev',
        },
    });

    var swiper = new Swiper('.index .voice .swiper-container', {
        loop: true,
        // autoplay: true,
        slidesPerView: 3,
        spaceBetween: 30,
        loopFillGroupWithBlank: true,
        pagination: {
            el: '.index .voice .swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.index .voice .swiper-button-next',
            prevEl: '.index .voice .swiper-button-prev',
        },
    });

    // nav
    $("header .nav li").mouseover(function () {
        $(this).addClass("nav-active").siblings().removeClass("nav-active");
    })
    $("header .nav li").click(function () {
        $(this).addClass("nav-active").siblings().removeClass("nav-active");
    })

    // 返回顶部
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $(".goTop").fadeIn(1000);

        } else {
            $(".goTop").fadeOut(1000);
        }
    });
    $(".goTop").click(function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
    });

})


var submitcount2 = 0;

function beforeSubmit2(form) {

    if (form.name.value == '') {
        alert('Name can not be empty');
        form.name.focus();
        return false;
    } else if (form.email.value == '') {
        alert('Please enter the correct email format');
        form.email.focus();
        return false;
    } else if (form.email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        form.email.focus();
        return false;
    } else if (form.phone.value == '') {
        alert('The cellphone can not be empty');
        form.phone.focus();
        return false;
    } else if (form.cellphone.value.length < 11) {
        alert('The phone is wrong');
        form.phone.focus();
        return false;
    } else if (form.counntry.value == '') {
        alert('The counntry can not be empty');
        form.counntry.focus();
        return false;
    } else {

        if (submitcount2 == 0) {
            submitcount2++;
            return true;
        } else {
            alert("Message is being sent, please wait!");
            return false;

        }
    }

}
