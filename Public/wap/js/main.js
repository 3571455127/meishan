
$(function () {

    // index
    var swiper = new Swiper('.index .swiper-container', {
        autoplay: true,
        loop: true,
        pagination: {
            el: '.index .swiper-pagination',
        },
    });




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


    // 导航
    $("header .menu .menu-btn").click(function () {
        // $("header .menu .nav-ul").show(600);
        var flag = $(this).next().is(':hidden');
        console.log(flag);
        if (flag) {
            $(this).next().show(600);
        } else {
            $(this).next().hide(600);
        }
    })
    $("header .menu .nav-ul a").click(function () {
        $("header .menu .nav-ul").hide();
    })

    $(window).scroll(function () {
        /* 判断滚动条 距离页面顶部的距离 100可以自定义*/
        if ($(window).scrollTop() > 100) {
            $("header .menu .nav-ul").hide();
        }

    });


})

var submitcount2 = 0;

function MailingListValidation(SubscriberForm) {

    if (SubscriberForm.pf_SubscriberName.value == '') {
        alert('Name can not be empty');
        SubscriberForm.pf_SubscriberName.focus();
        return false;
    } else if (SubscriberForm.pf_Email.value == '') {
        alert('Please enter the correct email format');
        SubscriberForm.pf_Email.focus();
        return false;
    } else if (SubscriberForm.pf_Email.value.indexOf('@') < 0) {
        alert('The email is wrong');
        SubscriberForm.pf_Email.focus();
        return false;
    } else if (SubscriberForm.pf_Demographicfield2.value == '') {
        alert('The cellphone can not be empty');
        SubscriberForm.pf_Demographicfield2.focus();
        return false;
    } else if (SubscriberForm.pf_Demographicfield2.value.length < 5) {
        alert('The phone is wrong');
        SubscriberForm.pf_Demographicfield2.focus();
        return false;
    } else if (SubscriberForm.pf_Demographicfield1.value == '') {
        alert('The Country can not be empty');
        SubscriberForm.pf_Demographicfield1.focus();
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
function resetform() {
    //    alert(1);
    $('.reset').click();
}
$('.submit-btn').click(function () {
    setTimeout("resetform()", 3000);
});






