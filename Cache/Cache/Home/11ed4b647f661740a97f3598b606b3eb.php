<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <!-- css -->
    <link rel="stylesheet" href="__PUBLIC__/wap/css/swiper-4.5.0.min.css">
    <link rel="stylesheet" href="__PUBLIC__/wap/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/wap/css/reset.css">
    <link rel="stylesheet" href="__PUBLIC__/wap/css/main.css">
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e65b5d53a9fd537"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5e5f1a28c32b5c1917396a94/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body>

    <!-- header -->
    <header>
        <div class="info clearfix">
            <div class="wechat">
                <img src="__PUBLIC__/www/images/wechat.png" alt="">
                <span>Wechat:<?php echo ($phone); ?></span></div>
            <div class="phone">
                <a href="https://wa.me/86<?php echo ($Whatsapp); ?>?text=<?php echo ($Whatsapptitle); ?>"
                    target="_blank">
                    <img src="__PUBLIC__/www/images/phone.png" alt="">
                    <span>Whatsapp:+86 <?php echo ($Whatsapp); ?></span>
                </a>

            </div>
        </div>
        <div class="shaer clearfix">
            <a href="<?php echo ($facebook); ?>" target="_blank" rel="noopener">
                <img src="__PUBLIC__/wap/images/facebook.png" alt="facebook">
            </a>
            <a href="<?php echo ($twitter); ?>" target="_blank" rel="noopener">
                <img src="__PUBLIC__/wap/images/twitter.png" alt="twitter">
            </a>
            <a href="<?php echo ($ins); ?>" target="_blank" rel="noopener">
                <img src="__PUBLIC__/wap/images/linkedin.png" alt="linkedin">
            </a>
            <a href="<?php echo ($youtube); ?>" target="_blank" rel="noopener">
                <img src="__PUBLIC__/wap/images/youtube.png" alt="youtube">
            </a>
        </div>

        <div class="logo"><a href="">
                <img src="__PUBLIC__/wap/images/logo.png" alt="">
            </a></div>
        <div class="menu">
            <img src="images/menu.png" alt="" class="menu-btn">
            <div class="nav-ul">
                <a href="javascript:;">HOME</a>
                <a href="#product">PRODUCT</a>
                <a href="#about">About us</a>
                <a href="#contact">Contact us</a>
            </div>
        </div>
    </header>
<!-- <div class="index">
        <div class="top_img">
            <img src="__PUBLIC__/wap/images/top_img.jpg" alt="" />
        </div>
    </div>
 
    <div class="index_content">
        <div class="contact_2">
            <h6 style="margin-bottom: 1px;">Thanks for your inquiry!</h6>
            <p>Our Professional Team Will Contact With You In 24 Hours.</p>
        </div>
        
        <div class="contact_3">
            <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d3677.8552198953444!2d113.23522731543332!3d22.807827985062172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340248e1962a1313%3A0x32246cb8177d4ac2!2z5bm_5Lic55yB5L2b5bGx5biC6aG65b635Yy66L-e5a6J57q_!5e0!3m2!1szh-CN!2scn!4v1539765743992" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div> -->


<div class="thank">
    <div class="container">
        <div class="row">
            <h5>Thanks for your inquiry!</h5>
            <p>Our Professional Team Will Contact With You In 24 Hours</p>
            <a class="link" href="/" onclick="history.go(-1)"><span id="sec">5</span>s Back Home</a>
            <img class="back" src="__PUBLIC__/www/images/back.png" alt="back" onclick="
                window.location = 'https://www.kissmodular.com/'" />
        </div>
    </div>
</div>
<script type="text/javascript" src="__PUBLIC__/www/js/jquery-3.3.1.min.js"></script>
<script>
    // $(function () {
    //     setTimeout("lazyGo();", 1000);
    // });

    // function lazyGo() {
    //     var sec = $("#sec").text();
    //     $("#sec").text(--sec);
    //     if (sec > 0)
    //         setTimeout("lazyGo();", 1000);
    //     else

    //         window.location = "https://www.kissmodular.com/";
    // }
</script>
<footer>
    <div class="info">
        <div class="box">
            <ul>
                <li>
                    <div class="box-img"> <img src="__PUBLIC__/wap/images/address.png" alt=""></div>
                    <div class="txt"><?php echo ($address); ?></div>
                </li>
                <li>
                    <div class="box-img"><img src="__PUBLIC__/wap/images/url.png" alt=""></div><?php echo ($wwwurl); ?>
                </li>
                <li>
                    <div class="box-img"><img src="__PUBLIC__/wap/images/phone-b.png" alt=""></div><?php echo ($phonea); ?>
                </li>
                <li>
                    <div class="box-img"><img src="__PUBLIC__/wap/images/fax.png" alt=""></div><?php echo ($domestic_fax); ?>
                </li>
                <li>
                    <div class="box-img"><img src="__PUBLIC__/wap/images/email.png" alt=""></div>
                    <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                        <span><?php echo ($email); ?></span> </a>
                </li>

                <li>COPYRIGHT 2020 DISPLAY ALL RIGHTS RESERVED</li>
            </ul>
        </div>
        <div class="copy">
            <?php echo ($cop); ?>
        </div>
    </div>

    <!-- gotop -->
    <div class="goTop" style="display: block;">
        <i class="topIcon"></i>
        <p>TOP</p>
    </div>

    <!-- <div class="whatsapp">
        <a href="https://wa.me/86<?php echo ($Whatsapp); ?>?text=<?php echo ($Whatsapptitle); ?>" target="_blank"><img
                src="__PUBLIC__/www/images/whatsapp.png" alt=""></a>
    </div> -->
</footer>

</body>
<!-- js -->
<script type="text/javascript" src="__PUBLIC__/wap/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/wap/js/swiper-4.5.0.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/wap/js/wow.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/wap/js/main.js"></script>

</html>