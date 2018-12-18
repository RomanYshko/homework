<div id="pjax-container" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000">
    <div class="container-fluid all-courses bg-grey">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="header-text text-uppercase">Наши курсы</h1>
            </div>
        </div>
        <div class="container">
            <div class="course-content">
                <div id="cours-list" class="courses-list active">
                    <div class="row">
                        <?php foreach ($courses as $course): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="course-item ">
                                <?php if(!empty($course['meta_description']) && !empty($course['meta_teg'])):?>
                                    <div class="sticker green"><?php echo $course['meta_teg']?></div>
                                    <div class="sticker green"><?php echo $course['meta_description']?></div>
                                <?php endif;?>
                                <a href="<?php echo $course['url']?>">
                                    <img src="<?php echo $course['img'] ?>" width="342px" height="257px">
                                </a>

                                <div style="margin: 0">
                                <div class="course-header">
                                    <p style="font-size:1.2em">
                                        <a href="<?php echo $course['url']?>"><?php echo  $course['title'];?></a>
                                    </p>
                                </div>
                                </div>
                                <div class="hr"></div>
                                <div class="row time-box">
                                    <div class="col-xs-6">
                                        <div class="time"><?php echo $course['time']?></div>
                                        <div class="course-custom-text">Дата начала</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="time"><?php echo $course['data']?></div>
                                        <div class="course-custom-text">Дата старта</div>
                                    </div>
                                </div>
                                <div class="cost-box text-center">
                                    <div class="cost"><span><?php echo $course['price'];?></span> грн.</div>
                                    <div class="course-custom-text">Стоимость курса</div>
                                </div>
                                <div class="text-center">
                                    <div href="javascript:void(0);" data-toggle="modal" data-target="#applicationModal" class="btn btn-danger text-uppercase">Записаться на курс</div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

























