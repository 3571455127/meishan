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
    <script src="__PUBLIC__/www/js/bootstrap.min.js"></script>
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
<div class="index">
    <!-- Swiper -->
    <div class="index-swiper">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php  $_result=M("slide_data")->field("*")->where("fid = 1 AND status=1 ")->order("id desc")->limit("5")->select();; if ($_result): $n=0;foreach($_result as $key=>$r):++$n;$mod = ($n % 2 );?><div class="swiper-slide"><a href="<?php echo ($r["link"]); ?>" title="<?php echo ($r["title"]); ?>"><img src="<?php echo ($r["pic"]); ?>"
                                alt="<?php echo ($r["title"]); ?>"></a></div><?php endforeach; endif;?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>


    <!-- produtc -->
    <div class="product">
        <a name="product"></a>
        <div class="product-boxs">
            <h3>product</h3>
            <div class="product-share">
                <div class="addthis_inline_share_toolbox_m0jr"></div>
            </div>
        </div>
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
                <h3>customer feedback</h3>
                <!-- <div class="list clearfix">
                    <?php  $_result=M("Customer")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="col-lg-4 col-md-4">
                            <div class="box">
                                <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" class="avatar">
                                <div class="txt">
                                    <?php echo ($r["cont"]); ?>
                                </div>
                                <div class="saying"><?php echo ($r["title"]); ?></div>
                            </div>
                        </div><?php endforeach; endif;?>
                </div> -->

                <!-- Swiper -->
                <div class="list">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php  $_result=M("Customer")->field("thumb,title,cont,listorder,id")->where(" 1  AND status=1  AND catid=110")->order("listorder desc")->limit("12")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><div class="swiper-slide">
                                    <div class="box">
                                        <div class="images"> <img src="<?php echo ($r["thumb"]); ?>" alt="<?php echo ($r["title"]); ?>" class="avatar">
                                        </div>
                                        <div class="voice-bg">
                                            <div class="txt">
                                                <?php echo ($r["cont"]); ?>
                                            </div>
                                            <div class="saying"><?php echo ($r["title"]); ?></div>
                                        </div>

                                    </div>

                                </div><?php endforeach; endif;?>

                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
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
                <form target="_blank" name="SubscriberForm" method="post" onsubmit="return MailingListValidation(this);"
                    action="https://www.anpasia.com/public/process-subscription-form.aspx?formId=47435C407440475143">
                    <input name="forward" type="hidden"
                        value="<?php echo ($_SERVER['SERVER_NAME']); if($catid) : ?>/index.php?m=<?php echo ($Categorys[$catid]['module']); ?>&a=index&id=<?php echo ($catid); else :?>/index.php<?php endif;?>" />

                    <div class="clearfix" style="padding-bottom:20px">
                        <!-- <?php getcatvar('page','id = 78','cont');?> -->
                        <div class="col-lg-6 col-md-6">
                            <div class="box">
                                <p>
                                    Name <span> *</span>
                                </p>
                                <input type="text" name="pf_SubscriberName" />
                            </div>
                            <div class="box">
                                <p>
                                    Date of Birth
                                </p>
                                <input type="text" name="pf_Demographicfield26" />
                            </div>
                            <div class="box">
                                <p>
                                    Cellphone <span> *</span>
                                </p>
                                <input type="text" name="pf_Demographicfield2" />
                            </div>
                            <div class="box">
                                <p>
                                    Website of Social Media Account
                                </p>
                                <input type="text" name="pf_Demographicfield35" />
                            </div>
                            <div class="box">
                                <p>
                                    Country <span> *</span>
                                </p>
                                <input type="text" name="pf_Demographicfield1" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="box">
                                <p>
                                    Email <span>*</span>
                                </p>
                                <input type="text" name="pf_Email" />
                            </div>
                            <div class="box need">
                                <p> What Do I Need </p>
                                <select name="pf_Demographicfield37">
                                    <option value="EASYFOLD02" selected>EASYFOLD02
                                    </option>
                                    <option value="KNOCKDOWN03">KNOCKDOWN03</option>
                                    <option value="FLATPACK01">FLATPACK01</option>
                                    <option value="FLATPACK02">FLATPACK02</option>
                                    <option value="FLATPACK03">FLATPACK03</option>
                                    <option value="EXPANDABLE02">EXPANDABLE02</option>
                                    <option value="K-MODULES">K-MODULES</option>
                                    <option value="PORTABLE01">PORTABLE01</option>
                                    <option value="KNOCKDOWN01">KNOCKDOWN01</option>
                                    <option value="TRAILERC01">TRAILERC01</option>
                                    <option value="GUARDHOUSE">GUARDHOUSE</option>
                                    <option value="PANELS">PANELS</option>
                                    <option value="MODERNISM">MODERNISM</option>
                                    <option value="Others">Others</option>
                                </select>

                            </div>
                            <div class="box">
                                <p>
                                    Message for max Prefab
                                </p>
                                <textarea name="pf_Demographicfield14"></textarea>
                            </div>
                            <div class="box">
                                <!-- Do not change name or type on submit button, to change visible text, change text for \&quot;value\&quot; -->
                                <input type="hidden" name="pf_FormType" value="OptInForm">
                                <input type="hidden" name="pf_OptInMethod" value="SingleOptInMethod">
                                <input type="hidden" name="pf_CounterDemogrFields" value="6">
                                <input type="hidden" name="pf_CounterMailinglists" value="1">
                                <input type="hidden" name="pf_AccountId" value="2287">
                                <input type="hidden" name="pf_ListById" value="1">
                                <input type="hidden" name="pf_Version" value="2">
                                <input type="hidden" name="pf_MailinglistName1" value="228963">
                            </div>
                            <div>
                                <select name="pf_DeliveryFormat" style="display:none;">
                                    <option value="HTML" selected>HTML</option>
                                    <option value="Text">Text</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <input type="submit" value="SUBMIT" class="submit-btn">
                </form>
            </div>
        </div>

        <!-- <div class="need">
           <script language="JavaScript">
                function MailingListValidation(SubscriberForm){
                var counter = 0;
                for (i=1; i<=SubscriberForm.pf_CounterMailinglists.value; i++)
                {
                var checkBoxName = "pf_MailinglistName" + i;
                if (document.getElementsByName(checkBoxName)[0].checked || document.getElementsByName(checkBoxName)[0].type == "hidden") counter++; 
                }
                if (counter == 0)
                {
                alert("One or more mailing lists are required for this form.");
                return false; }
                }//
        </script>
        <style>
            .i-cannot-be-spotted {
                opacity: 0;
                position: absolute;
                top: 0;
                left: 0;
                height: 0;
                width: 0;
                z-index: -1;
            }
        </style>
        <form name="SubscriberForm" style="text-align:left; font-family: arial, sans-serif; font-size: 12pt;"
            action="https://www.anpasia.com/public/process-subscription-form.aspx?formId=47435C407440475143"
            onSubmit="return MailingListValidation(this);" method="post">
            <input type="text" name="namekjsd" class="i-cannot-be-spotted" />
            <table cellspacing="0" cellpadding="2px">
                <tr>
                    <td>
                        Name*<br /><input type="text" name="pf_SubscriberName" value="" size="30"></td>
                </tr>
                <tr>
                    <td>
                        Email*<br /><input type="text" name="pf_Email" value="" size="30"></td>
                </tr>
                <tr>
                    <td>
                        Date of Birth<br /><input type="text" name="pf_Demographicfield26" value="" size="30"></td>
                </tr>
                <tr>
                    <td>
                        Cellphone*<br /><input type="text" name="pf_Demographicfield2" value="" size="30"></td>
                </tr>
                <tr>
                    <td>
                        Website or Social Media Account<br /><input type="text" name="pf_Demographicfield35" value=""
                            size="30"></td>
                </tr>
                <tr>
                    <td>
                        Country*<br /><input type="text" name="pf_Demographicfield1" value="" size="30"></td>
                </tr>
                <tr>
                    <td>
                        What Do I Need<br /><select name="pf_Demographicfield37">
                            <option value="EASYFOLD02" selected>EASYFOLD02</option>
                            <option value="KNOCKDOWN03">KNOCKDOWN03</option>
                            <option value="FLATPACK01">FLATPACK01</option>
                            <option value="FLATPACK02">FLATPACK02</option>
                            <option value="FLATPACK03">FLATPACK03</option>
                            <option value="EXPANDABLE02">EXPANDABLE02</option>
                            <option value="K-MODULES">K-MODULES</option>
                            <option value="PORTABLE01">PORTABLE01</option>
                            <option value="KNOCKDOWN01">KNOCKDOWN01</option>
                            <option value="TRAILERC01">TRAILERC01</option>
                            <option value="GUARDHOUSE">GUARDHOUSE</option>
                            <option value="PANELS">PANELS</option>
                            <option value="MODERNISM">MODERNISM</option>
                            <option value="Others">Others</option>
                        </select></td>
                </tr>
                <tr>
                    <td>
                        Message for Max Prefab<br /><input type="text" name="pf_Demographicfield14" value="" size="30">
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="pf_DeliveryFormat" style="display:none;">
                            <option value="HTML" selected>HTML</option>
                            <option value="Text">Text</option>
                        </select></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="Submit" value="Submit"></td>
                </tr>
                <tr>
                    <td>
                        Do not change name or type on submit button, to change visible text, change text for \&quot;value\&quot; 
                    <input type="hidden" name="pf_FormType" value="OptInForm">
                    <input type="hidden" name="pf_OptInMethod" value="SingleOptInMethod">
                    <input type="hidden" name="pf_CounterDemogrFields" value="6">
                    <input type="hidden" name="pf_CounterMailinglists" value="1">
                    <input type="hidden" name="pf_AccountId" value="2287">
                    <input type="hidden" name="pf_ListById" value="1">
                    <input type="hidden" name="pf_Version" value="2">
                    <input type="hidden" name="pf_MailinglistName1" value="228963">
                    </td>
                </tr>
            </table>
        </form>
    </div> -->


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