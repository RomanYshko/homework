<div id="pjax-container" data-pjax-container="" data-pjax-push-state="" data-pjax-timeout="5000">
    <div class="container media-container all">
        <div class="row">
            <div class="col-md-12">
                <h1 class="header-text text-uppercase">Отзывы</h1>
            </div>
        </div>
        <div class="container">
            <div class="course-content">
                <div id="cours-list" class="courses-list active">
                    <div class="row">
                        <?php foreach ($reviews as $value): ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="course-item ">
                                    <img src="<?php echo $value['img'] ?>" width="100%">
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>















