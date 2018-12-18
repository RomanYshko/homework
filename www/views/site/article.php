<main>
    <div class="container-fluid single-course">
        <div class="row course-information">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <p class="sticker text-uppercase">
                        <h1 class="course-name"><?php echo $post['title']?></h1>

                        <div class="row">
                            <div href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal" class="btn btn-danger text-uppercase">Записаться на курс</div>

                            <div class="col-md-5 mob-m-25" style="margin-top: -4px">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>

                        <!--                    <button class="btn btn-want text-uppercase">--><!--</button>-->
                    </div>

                    <div class="col-xs-12 col-md-4 info-col-block">
                        <table border="2">
                            <tbody><tr>
                                <td class="border-r">
                                    <p>Дата старта</p>
                                    <p class="big">
                                       <?php echo $post['data_start']?>                                    </p>
                                    <p></p>
                                </td>
                                <td class="rose">
                                    <p>Стоимость</p>
                                    <p class="big"><?php echo $post['price']?> </p>
                                    <p>ГРН</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Длительность</p>
                                    <p class="big">
                                        <?php echo $post['duration']?>                                   </p>
                                    <p>часов</p>
                                </td>
                                <td class="border-t">
                                    <p>Свободных</p>
                                    <p class="big"><?php echo $post['free_places']?></p>
                                    <p>мест</p>
                                </td>
                            </tr>
                            </tbody></table>

                        <div class="clearfix"></div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="course-description row">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p class="course-h">
                            Описание                        <span class="text-danger">курса</span>
                        </p>
                        <p class="desc"><?php echo $post['course_description']?></p>
                    </div>
                    <div class="col-md-4 call-back-col">
                        <p>Нужна помощь</p>
                        <p class="text-danger">с выбором курса?</p>
                        <p>
                            <a class="telephon" href="tel:0800804848">
                                 (098) 747 68 78                       </a>
                        </p>
                        <p class="text-info">
                            Если Вы не можете определится с курсом наши менеджеры
                            предоставят Вам бесплатную консультацию.                    </p>
                        <div href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal" class="btn btn-danger text-uppercase">Записаться на курс</div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-grey schedule-on-course-page">
            <div class="container">

                <div class="course-program">
                    <p class="course-h">Программа                    <span class="text-danger">курса</span>
                    </p>

                    <div  style="position: relative;"><div  style="height: auto; margin-bottom: 0px; margin-right: 0px; max-height:100%">

                            <p class="program-box-header text-uppercase">Содержание курса</p>


                            <ul>
                                <li><pre style="font-size: 15px"><?php echo $post['course_program'];?></pre></li>
                            </ul>

                        </div>


                        <div href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal" class="btn btn-danger text-uppercase">Записаться на курс</div>


                        <div class="clearfix"></div>
                </div>
            </div>

        </div>



    </div></main>