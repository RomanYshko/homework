<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;



AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-frontend">
    <meta name="csrf-token" content="GDc_DiWjygw0XrvIWV1-fJLzjnEAlOxjt16lf0RWZYRBXAZiTuaLUwIz168GChM796bFMlTEuijfb9ASFWUJ8A==">

    <link rel="publisher" href="https://plus.google.com/+KODIProfessional"/>
    <meta name="google-site-verification" content="XYY8C0x5U7q1JJpFKUBePI8e8gXRma7Upz5B1lSPjJA" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N9VZKGB');</script>
    <!-- End Google Tag Manager -->
    <title>Курсы Учебного центра «Студия стиля MARAFET» - обучение с уроками и мастер-классами от профессионалов</title>

    <meta name="description" content="Курсы от Учебного центра «Студия стиля MARAFET». ✅ Много реальной практики.  ✅ Сертифицированные инструктора-преподаватели. ✅ Дипломы по окончанию курсов. Выгодные цены на обучение! Звоните: ☎ (044) 300-00-52" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.cs" rel="stylesheet">
    <link href="/web/style/css/jquery-ui.css" rel="stylesheet">
    <link href="/web/style/css/course-timetable.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/style/fontawesome/css/font-awesome.css">

    <link href="/web/style/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/web/style/css/mystyles.css" rel="stylesheet">
    <link href="/web/style/css/style.css" rel="stylesheet">
    <link href="/web/style/css/common.css" rel="stylesheet">

    <script>var holder;
        var inputmask_b02ee1d6 = {"alias":"email"};
        var inputmask_701ebff7 = {"mask":["+99 (999) 999-99-99"]};
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1016778415151403');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=1016778415151403&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121305360-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-121305360-1');
    </script>
</head>
<body >
<script>
    fbq('track', 'Lead');
</script>
<i></i>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9VZKGB"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script>var holder;</script>

