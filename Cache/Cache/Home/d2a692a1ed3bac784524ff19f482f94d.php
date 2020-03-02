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
            src: url('font/Roboto.ttf');
        }
    </style>
    <script type="text/javascript" src="__PUBLIC__/www/js/jquery-3.3.1.min.js"></script>
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
                            <span>Wechat:<?php echo ($phone); ?></span></div>
                        <div class="phone col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="__PUBLIC__/www/images/phone.png" alt="">
                            <span>Whatsapp:<?php echo ($Whatsapp); ?></span>
                        </div>
                        <div class="email col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="__PUBLIC__/www/images/email.png" alt="">
                            <span><?php echo ($email); ?></span></div>
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
                        <img src="__PUBLIC__/www/images/logo.png" alt="">
                        <div class="ad">one-stop creative modular solutions</div>
                    </div>
                    <div class="list col-lg-6 col-md-6 col-sm-6">
                        <ul class="clearfix">
                            <li class="nav-active"><a href="javascript:;">HOME</a></li>
                            <li><a href="#product">PRODUCT</a></li>
                            <li><a href="#about">About us</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="index">
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["pic"]); ?>" alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- produtc -->
        <div class="product">
            <a name="product"></a>
            <h3>product</h3>
            <div class="list">
                <div class="gallery clearfix">

                    <?php  $_result=M("Product")->field("thumb,title,radis,cont,listorder,id")->where(" 1  AND status=1  AND catid=73")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><!-- 图文 -->
                    <?php if($r['radis']==1) : ?>
                    <div class="content col-lg-6 col-md-6 clearfix">
                        <div class="box-img col-lg-6 col-md-6 col-xs-6">
                            <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                        </div>
                        <div class="txt col-lg-6 col-md-6 col-xs-6">
                           <?php echo ($r["cont"]); ?>
                        </div>
                    </div>
                    <?php else :?>
                    <!-- 文图 -->
                    <div class="content col-lg-6 col-md-6 clearfix">
                        <div class="txt col-lg-6 col-md-6 col-xs-6">
                            <?php echo ($r["cont"]); ?>
                        </div>
                        <div class="box-img col-lg-6 col-md-6 col-xs-6">
                            <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>">
                        </div>
                    </div>
                    <?php endif; endforeach; endif;?>
                


                </div>
            </div>
        </div>

        <!-- about -->
        <div class="about">
            <a name="about"></a>
            <?php getcatvar('page','id = 74','cont');?>
        </div>

        <div class="partners">
            <div class="container">
                <div class="row">
                    <div class="line"></div>
                    <h3>Clients and Partners</h3>
                    <div class="list clearfix">
                        <?php  $_result=M("Case")->field("id,catid,url,title,title_style,keywords,description,thumb,createtime")->where(" 1  AND status=1  AND catid=108")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a class="box-img col-lg-2 col-md-2"><img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>"></a><?php endforeach; endif;?>
                    </div>
                </div>
            </div>
        </div>

        <!-- voice -->
        <div class="voice">

            <div class="container">
                <div class="row">
                    <h3>CUSTOMER VOICE</h3>
                    <div class="list clearfix">
                        <?php  $_result=M("Customer")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="col-lg-4 col-md-4">
                            <div class="box">
                                <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" class="avatar">
                                <div class="txt">
                                    <?php echo ($r["cont"]); ?>
                                </div>
                                <div class="saying"><?php echo ($r["title"]); ?></div>
                            </div>
                        </div><?php endforeach; endif;?>
                    </div>
                </div>
            </div>
        </div>

        <!-- contact -->
        <div class="contact">
            <a name="contact"></a>
            <h3>contact us</h3>
            <div class="container">
                <div class="row">
                    <div class="title">If you are looking for a Trusted Partner, Please do not hesitate to contact us.
                    </div>
                    <form name="form" method="post" onsubmit="return beforeSubmit2(this);"
                        action="index.php?g=Home&a=message">
            <input name="forward" type="hidden" value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>"/>
                        <div class="clearfix" style="padding-bottom:20px">
            <?php getcatvar('page','id = 78','cont');?>
                        </div>
                        <input type="submit" value="SUBMIT" class="submit-btn">
                    </form>
                </div>
            </div>

        </div>
    </div>
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
                        <div class="col-lg-4 col-md-4"><img src="__PUBLIC__/www/images/fax.png" alt=""><?php echo ($domestic_fax); ?></div>
                        <div class="col-lg-4 col-md-4"><img src="__PUBLIC__/www/images/email.png" alt=""><?php echo ($email); ?></div>
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
    </footer>

</body>

<script type="text/javascript" src="__PUBLIC__/www/js/swiper-4.5.0.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/wow.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/www/js/main.js"></script>

</html>