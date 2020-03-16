<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($seo_description); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="Robots" content="all">

    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> -->
    <title><?php if(MODULE_NAME != 'Index') : echo ($seo_title); else : echo ($site_name); endif;?></title>

    <!-- css -->
    <link rel="stylesheet" href="__PUBLIC__/www/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/swiper-4.5.0.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/animate.min.css">
    <link rel="stylesheet" href="__PUBLIC__/www/css/main.css">

    <!-- 字体引入 -->
    <style>
        @font-face {
            font-family: 'Roboto';
            src: url('__PUBLIC__/www/font/Roboto.ttf');
        }
    </style>
    <script type="text/javascript" src="__PUBLIC__/www/js/jquery-3.3.1.min.js"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
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
    <script>
        function IsPC() {
            var userAgentInfo = navigator.userAgent;
            var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"
            ];
            var flag = true;
            for (var v = 0; v < Agents.length; v++) {
                if (userAgentInfo.indexOf(Agents[v]) > 0) {
                    flag = false;
                    break;
                }
            }
            return flag;
        }
        var isp = IsPC();
        if (!isp) {
            window.location.href = "/mobile.php";
        }
    </script>
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="row">

                <!-- 顶部联系信息 -->
                <div class="top-bar clearfix">
                    <!-- 电话与邮箱 -->
                    <div class="infos col-lg-9 col-md-9 col-sm-9">
                        <div class="wechat col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="__PUBLIC__/www/images/wechat.png" alt="">
                            <span>Wechat:<?php echo ($phone); ?></span>
                            <div class="code"><img src="__PUBLIC__/www/images/wechat-code.png" alt=""></div>
                        </div>
                        <div class="phone col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <a class="whatsa" href="https://wa.me/86<?php echo ($Whatsapp); ?>?text=<?php echo ($Whatsapptitle); ?>" target="_blank">
                                <img src="__PUBLIC__/www/images/phone.png" alt="">
                                <span>Whatsapp:+86 <?php echo ($Whatsapp); ?></span></a>
                        </div>
                        <div class="email col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails">
                                <img src="__PUBLIC__/www/images/email.png" alt="">
                                <span><?php echo ($email); ?></span></a></div>
                    </div>
                    <!-- 社媒 -->
                    <div class="medias col-lg-3 col-md-3 col-sm-3">
                        <div class="top-share clearfix">
                            <a href="<?php echo ($facebook); ?>" target="_blank" rel="noopener">
                                <img src="__PUBLIC__/www/images/facebook.png" alt="facebook">
                            </a>
                            <a href="<?php echo ($twitter); ?>" target="_blank" rel="noopener">
                                <img src="__PUBLIC__/www/images/twitter.png" alt="twitter">
                            </a>
                            <a href="<?php echo ($ins); ?>" target="_blank" rel="noopener">
                                <img src="__PUBLIC__/www/images/linkedin.png" alt="linkedin">
                            </a>
                            <a href="<?php echo ($youtube); ?>" target="_blank" rel="noopener">
                                <img src="__PUBLIC__/www/images/youtube.png" alt="youtube">
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 导航 -->
                <div class="nav clearfix">
                    <div class="logo col-lg-6 col-md-6 col-sm-6">
                        <a href="mailto:<?php echo ($email); ?>" target="_blank"> <img src="__PUBLIC__/www/images/logo.png" alt=""></a>
                        <div class="ad">one-stop creative modular solutions</div>
                    </div>
                    <div class="list col-lg-6 col-md-6 col-sm-6">
                        <ul class="clearfix">
                            <li class="nav-active"><a href="/index.php">HOME</a></li>
                            <li><a href="#product">PRODUCT</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- 
<div class="mianbao">
    <div class="mb_dao">
        <img src="__PUBLIC__/www/images/home-icon.png" alt="" onclick="window.open('http://<?php echo $_SERVER['HTTP_HOST']?>','_self');" />
    </div>
</div>

<div class="contact" style="background: #ffffff;margin-top: 150px;padding: 80px 0">
    <h4 style="height: 30px;">Thanks for your inquiry!</h4>
    <div class="contact_center">
        <div class="center_left" style="text-align: center;width: 100%;">
            <p>Our Professional Team Will Contact With You In 24 Hours.</p>
        </div>

    </div>
    <div class="map_div">
        <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d3677.8552198953444!2d113.23522731543332!3d22.807827985062172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340248e1962a1313%3A0x32246cb8177d4ac2!2z5bm_5Lic55yB5L2b5bGx5biC6aG65b635Yy66L-e5a6J57q_!5e0!3m2!1szh-CN!2scn!4v1539765743992" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

</div>
<div class="top_img">
  <img src="__PUBLIC__/www/images/product_bander.jpg" alt="" />
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
    $(function () {
        setTimeout("lazyGo();", 1000);
    });

    function lazyGo() {
        var sec = $("#sec").text();
        $("#sec").text(--sec);
        if (sec > 0)
            setTimeout("lazyGo();", 1000);
        else

            window.location = "https://www.kissmodular.com/";
    }
</script>
 <!--footer -->
 <footer>
     <div class="info">
         <div class="container">
             <div class="row">
                 <div class="box clearfix">
                     <div class="col-lg-7 col-md-7">
                         <img src="__PUBLIC__/www/images/address.png" alt="">
                         <?php echo ($address); ?>
                     </div>
                     <div class="col-lg-5 col-md-5">
                         <img src="__PUBLIC__/www/images/url.png" alt="">
                         <?php echo ($wwwurl); ?>
                     </div>
                 </div>
                 <div class="box clearfix">
                     <div class="col-lg-4 col-md-4"><img src="__PUBLIC__/www/images/phone-b.png" alt=""><?php echo ($phonea); ?></div>
                     <div class="col-lg-4 col-md-4"><img src="__PUBLIC__/www/images/fax.png" alt=""><?php echo ($domestic_fax); ?>
                     </div>
                     <div class="col-lg-4 col-md-4"><a href="mailto:<?php echo ($email); ?>" target="_blank" class="emails"><img
                                 src="__PUBLIC__/www/images/email.png" alt=""> <span><?php echo ($email); ?></span></a></div>
                 </div>
                 <p> COPYRIGHT 2020 DISPLAY ALL RIGHTS RESERVED</p>
             </div>
         </div>

     </div>
     <div class="copy"> <?php echo ($cop); ?></div>

     <div class="goTop" style="display: block;">
         <i class="topIcon"></i>
         <p>TOP</p>
     </div>

     <div class="whatsapp">
         <a href="https://wa.me/86<?php echo ($Whatsapp); ?>?text=<?php echo ($Whatsapptitle); ?>" target="_blank"><img
                 src="__PUBLIC__/www/images/whatsapp.png" alt=""></a>
     </div>
 </footer>

 </body>

 <script type="text/javascript" src="__PUBLIC__/www/js/swiper-4.5.0.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>

 </html>