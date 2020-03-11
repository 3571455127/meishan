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
<div class="index">
    <!-- banner 轮播 -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php  $_result=M("slide_data")->field("*")->where("fid = 2 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["pic"]); ?>"
                            alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <!-- product -->
    <div class="product">
        <a name="about"></a>

        <div class="product-boxs">
            <h3>PRODUCTS</h3>
            <div class="product-share">
                <div class="addthis_inline_share_toolbox_m0jr"></div>
            </div>
        </div>
        <div class="box">
            <?php  $_result=M("Product")->field("thumb,title,radis,cont,listorder,id,pcont")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="list">
                    <div class="box-img"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                        <a href="" target="_blank"><img src="__PUBLIC__/wap/images/link.png" alt=""></a></div>
                    <div class="content">
                        <?php echo ($r["pcont"]); ?>

                    </div>
                </div><?php endforeach; endif;?>
        </div>
    </div>

    <!-- about -->
    <div class="about">
        <a name="about"></a>
        <?php getcatvar('page','id = 74','pcont');?>

    </div>

    <!-- partners -->
    <div class="partners">
        <h3>Clients and Partners</h3>
        <div class="list clearfix">
            <?php  $_result=M("Case")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  AND status=1  AND catid=108")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a class="box-img"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></a><?php endforeach; endif;?>
            <!--<a class="box-img"><img src="__PUBLIC__/wap/images/partners2.png" alt=""></a>-->
        </div>
    </div>


    <!-- voice -->
    <div class="voice">
        <h3>CUSTOMER VOICE</h3>
        <div class="voice-swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php  $_result=M("Customer")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
                            <div class="box">
                                <div class="box-img"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" class="avatar"></div>

                                <div class="txt">
                                    <?php echo ($r["cont"]); ?>
                                </div>
                                <div class="saying"><?php echo ($r["title"]); ?></div>
                            </div>
                        </div><?php endforeach; endif;?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>


    </div>


    <!-- Contact Us -->
    <div class="contact">
        <a name="contact"></a>
        <h3>Contact Us</h3>
        <form name="form" method="post" onsubmit="return beforeSubmit2(this);" action="index.php?g=Home&a=message">
            <div class="clearfix">
                <input name="forward" type="hidden"
                    value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>" />
                <div class="clearfix" style="padding-bottom:20px">
                    <?php getcatvar('page','id = 78','pcont');?>
                </div>
                <div class="btn-box">
                    <input type="submit" value="SUBMIT" class="submit-btn">
                </div>

        </form>
    </div>


</div>
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