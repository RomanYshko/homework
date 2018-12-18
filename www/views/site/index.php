<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>


<div id="regComModal" class="fade modal" role="dialog" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <div class="tabs-for-media js-tabs-reg btn-group center-block row" >
                    <div id="comein" class="btn btn-tab active col-xs-5 col-sm-6">Войти</div>
                    <div id="registart" class="btn btn-tab col-xs-7 col-sm-6">Зарегистри&shy;роваться</div>
                </div>

                <div class="reg hidden">

                    <div class="row step">
                        <div class="col-xs-4 step1"><div class="step-button1" ></div> </div>
                        <div class="col-xs-4 step2"><div class="step-button2" ></div> <span class="gray-circle center-block"></span></div>
                        <div class="col-xs-4 step3"><div class="step-button3" ></div> <span class="gray-circle pull-right"></span></div>
                    </div>

                    <form action="/privat-page.php" method="post">

                        <div id="stepForm1" class="step-form row ">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="text-uppercase label-form">Ваше имя</div>
                                <div class="input-box">
                                    <input type="text" name="firstName" class="your-name" placeholder="введите Ваше имя">
                                    <span class="check-in icon-cancel pull-right"></span>
                                    <span class="check-in icon-check pull-right hidden"></span>
                                </div>
                                <div class="text-uppercase label-form">Ваша фамилия</div>
                                <div class="input-box">
                                    <input type="text" name="secondName" class="your-name" placeholder="введите Вашу фамилию">
                                    <span class="check-in icon-cancel pull-right hidden"></span>
                                    <span class="check-in icon-check pull-right"></span>
                                </div>

                                <div class=" text-center btn-form"><div  class="btn btn-danger text-uppercase js-btn-forward">Далее</div></div>

                                <div class=" text-center spacer">
                                    или <br> регистрируйтесь <br> через
                                </div>

                            </div>
                        </div>

                        <div id="stepForm2" class="step-form row hidden">
                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="text-uppercase label-form">email</div>
                                <div class="input-box">
                                    <input type="email" name="email" class="your-name" placeholder="введите Ваш  Email">
                                    <span class="check-in icon-cancel pull-right"></span>
                                    <span class="check-in icon-check pull-right hidden"></span>
                                </div>
                                <div class="text-uppercase label-form">Ваша фамилия</div>
                                <div class="input-box">
                                    <input type="text" name="phone" class="your-name" placeholder="введите Ваш номер телефона">
                                    <span class="check-in icon-cancel pull-right hidden"></span>
                                    <span class="check-in icon-check pull-right"></span>
                                </div>

                                <div class=" text-center btn-form row">
                                    <div  class="btn btn-default js-btn-backward col-xs-4 col-xs-offset-1">Назад</div>
                                    <div  class="btn btn-danger js-btn-forward col-xs-4 col-xs-offset-2">Далее</div>
                                </div>

                                <div class=" text-center spacer">
                                    или <br> регистрируйтесь <br> через
                                </div>

                            </div>

                        </div>
                        <div id="stepForm3" class="step-form row hidden">

                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="text-uppercase label-form">Введите пароль</div>
                                <div class="input-box">
                                    <input type="password" name="password" class="your-name" placeholder="введите Ваш  Email">
                                    <span class="check-in icon-cancel pull-right"></span>
                                    <span class="check-in icon-check pull-right hidden"></span>
                                </div>
                                <div class="text-uppercase label-form">Подтвердите пароль</div>
                                <div class="input-box">
                                    <input type="password" name="passwordConfirm" class="your-name" placeholder="введите Ваш номер телефона">
                                    <span class="check-in icon-cancel pull-right hidden"></span>
                                    <span class="check-in icon-check pull-right"></span>
                                </div>

                                <div class=" text-center btn-form">
                                    <button type="submit"  class="btn btn-danger text-uppercase" data-toggle="modal" data-target="#modalid">зарегистрироваться</button>
                                </div>

                                <div class=" text-center spacer">
                                    или <br> регистрируйтесь <br> через
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="come ">

                    <form action="/privat-page.php" method="post">
                        <div id="comeIn" class="step-form row">

                            <div class="col-xs-8 col-xs-offset-2">
                                <div class="text-uppercase label-form">Введите пароль</div>
                                <div class="input-box">
                                    <input type="password" name="password" class="your-name" placeholder="введите Ваш  Email">
                                    <span class="check-in icon-cancel pull-right"></span>
                                    <span class="check-in icon-check pull-right hidden"></span>
                                </div>
                                <div class="text-uppercase label-form">Подтвердите пароль</div>
                                <div class="input-box">
                                    <input type="password" name="passwordConfirm" class="your-name" placeholder="введите Ваш номер телефона">
                                    <span class="check-in icon-cancel pull-right hidden"></span>
                                    <span class="check-in icon-check pull-right"></span>
                                </div>

                                <div class=" text-center btn-form">
                                    <button type="submit" class="btn btn-danger text-uppercase">войти</button>
                                </div>
                                <div class=" text-center spacer">
                                    или <br> войти <br> через
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=" text-center "><button  class="btn btn-info text-uppercase" data-toggle="modal" data-target="#modalid"><span class="icon-facebook"></span>facebook</button></div>
            </div>

        </div>
    </div>