<header>
    <div class="container-fluid header-row-social">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 soc-block">
                    <a rel="me nofollow" target="_blank" href="https://www.facebook.com/MarafetMarinaYshko/"><span class="fa fa-twitter"></span></a>
                    <a rel="me nofollow" target="_blank" href="https://www.facebook.com/MarafetMarinaYshko/"><span class="fa fa-facebook"></span></a>
                    <a rel="me nofollow" target="_blank" href="https://www.instagram.com/marafetprof/"><span class="fa fa-instagram"></span></a>
                    <a rel="me nofollow" target="_blank" href="https://www.facebook.com/MarafetMarinaYshko/"><span class="fa fa-youtube-play"></span></a>
                </div>
                <div class="col-xs-6 btn-registration-come">
                    <div>
                        <span id="btnReg" data-href="" class="js-redirect-link">
                            <span class="fa fa-key"></span>Регистрация</span>
                        <?php
                        echo Nav::widget([
                            'options' => ['class' => 'js-redirect-link fa fa-sign-in'],
                            'items' => [
                                Yii::$app->user->isGuest ? (
                                    '<li>'
                                    . Html::beginForm(['/logout'], 'post', ['class' => 'js-redirect-link fa fa-sign-in'])
                                    . Html::submitButton(
                                        'Войти',
                                        ['class' => 'btn btn-link']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                ) : (
                                    '<li>'
                                    . Html::beginForm(['/logout'], 'post', ['class' => 'js-redirect-link fa fa-sign-in'])
                                    . Html::submitButton(
                                        'Выйти (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                )
                            ],
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row header-row-logo">
            <div class="col-sm-3 col-xs-5">
                <a href="/"><img src="/web/style/css/images/logo/logo.jpg" alt="Учебный центр"></a>
            </div>
            <div class="col-xs-7 col-sm-6 header-row-logo-col-2 text-center">
                <a class="telephon" href="tel:0800804848">
                    <div itemscope itemtype="schema.org/PostalAddress" >
                        <span itemprop="telephone" > 095 780 39 61</span>
                    </div>
                </a>
                <a class="zakaz-zvonok" href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal">Заказать звонок</a>
            </div>
            <div class="col-sm-3 header-row-logo-col-3 text-right hidden-xs">
                <a class="btn btn-danger text-uppercase become-model" href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal">
                    Стать моделью                    <span class="text-capitalize">free</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid header-row-navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav class="navbar nav-top" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed text-left" data-toggle="collapse" data-target="#top-menu-id">Меню<span class="fa fa-bars"></span></button>
                        </div>
                        <div class="row">
                            <div class="collapse navbar-collapse" id="top-menu-id">
                                <ul id="w2" class="nav nav-justified">


                                    <li class=""><a class="text-uppercase" href="/"><span <?php echo ($_SERVER['REQUEST_URI'] == '/') ? "class='text-danger'" : ""; ?>>Главная</span></a></li>
                                    <li class=""><a class="text-uppercase" href="/about"><span <?php echo ($_SERVER['REQUEST_URI'] == '/about') ? "class='text-danger'" : ""; ?>>О нас</span></a></li>
                                    <li class=""><a class="text-uppercase" href="/course"><span <?php echo ($_SERVER['REQUEST_URI'] == '/course') ? "class='text-danger'" : ""; ?>>Курcы</span></a></li>
                                    <!--<li class=""><a class="text-uppercase" href="/masters"><span class="">Мастера</span></a></li>
                                    <li class=""><a class="text-uppercase" href="/promo"><span class="">Акции</span></a></li>
                                    <li class=""><a class="text-uppercase" href="/news"><span class="">Блог</span></a></li>-->
                                    <li class=""><a class="text-uppercase" href="/gallery"><span <?php echo ($_SERVER['REQUEST_URI'] == '/gallery') ? "class='text-danger'" : ""; ?>>Мультимедиа</span></a></li>
                                    <li class=""><a class="text-uppercase" href="/review"><span<?php echo ($_SERVER['REQUEST_URI'] == '/review') ? "class='text-danger'" : ""; ?>>Отзывы</span></a></li>
                                    <li class=""><a class="text-uppercase" href="/contacts"><span <?php echo ($_SERVER['REQUEST_URI'] == '/contacts') ? "class='text-danger'" : ""; ?>>Контакты</span></a></li></ul>


                                    <?php
                                    echo Nav::widget([
                                        'options' => ['class' => 'navbar-nav navbar-right'],
                                        'items' => [
                                            Yii::$app->user->isGuest ? '' : ['label' => 'Курсы', 'url' => ['/courses/index']],
                                            Yii::$app->user->isGuest ? '' : ['label' => 'Описания курса', 'url' => ['/post/index']],
                                            Yii::$app->user->isGuest ? '' : ['label' => 'МУЛЬТИМЕДИА', 'url' => ['/multimedia/index']],
                                            Yii::$app->user->isGuest ? '' : ['label' => 'Отзывы', 'url' => ['/reviews/index']],
                                            Yii::$app->user->isGuest ? '' : ['label' => 'График', 'url' => ['/chart/index']],

                                        ],
                                    ]);
                                    ?>


                                <div class="col-xs-12  header-row-logo-col-3 text-center visible-xs visible-sm">
                                    <a class="btn btn-danger text-uppercase become-model" href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal">Стать моделью<span class="text-capitalize">free</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <?php  echo $content ?>
    <footer>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2565.0113224490783!2d36.22010401605156!3d49.99239717941479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a18a4b62b8a7%3A0xb8a917b404b5f03f!2z0JzQsNGA0LDRhNC10YIgTWFyYWZldA!5e0!3m2!1sru!2sua!4v1529650400786"frameborder="0" style="width: 100%; height:350px; border:0" allowfullscreen></iframe>
        <div class="container-fluid">
            <div class="row contacts-block-parent">
                <div class="container">
                    <div class="row" style="position: relative">
                        <div class="contacts-block col-xs-10">
                            <div class="row">
                                <div class="contact-col col-md-4 col-md-offset-0  col-sm-8 col-sm-offset-2 col-xs-12">
                                    <p class="contact-zaolovok">Телефон:</p>
                                    <a class="contact-text" href="tel:+38(096)1995453">
                                        <div itemscope itemtype="schema.org/PostalAddress">
                                            <span itemprop="telephone">+38 (095) 780 39 61 </span>
                                        </div>
                                    </a>
                                    <a class="contact-text" href="tel:+38(063)6733804">
                                        <div itemscope itemtype="schema.org/PostalAddress">
                                            <span itemprop="telephone">+38 (098) 747 68 78 </span>
                                        </div>
                                    </a>
                                    <a class="contact-text" href="tel:+38(066)1210565">
                                        <div itemscope itemtype="schema.org/PostalAddress">
                                            <span itemprop="telephone">+38 (063) 782 72 75 </span>
                                        </div>
                                    </a>

                                </div>
                                <div class="contact-col col-md-4 col-md-offset-0  col-sm-8 col-sm-offset-2 col-xs-12">
                                    <p class="contact-zaolovok">Адрес:</p>
                                    <div class="contact-text" itemscope itemtype="schema.org/PostalAddress" >
                                        <span itemprop="addressLocality" >г.Харьков,</span>
                                        <span itemprop="streetAddress">ул. Рождественская 29 б. м. Центральный рынок</span>
                                    </div>
                                </div>
                                <div class="contact-col col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12">
                                    <p class="contact-zaolovok">E-mail:</p>

                                    <div itemscope itemtype="schema.org/PostalAddress" >
                                        <span itemprop="email" ><span class="__cf_email__">marinayshko@gmail.com</span></span>                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid  bottom-menu ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12  bottom-menu-container">
                        <div class="row">
                            <nav class="navbar nav-top" role="navigation">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed btn btn-block  " data-toggle="collapse" data-target="#bottom-menu-id">
                                        Меню                                    <span class="fa fa-bars pull-right"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse " id="bottom-menu-id">
                                    <ul id="w4" class="nav nav-justified"><li class="">
                                        <li class=""><a class="text-uppercase" href="/"><span <?php echo ($_SERVER['REQUEST_URI'] == '/') ? "class='text-danger'" : ""; ?>>Главная</span></a></li>
                                        <li class=""><a class="text-uppercase" href="/about"><span <?php echo ($_SERVER['REQUEST_URI'] == '/about') ? "class='text-danger'" : ""; ?>>О нас</span></a></li>
                                        <li class=""><a class="text-uppercase" href="/course"><span <?php echo ($_SERVER['REQUEST_URI'] == '/course') ? "class='text-danger'" : ""; ?>>Курcы</span></a></li>
                                        <!--<li class=""><a class="text-uppercase" href="/masters"><span class="">Мастера</span></a></li>
                                        <li class=""><a class="text-uppercase" href="/promo"><span class="">Акции</span></a></li>
                                        <li class=""><a class="text-uppercase" href="/news"><span class="">Блог</span></a></li>-->
                                        <li class=""><a class="text-uppercase" href="/multimedia"><span <?php echo ($_SERVER['REQUEST_URI'] == '/multimedia') ? "class='text-danger'" : ""; ?>>Мультимедиа</span></a></li>
                                        <li class=""><a class="text-uppercase" href="/review"><span<?php echo ($_SERVER['REQUEST_URI'] == '/review') ? "class='text-danger'" : ""; ?>>Отзывы</span></a></li>
                                        <li class=""><a class="text-uppercase" href="/contacts"><span <?php echo ($_SERVER['REQUEST_URI'] == '/contacts') ? "class='text-danger'" : ""; ?>>Контакты</span></a></li></ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xs-12 rights"><img src="/web/style/css/images/logo/0001.jpg"></div>
                    <div class="col-xs-12 rights"><?php echo date('Y')?>  &copy;<?php echo "Marafet"?></div>
                    <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5">
                        <div class="soc-block">
                            <a rel="me nofollow" target="_blank" href="https://www.facebook.com/MarafetMarinaYshko/"><span class="fa fa-twitter"></span></a>
                            <a rel="me nofollow" target="_blank" href="https://www.facebook.com/MarafetMarinaYshko/"><span class="fa fa-facebook"></span></a>
                            <a rel="me nofollow" target="_blank" href="https://www.instagram.com/marafetprof/"><span class="fa fa-instagram"></span></a>
                            <a rel="me nofollow" target="_blank" href="https://www.facebook.com/MarafetMarinaYshko/"><span class="fa fa-youtube-play"></span></a>                    </div>
                    </div>
                </div>
            </div>
            <!--LiveInternet counter--><script type="text/javascript">
                document.write("<a href='//www.liveinternet.ru/click' "+
                    "target=_blank><img src='//counter.yadro.ru/hit?t23.6;r"+
                    escape(document.referrer)+((typeof(screen)=="undefined")?"":
                        ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
                        screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
                    ";h"+escape(document.title.substring(0,150))+";"+Math.random()+
                    "' alt='' title='LiveInternet: показано число посетителей за"+
                    " сегодня' "+
                    "border='0' width='88' height='15'><\/a>")
            </script><!--/LiveInternet-->
        </div>
        <div class="container">
            <div class="modal fade in" id="callbackModal" tabindex="-1" role="dialog" aria-labelledby="callbackLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true" class="fa fa-times"></span><span class="sr-only"></span></button>
                        </div>
                        <div class="modal-body">
                            <div id="pjaxCallback" data-pjax-container="" data-pjax-timeout="1000">                    <h4 class="modal-title" id="callbackLabel">Заявка на обратный звонок</h4>
                                <form id="form-callback" action="/ajax/send-callback" method="post" enctype="multipart/form-data" data-pjax>
                                    <input type="hidden" name="_csrf-frontend" value="GDc_DiWjygw0XrvIWV1-fJLzjnEAlOxjt16lf0RWZYRBXAZiTuaLUwIz168GChM796bFMlTEuijfb9ASFWUJ8A==">
                                    <div class="form-group field-callback-name required">
                                        <label class="control-label" for="callback-name">Имя</label>
                                        <input type="text" id="callback-name" class="form-control" name="Callback[name]" aria-required="true">

                                        <div class="help-block"></div>
                                    </div>                    <div class="form-group field-callback-email">
                                        <label class="control-label" for="callback-email">Email</label>
                                        <input type="text" id="callback-email" class="form-control" name="Callback[email]" data-plugin-inputmask="inputmask_b02ee1d6">

                                        <div class="help-block"></div>
                                    </div>                    <div class="form-group field-callback-phone required">
                                        <label class="control-label" for="callback-phone">Телефон</label>
                                        <input type="text" id="callback-phone" class="form-control" name="Callback[phone]" data-plugin-inputmask="inputmask_701ebff7">

                                        <div class="help-block"></div>
                                    </div>
                                    <p class="text-center foot-note text-info">* Заполните, пожалуйста, все обязательные поля</p>

                                    <input type="submit" class="text-uppercase btn btn-danger text-uppercase center-block" name="contact-button" value="Заказать звонок">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="modal fade in" id="applicationModal" tabindex="-1" role="dialog" aria-labelledby="applicationLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true" class="fa fa-times"></span><span class="sr-only"></span></button>
                        </div>
                        <div class="modal-body">
                            <div id="pjaxApplication" data-pjax-container="" data-pjax-timeout="1000">
                                <h4 class="modal-title" id="applicationLabel">ЗАПИСАТЬСЯ НА КУРС</h4>

                                <form action="/email" method="post" enctype="multipart/form-data">
                                    <div class="form-group field-applications-name required">
                                        <label class="control-label" for="applications-name">Имя</label>
                                        <input type="text" id="applications-name" class="form-control" required name="name">

                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group field-applications-email">
                                        <label class="control-label" for="applications-email">Email</label>
                                        <input type="text" id="applications-email" class="form-control" name="email">

                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group field-applications-phone required">
                                        <label class="control-label" for="applications-phone">Телефон</label>
                                        <input type="text" id="applications-phone" class="form-control" required name="phone">

                                        <div class="help-block"></div>
                                    </div>
                                    <p class="text-center foot-note text-info">* Заполните, пожалуйста, все обязательные поля</p>

                                    <input type="submit" class="text-uppercase btn btn-danger text-uppercase center-block" name="contact-button" value="Оставить заявку">
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER END-->

        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
            (function(){ var widget_id = 'il6UjYkse5';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
        </script>
        <!-- {/literal} END JIVOSITE CODE -->
    </footer>
    <script data-cfasync="false" src="/web/style/js/email-decode.min.js"></script><script src="//platform-api.sharethis.com/js/sharethis.js#property=5a73104c10fe560012c5e7b9&amp;product=sop" async="async"></script>
    <script src="/web/style/js/jquery.min.js"></script>
    <script src="/web/style/js/yii.js"></script>
    <script src="/web/style/js/jquery-ui.min.js"></script>
    <script src="/web/style/js/datepicker-ru.js"></script>
    <script src="/web/style/js/jquery.pjax.js"></script>
    <script src="/web/style/js/owl.carousel.min.js"></script>
    <script src="/web/style/js/in-progress.js"></script>
    <script src="/web/style/js/common.js"></script>
    <script src="/web/style/js/bootstrap.min.js"></script>
    <script src="/web/style/js/yii.validation.js"></script>
    <script src="/web/style/js/jquery.inputmask.bundle.js"></script>
    <script src="/web/style/js/yii.activeForm.js"></script>

    <script>var holder;
        (function(w,doc) {
            if (!w.__utlWdgt ) {
                w.__utlWdgt = true;
                var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
                s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
                var h=d[g]('body')[0];
                h.appendChild(s);
            }})(window,document);</script>
    <script>jQuery(function ($) {
            initScheduleDatepickers();$(document).on('pjax:success', initScheduleDatepickers);
            jQuery(document).pjax("#pjax-container a", {"push":true,"replace":false,"timeout":5000,"scrollTo":false,"container":"#pjax-container"});
            jQuery(document).on("submit", "#pjax-container form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":5000,"scrollTo":false,"container":"#pjax-container"});});
            jQuery('#regComModal').modal({"show":false});
            jQuery("#callback-email").inputmask(inputmask_b02ee1d6);
            jQuery("#callback-phone").inputmask(inputmask_701ebff7);
            jQuery('#form-callback').yiiActiveForm([{"id":"callback-name","name":"name","container":".field-callback-name","input":"#callback-name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Имя»."});value = yii.validation.trim($form, attribute, []);}},{"id":"callback-email","name":"email","container":".field-callback-email","input":"#callback-email","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.email(value, messages, {"pattern":/^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,"fullPattern":/^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,"allowName":false,"message":"Значение «Email» не является правильным email адресом.","enableIDN":false,"skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Значение «Email» должно быть строкой.","max":60,"tooLong":"Значение «Email» должно содержать максимум 60 символов.","skipOnEmpty":1});}},{"id":"callback-phone","name":"phone","container":".field-callback-phone","input":"#callback-phone","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Телефон»."});value = yii.validation.trim($form, attribute, []);yii.validation.regularExpression(value, messages, {"pattern":/^\+\d{2}\s\(\d{3}\)\s\d{3}\-\d{2}\-\d{2,5}$/,"not":false,"message":"Пожалуйста, введите правильный номер телефона","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Значение «Телефон» должно быть строкой.","max":20,"tooLong":"Значение «Телефон» должно содержать максимум 20 символов.","skipOnEmpty":1});}}], {"validationUrl":"\/ajax\/validate-callback"});
            jQuery(document).pjax("#pjaxCallback a", {"push":false,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjaxCallback"});
            jQuery(document).on("submit", "#pjaxCallback form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjaxCallback"});});
            jQuery("#applications-email").inputmask(inputmask_b02ee1d6);
            //jQuery("#applications-phone").inputmask(inputmask_701ebff7);


            jQuery('#form-application').yiiActiveForm([{"id":"applications-name","name":"name","container":".field-applications-name","input":"#applications-name","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Имя»."});value = yii.validation.trim($form, attribute, []);yii.validation.string(value, messages, {"message":"Значение «Имя» должно быть строкой.","max":120,"tooLong":"Значение «Имя» должно содержать максимум 120 символов.","skipOnEmpty":1});}},{"id":"applications-direction","name":"direction","container":".field-applications-direction","input":"#applications-direction","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Направление»."});yii.validation.string(value, messages, {"message":"Значение «Направление» должно быть строкой.","max":120,"tooLong":"Значение «Направление» должно содержать максимум 120 символов.","skipOnEmpty":1});}},{"id":"applications-email","name":"email","container":".field-applications-email","input":"#applications-email","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {value = yii.validation.trim($form, attribute, []);yii.validation.string(value, messages, {"message":"Значение «Email» должно быть строкой.","max":60,"tooLong":"Значение «Email» должно содержать максимум 60 символов.","skipOnEmpty":1});}},{"id":"applications-phone","name":"phone","container":".field-applications-phone","input":"#applications-phone","enableAjaxValidation":true,"validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Необходимо заполнить «Телефон»."});value = yii.validation.trim($form, attribute, []);yii.validation.regularExpression(value, messages, {"pattern":/^\+\d{2}\s\(\d{3}\)\s\d{3}\-\d{2}\-\d{2,5}$/,"not":false,"message":"Пожалуйста, введите правильный номер телефона","skipOnEmpty":1});yii.validation.string(value, messages, {"message":"Значение «Телефон» должно быть строкой.","max":20,"tooLong":"Значение «Телефон» должно содержать максимум 20 символов.","skipOnEmpty":1});}}], {"validationUrl":"\/ajax\/validate-application"});
            jQuery(document).pjax("#pjaxApplication a", {"push":false,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjaxApplication"});
            jQuery(document).on("submit", "#pjaxApplication form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":false,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjaxApplication"});});
        });</script>
    <i></i>
    <div data-mobile-view="true" data-share-size="30" data-like-text-enable="false" data-background-alpha="0.0" data-pid="1777783" data-mode="share" data-background-color="#ffffff" data-hover-effect="scale" data-share-shape="round-rectangle" data-share-counter-size="12" data-icon-color="#ffffff" data-mobile-sn-ids="fb.tw.vb.tm." data-text-color="#000000" data-buttons-color="#FFFFFF" data-counter-background-color="#ffffff" data-share-counter-type="disable" data-orientation="fixed-left" data-following-enable="false" data-sn-ids="fb.tw.tm.gp." data-preview-mobile="false" data-selection-enable="false" data-exclude-show-more="true" data-share-style="1" data-counter-background-alpha="1.0" data-top-button="false" class="uptolike-buttons" ></div>
</body>
</html>
