<script>

        $(document).ready(function () {
            $('a.nivoimg').nivoLightbox({
                keyboardNav: true,
            });
        });

</script>



<section class="banners hidden-xs">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="fixed_shadow">

        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            $i = 0;
            foreach ($sliders as $slider) {
                    //$string = strip_tags($slider->content);
                    $detail = substr($slider->content, 0, 500) . '...';
                    ?>
                    <div class="item <?= $i == 0 ? 'active' : '' ?>">
                        <img class="mov" src="<?php echo Yii::app()->request->baseUrl . '/uploads/slider/' . $slider->id . '/' . $slider->id . '.' . $slider->image; ?>" alt="<?= $slider->content_heading; ?>" width="460" height="345"/>

                        <div class="slider-cap carousel-caption animated animdelay1 zoomIn">
                            <h2><?= $slider->content_heading; ?></h2>

                            <?php if ($detail != "") { ?>
                                    <?php echo $detail; ?>
                            <?php } ?>
                            <div class="shopps center-block">
                                <?php if ($slider->link != "") { ?>
                                        <a class="shop" href="<?= $slider->link; ?>" role="button"><?= $slider->link_name; ?></a>
                                        <?php
                                } else {
                                        ?>
                                        <a class="shop" href="<?= Yii::app()->request->baseUrl . '/index.php/site/SliderContents/' . $slider->id; ?>" role="button">READ MORE</a>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
            }
            ?>

        </div>


        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span>
        </a>


    </div>
</section>



<section class="banners visible-xs">
    <div id="myCarousel-mobile" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel-mobile" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-mobile" data-slide-to="1"></li>
            <li data-target="#myCarousel-mobile" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="<?= Yii::app()->baseUrl ?>/images/z.jpg" alt="Chania"/>
                <div class="slider-cap carousel-caption animated animdelay1 zoomIn">
                    <h2>Wide angle learning</h2>
                    <p class="hidden-xs hidden-sm">Programmes in Business Management, Media studies, Engineering & Healthcare that are designed to prepare industry-ready students, with a competitive professional edge. </p>
                    <a class="future_btn pull-left" href="courses.php"><i class="fa future_angle fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a> </div>
            </div>
            <div class="item"> <img src="<?= Yii::app()->baseUrl ?>/images/z2.jpg" alt="Chania"/>
                <div class="slider-cap carousel-caption animated animdelay1 zoomIn">
                    <h2>Wide angle learning</h2>
                    <p class="hidden-xs hidden-sm">Programmes in Business Management, Media studies, Engineering & Healthcare that are designed to prepare industry-ready students, with a competitive professional edge. </p>
                    <a class="future_btn pull-left" href="courses.php"><i class="fa future_angle fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a> </div>
            </div>

            <div class="item"> <img src="<?= Yii::app()->baseUrl ?>/images/z3.jpg" alt="Chania"/>
                <div class="slider-cap carousel-caption animated animdelay1 zoomIn">
                    <h2>Wide angle learning</h2>
                    <p class="hidden-xs hidden-sm">Programmes in Business Management, Media studies, Engineering & Healthcare that are designed to prepare industry-ready students, with a competitive professional edge. </p>
                    <a class="future_btn pull-left" href="courses.php"><i class="fa future_angle fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a> </div>
            </div>




        </div>



        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel-mobile" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel-mobile" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>



    </div>
</section>
<div class="clearfix"></div>
<section class="productslist">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="future">
                    <?php
                    $small_image = StaticPage::model()->findAllByAttributes(array('parent' => '3'), array('condition' => 'id != 3'));
                    foreach ($small_image as $image) {
                            ?>
                            <div class="item">
                                <div class="main margins"> <a href="<?php echo $image->link; ?>"><img class="new-img" src="<?php echo Yii::app()->request->baseUrl . '/uploads/static_pages/' . $image->id . '/small.' . $image->small_image; ?>" alt="Banner"/></a> </div>
                            </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 effect-six">
                <?php $about = StaticPage::model()->findByPk(2); ?>
                <h1><?php echo $about->category_name; ?></h1>
                <p><?php echo $about->small_content; ?></p>
                <a class="future_btn center-block" href="<?php echo $about->link; ?>"><i class="fa future_angle fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a>


            </div>
        </div>
    </div>
</section>
<section>
    <div class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Board of Directors</h1>
                    <div class="row">
                        <?php
                        $messages = People::model()->findAll();
                        $i = 0;
                        foreach ($messages as $message) {
                                $i++;
                                if ($i <= 3) {
                                        ?>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h2><?php echo $message->heading; ?></h2>
                                            <div class="abs"> <img class="herbs img-responsive" src=<?php echo Yii::app()->request->baseUrl . '/uploads/people/' . $message->id . '.' . $message->image; ?>>
                                                <div class="absol">
                                                    <h4><?php echo $message->name; ?></h4>
                                                    <h6><?php echo $message->position; ?>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="edu">
                                                <p><?php echo $message->small_content; ?>  </p>
                                            </div>
                                            <a class="future_btn pull-left" href="<?= Yii::app()->request->baseUrl; ?>/index.php/site/people/id/<?= $message->id; ?>"><i class="fa future_blue fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a>
                                        </div>
                                        <?php
                                }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="verticals">
    <div class="container">
        <div class="row">
            <h1>OUR VERTICALS</h1>
            <div class="col-md-6 col-sm-6 col-xs-12 trust">
                <h2>Education</h2>
                <?php $education = StaticPage::model()->findByPk(570); ?>
                <img class="img-responsive wides" src="<?php echo Yii::app()->request->baseUrl . '/uploads/static_pages/' . $education->id . '/big.' . $education->big_image; ?>" />
                <?php echo $education->small_content; ?>

                <a class="blues pull-left" href="<?php echo $education->link; ?>"><i class="fa future_blue fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a>

            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 trust">
                <h2>Healthcare</h2>

                <?php $health = StaticPage::model()->findByPk(571); ?>
                <img class="img-responsive wides" src="<?php echo Yii::app()->request->baseUrl . '/uploads/static_pages/' . $health->id . '/big.' . $health->big_image; ?>" />
                <?php echo $health->small_content; ?>

                <a class="blues pull-left" href="<?php echo $health->link; ?>"><i class="fa future_blue fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a> </div>
        </div>
    </div>
</section>
<section class="future_programs">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Programs Offered</h1>
                <?php
                $i = 1;
                foreach ($courses as $course) {
                        ?>
                        <div class = "col-md-4 col-sm-6 future_spaces"> <a href = "<?= Yii::app()->baseUrl ?>/uploads/static_pages/<?= $course->id; ?>/big.<?= $course->big_image; ?>"><img src = "<?= Yii::app()->baseUrl ?>/uploads/static_pages/<?= $course->id; ?>/big.<?= $course->big_image; ?>"/></a>
                            <h3><?= $course->category_name; ?></h3>
                            <div class="spaces-2">
                                <p><?= $course->small_content; ?></p>
                            </div>
                            <a class="future_btn pull-left" href="<?= $course->link; ?>"><i class="fa future_blue fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a> </div>

                        <?php
                        $i++;
                        if ($i == 4)
                                echo '<div class="clearfix hidden-sm hidden-xs"></div><hr>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="sites-team">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1>Media & Events </h1>
                <div class="events-scroll">
                    <?php
                    $event = Gallery::model()->findAllByAttributes(array('cat_name' => 6));
                    foreach ($event as $events) {
                            $content2 = $events['content'];
                            $content = substr($content2, 0, 35);
                            ?>
                            <div class="item">
                                <div class="main tagg">
                                    <div class="dollar">
                                        <div class="col-md-5 col-sm-12 col-xs-12" style="padding-left:0;">
                                            <img class="img-responsive slabs" src="<?= Yii::app()->baseUrl ?>/uploads/gallery/<?php echo $events->id . '.' . $events->image; ?>" style="width:189px;height:174px;"/>

                                        </div>
                                        <div class="col-md-7  col-sm-12  col-xs-12" style="padding-left:0;">
                                            <h3><?php echo $events['title']; ?></h3>
                                            <h2><?php echo $content; ?>....</h2>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <a class="future_btn pull-left" href="<?= Yii::app()->baseUrl; ?>/index.php/site/Gallery/6"><i class="fa future_orange fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;View All</a>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1>Gallery</h1>
                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab">Image</a> </li>
                    <li class=""><a href="#service-two" data-toggle="tab">Video</a> </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                        <ul class="list-inline list-unstyled">
                            <?php
                            $gallery = Gallery::model()->findAllByAttributes(array('g_type' => 1), array('order' => 'id DESC', 'limit' => 6));
                            foreach ($gallery as $gallerys) {
                                    ?>

                                    <li class="team-gallery">
                                        <div class="main-sub">
                                            <div class="thumb thumb-height"> <a href="<?= Yii::app()->baseUrl ?>/uploads/gallery/<?php echo $gallerys->id; ?>.<?php echo $gallerys->image; ?>" class="nivoimg" data-lightbox-gallery="gallery1"> <img class="tea" src="<?= Yii::app()->baseUrl ?>/uploads/gallery/<?php echo $gallerys->id; ?>.<?php echo $gallerys->image; ?>" alt=""  width="100%"/> </a> </div>

                                        </div>
                                    </li>
                            <?php } ?>
                        </ul>
                        <div class="clearfix"></div>
                        <a class="future_btn pull-left" id="service-one" href="<?= Yii::app()->baseUrl; ?>/index.php/site/gallery/2"><i class="fa future_orange fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;View All</a>
                    </div>
                    <?php
                    $video = Video::model()->findAllByAttributes(array(), array('order' => 'id desc', 'limit' => 1));
                    ?>
                    <style>
                        .video iframe{

                            width: 100%;
                            height:310px;

                        }
                    </style>
                    <div class="tab-pane fade video"  id="service-two">
                        <?php
                        $v = '';
                        $video = Video::model()->findByAttributes(array(), array('order' => 'id desc', 'limit' => 1));
                        parse_str(parse_url($video['link'], PHP_URL_QUERY));
                        ?>
                        <iframe src="https://www.youtube.com/embed/<?php echo $v; ?>" frameborder="0" allowfullscreen></iframe>
                        <div class="clearfix"></div>
                        <a class="future_btn pull-left" href="<?= Yii::app()->baseUrl; ?>/index.php/site/video/1"><i class="fa future_orange fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;View All</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="speaks">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Our Student</h1>
                <div class="testi">
                    <?php
                    foreach ($testimonials1 as $testimonial1) {
                            $content = $testimonial1->content;
                            $content1 = substr($content, 0, 100);
                            ?>
                            <div class="item">
                                <div class="main tagg"> <img class="img-responsive pad-two" src="<?= Yii::app()->baseUrl ?>/uploads/testimonials/<?= $testimonial1->id; ?>.<?= $testimonial1->image; ?>"/>
                                    <p><a class="iso" href="#"><?= $content1; ?></a>...</p>
                                    <h2><a class="iso" href="#"><?= $testimonial1->name; ?></a></h2>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <a class="future_btn pull-left" href="<?php echo Yii::app()->baseUrl; ?>/index.php/site/Alumni#student"><i class="fa future_orange fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;View all</a>
            </div>
            <div class="col-md-6">
                <h1>Alumni Speak</h1>
                <div class="alumni">
                    <?php
                    foreach ($testimonials2 as $testimonial2) {
                            $content2 = $testimonial2->content;
                            $content3 = substr($content2, 0, 60);
                            ?>
                            <div class="item">
                                <div class="main tagg"> <img class="img-responsive pad-two" src="<?= Yii::app()->baseUrl ?>/uploads/testimonials/<?= $testimonial2->id; ?>.<?= $testimonial2->image; ?>"/>
                                    <p><a class="iso" href="#"> <?= $content3; ?></a>...</p>
                                    <h2><a class="iso" href="#"><?= $testimonial2->name; ?></a></h2>
                                </div>
                            </div>

                    <?php } ?>
                </div>
                <a class="future_btn pull-left" href="<?php echo Yii::app()->baseUrl; ?>/index.php/site/Alumni#alumni"><i class="fa future_orange fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;View all</a>
            </div>
        </div>
    </div>
</section>
<section class="offers-team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Placement Accredidation</h1>
                <div class="placements">
                    <?php
                    $placements = PlacementPartners::model()->findAllByAttributes(['type' => 1]);
                    foreach ($placements as $placement) {
                            ?>
                            <div class="item">
                                <div class="main"> <a href="#"><img class="new-img" src="<?= Yii::app()->baseUrl; ?>/uploads/partners/<?= $placement->id; ?>.<?= $placement->image; ?>"/></a> </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="offers-team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Top Recruiters</h1>
                <div class="recruit">
                    <?php
                    $top_recruters = PlacementPartners::model()->findAllByAttributes(['type' => 0]);
                    foreach ($top_recruters as $top_recruter) {
                            ?>
                            <div class="item">
                                <div class="main"> <a href="#"><img class="new-img" src="<?= Yii::app()->baseUrl; ?>/uploads/partners/<?= $top_recruter->id; ?>.<?= $top_recruter->image; ?>" alt="Banner"/></a> </div>
                            </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="industryspeak">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Industry Speak</h1>
                <div class="slick-recent">
                    <?php
                    foreach ($testimonials3 as $testimonial3) {
                            ?>
                            <div class="item">
                                <div class="main">
                                    <div class="sliced"> <a href="#"><img class="teen img-responsive" src="<?= Yii::app()->baseUrl ?>/uploads/testimonials/<?= $testimonial3->id; ?>.<?= $testimonial3->image; ?>" alt="Banner"/></a> </div>
                                    <div class="christain">
                                        <a class="iso" href="#"><?= $testimonial3->content; ?></a>
                                        <h2><a class="iso" href="#"><?= $testimonial3->name; ?></a></h2>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <a class="blues center-block" href="<?= Yii::app()->baseUrl ?>/index.php/site/IndustrySpeak"><i class="fa future_blue fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Read More</a> </div>
        </div>
    </div>
    <script type="text/javascript" src="<?= Yii::app()->baseUrl ?>/js/jquery.bxslider.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->baseUrl ?>/js/slick.min.js"></script>
</section>
<script>
        $('.slider').bxSlider({
            mode: 'vertical',
            minSlides: 1,
            maxSlides: 5,
            moveSlides: 1,
            auto: true
        });

</script>
<script>

        $(document).ready(function () {

            $('.future').slick({
                slidesToShow: 5,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                prevArrow: '<i id="prev_slide_s" class="fa fa-angle-left"></i>',
                nextArrow: '<i id="next_slide_s" class="fa fa-angle-right"></i>',
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    }
                ]
            });

        });

</script>
<script>

        $(document).ready(function () {

            $('.placements').slick({
                slidesToShow: 5,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                prevArrow: '<i id="prev_slide_s3" class="fa fa-angle-left"></i>',
                nextArrow: '<i id="next_slide_s3" class="fa fa-angle-right"></i>',
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    }
                ]
            });

        });

</script>
<script>

        $(document).ready(function () {

            $('.recruit').slick({
                slidesToShow: 5,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                prevArrow: '<i id="prev_slide_s3" class="fa fa-angle-left"></i>',
                nextArrow: '<i id="next_slide_s3" class="fa fa-angle-right"></i>',
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    }
                ]
            });

        });

</script>
<script>
        $(document).ready(function () {
            $('.testi').slick({
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                vertical: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 3

                        }

                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 3

                        }

                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 4

                        }
                    }
                ]
            });
        });
</script>
<script>
        $(document).ready(function () {
            $('.alumni').slick({
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                vertical: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 3

                        }

                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 3

                        }

                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 4

                        }
                    }
                ]
            });
        });
</script>
<script>

        $(document).ready(function () {

            $('.slick-recent').slick({
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 1
                        }
                    }
                ]
            });

        });

</script>
<script>
        $(document).ready(function () {
            $('.events-scroll').slick({
                slidesToShow: 2,
                autoplay: true,
                autoplaySpeed: 2000,
                slidesToScroll: 1,
                pauseOnHover: true,
                vertical: true,
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            centerMode: false,
                            slidesToShow: 3

                        }

                    },
                    {
                        breakpoint: 800,
                        settings: {
                            centerMode: false,
                            slidesToShow: 3

                        }

                    },
                    {
                        breakpoint: 480,
                        settings: {
                            centerMode: false,
                            slidesToShow: 4

                        }
                    }
                ]
            });
        });
</script>