</div>
</header>
<main>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            </div>
        </div>
    </div>
    <div class="container-fluid hidden-xs hidden-sm" >
        <div class="row">
            <div>
                <div id="mainCarousel" class="owl-carousel owl-theme">

                    <div class="for-banner"><img src="/web/style/css/images/banners/16-image-47e230d3d63df12aa3768073154de7ff.jpg" alt="banner"></div>
                    <div class="for-banner"><img src="/web/style/css/images/banners/17-image-3a77a0c1e28191bc1f4f27207176008c.jpg" alt="banner"></div>
                    <div class="for-banner"><img src="/web/style/css/images/banners/15-image-d2e2f3b87e155a345fa0fc84a4a82992.jpg" alt="banner"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid advantages">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="header-text text-uppercase text-center">
                        <span class="text-danger">Наши </span> <span> Преимущества</span>
                    </div>

                    <div class="col-lg-offset-2 col-md-2 col-md-offset-1 col-sm-3">
                        <div class="element teacher">
                            <span></span>
                            Ведущие технологии и преподаватели MARAFET                    </div>
                        <div class="element study">
                            <span></span>
                            Обучение на материалах компании                    </div>
                    </div>

                    <div class="col-lg-offset-0 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 ">

                        <div class="center-circle">
                            <div class="circle small"></div>
                            <div class="circle medium"></div>
                            <div class="circle big"></div>
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-12">
                            <div class="element individual">
                                <span></span>
                                Индивидуальный подход к каждому учащемуся                        </div>
                        </div>

                    </div>

                    <div class="col-lg-offset-0 col-md-2 col-sm-3 col-sm-offset-1">
                        <div class="element accompaying">
                            <span></span>
                            Постоянная скидка 15% на продукты после завершения обучения                    </div>
                        <div class="element discount">
                            <span></span>
                            Поддержка студентов и онлайн-консультации после завершения обучения                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="container">
            <div class="row">
                <div class="header-text text-uppercase">
                    <span class="text-danger">Направления </span>
                    <span>обучения</span>
                </div>
                <div id="w0" class="row">
                    <?php foreach ($courses as $course): ?>
                    <div class="col-xs-12 col-sm-6 curses-box" data-key="2">
                        <div class="programma-kursov-sell" >
                            <div class="img-box ">
                                <a href="<?php echo $course['url']?>">
                                <img src="<?php echo $course['img'] ?>" width="270px" height="270px">
                                </a>
                            </div>
                            <div class="discription" style="margin-left: 15%">
                                <div><span class="kol-kursv">Дата начала: <?php echo $course['data'];?> </span></div>

                                <div class="kurs-name">
                                    <a href="<?php echo $course['url']?>" style="color: #e42c52"><?php echo  $course['title'];?></a>
                                </div>


                                <div class="kurs-cost">
                                    <nobr>Минимальная стоимость курсов</nobr>
                                    <br>
                                    <span><?php echo $course['price'];?></span>грн.
                                </div>
                                <div href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal" class="btn btn-danger text-uppercase">Записаться на курс</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid banner-call-to-us ">
        <div id="bannerCircles"  class="container timetable-page">

            <div class="row">

                <div class="col-md-7   col-sm-12 text-col">
                    <p class="h1 text-left">
                        Затрудняетесь  <br>
                        <span class="text-danger">с выбором курса?</span>
                    </p>

                    <p class="h1">
                        <a href="tel:+38 (098) 747 68 78" >+38 (098) 747 68 78</a>
                    </p>

                    <p class="text-info">
                        Оставьте заявку, напишите или перезвоните нам и мы предоставим Вам бесплатную консультацию </p>

                    <button class="btn btn-danger text-uppercase btn-shadow " data-target="#applicationModal" data-toggle="modal" >Заказать звонок</button>

                </div>

                <div class="col-sm-4 col-sm-offset-1 big-banner banner-col hidden-xs hidden-sm hidden-md">

                </div>

                <canvas id="circles"></canvas>

                <div class="clearfix"></div>

            </div>
        </div>
    </div>

    <div id="pjax-container" data-pjax-container="" data-pjax-push-state data-pjax-timeout="5000"><div class="container-fluid kurs-box ">
            <div class="container">
                <div class="row">
                    <div class="header-text text-uppercase text-center">
                <span class="text-danger">Ближайшие<br class="visible-xs"> Курсы</span>
                        <span> и мастер-классы</span>
                    </div>
                    <div class=" kurs-table">
                        <div class="table-capture">
                            <div class="col-lg-6 col-md-12 name-column">
                                <div class="z-grafik">Графики курсов</div>
                                <p class="text-uppercase"></p>
                            </div>
                            <div class=" col-lg-6 tab-column">
                                <div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="table-field ">
                            <div class="row table-data">
                                <div class="table-head">
                                    <div class="col1">Название курса
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col2">Продолжительность</div>
                                    <div class="col3">Дата старта</div>
                                    <div class="col4">Стоимость</div>
                                    <div class="col5">Записаться</div>
                                </div>
                            </div>
                            <?php foreach ($chartCourses as $chart):?>
                                <div class="row table-data" data-key="236"><div class="col-xs-12 ">
                                        <div class="col1 col-xs-12 col-sm-6 col-lg-12">
                                            <p><?php echo $chart['title']?></p>
                                            <div class="galka"></div>
                                        </div>
                                        <div class="co4 col-xs-3 col-sm-2 js-in" style="position: static; font-size: 18px">
                                            <div class="" >
                                                <?php echo $chart['visiting_days'];?>
                                            </div>
                                            <span class="text-danger"><?php echo $chart['time']?></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="custom-clear"></div>
                                        <div class="col3 col-xs-12 col-sm-4 js-in">
                                            <p class="col-capture text-uppercase hidden-lg ">Дата старта</p>
                                            <div class="kurs-marker"><?php echo $chart['data_start']?></div>
                                            Кол-во занятий:  <?php echo $chart['quantity'];?>    </div>
                                        <div class="col4 col-xs-6 col-sm-4 js-in">
                                            <p class="col-capture text-uppercase hidden-lg ">Стоимость</p>
                                            <div class="kurs-marker">
                                                <?php echo $chart['price']?> <span class="nonmarking"> грн.</span>
                                            </div>
                                        </div>
                                        <div href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal" class="btn btn-danger text-uppercase">Записаться на курс</div>
                                    </div>
                                </div>
                            <?php endforeach;?>

                            <div class="clearfix"></div>
                                <div class="col-md-12 text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-grey">
        <div class="container mb-45">
            <div class="row seo-text">
                <div class="col-md-12">
                    <h1>Учебный центр &quot;Cтудия стиля MARAFET&quot;</h1>

                    <p>
                        Каждый день в индустрии красоты совершенствуются и появляются новые продукты и технологии. Поэтому, чтобы быть востребованным, каждый профессиональный мастер, должен постоянно совершенствовать свои навыки и идти в ногу с новыми тенденциями индустрии красоты.
                        В команде Учебного центра Марафет Марины Юшко работают и преподают практикующие мастера-преподаватели, специализирующиеся в основных направлениях Бьюти - индустрии:</p>
                    <p> •	ногтевой эстетике ( моделирование ногтей гелем, акрилом, нейларты..)</p>
                    <p> •	моделирование и окрашивание бровей</p>
                    <p> •	ламинирование и наращивание ресниц></p>
                    <p> •	наращивание волос</p>
                    <p> •	выравнивание волос</p>
                    <p> •	модные техники окрашивания.</p>
                        После окончания курсов и мастер классов Марафет (MARAFET), благодаря профессионализму и большому опыту мастеров-преподавателей, Вы получаете не только хорошие знания, но и практические навыки. Ведь процесс обучения в учебном центре Марафет это 100% практики, все техники отрабатываются на моделях нашей школы.
                        И самый важный момент - окончив наши курсы, Вы получаете гарантированную возможность трудоустройства!                    </p>
                    <h1>Особенности обучения</h1>
                    <p>
                        Продолжительность курсов зависит от глубины изучаемой Темы, некоторые ознакомительные семинары  и мастер-классы занимают от пяти часов, более углубленные курсы до 4 месяцев.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>





<div class="scrollup">
    <svg    version="1.1" id="arrow-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="-100 -100 400 400" style="enable-background:new 0 0 256 256;" xml:space="preserve"

    >

    <g>
        <circle
                cx="100"
                cy="100"

                r="180"
                stroke="#ededed"
                fill="#f9f9f9"
                stroke-width="20" />

        <path
                id="path-anim"
                d="M 100,-80 A180,180   0  0, 1 250.8,198.27"
                stroke="#e42c52"
                fill="transparent"
                stroke-width="20"/>

        <polygon points="128,48.907 0,176.907 30.187,207.093 128,109.28 225.813,207.093 256,176.907 " fill="#000"
                 transform="    translate(   45,30),
                                scale(0.45)"

        />
    </g>
</svg></div>