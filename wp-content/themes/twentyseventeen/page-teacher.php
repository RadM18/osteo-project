<?php /* template name: Преподаватель */ get_header(); ?>

    <div class="teachers-page teacher-page">
        <div class="container">
            <div class="row">
                <div class="teachers-page-title">
                    <h1>ПРЕПОДАВАТЕЛИ</h1>
                </div>
                <div class="teacher-page-info">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="teacher-photo-wrap">
                                <div class="teacher-photo">
                                    <img src="<? echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                                </div>
                                <div class="teacher-name">
                                    <? if(function_exists('h1_title')) h1_title(); ?>
                                </div>
                                <div class="teacher-spec">
                                    <? the_field('должность'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-md-offset-1 col-sm-6 col-xs-12">
                            <div class="teacher-bio">
                                <? while(have_posts()) { the_post(); the_content(); } ?>
                            </div>
                            <div class="teacher-btn">
                                <div class="teacher-btn-call btn" onclick="tModalForm.show('frm_kurs');">
                                    СВЯЗАТЬСЯ
                                </div>
                                <div class="teacher-btn-review btn" onclick="tModalForm.show('frm_feed');">
                                    ОСТАВИТЬ ОТЗЫВ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? if($addText = get_field('add_text')) { ?>
        <div class="teacher-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="teacher-text-inner">
                            <?=$addText;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? } ?>
        <div class="reviews">
            <div class="container">
                <div class="row">
                    <h2>Отзывы</h2>
                    <div class="reviews-slider-wrap">
                        <div class="reviews-slider">
                            <? $reviews = get_field('отзывы'); 
                            foreach($reviews as $review){ ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="reviews-slide">
                                        <a href="<? echo get_permalink($review); ?>">
                                            <div class="reviews-photo">
                                                <img src="<? echo kama_thumb_src('src=' . get_field('photo', $review) . '&w=130&h=130'); ?>" alt="">
                                            </div>
                                            <div class="reviews-name">
                                                <? if(get_field('h1', $review)) { the_field('h1', $review); } else { echo get_the_title($review); } ?>
                                            </div>
                                            <div class="reviews-text">
                                                Школа профессора Эдуарда Нейматова представляет собой образовательный проект, цель которого − распространение знаний о здоровье, подготовка специалистов по оздоровительной системе «МЕТАВИТОНИКА» и постдипломное обучение для врачей-остеопатов. 
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <? } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? if($addText2 = get_field('add_text_2')) { ?>
        <div class="teacher-text-dop">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="teacher-text-dop-inner">
                            <?=$addText2;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? } ?>
        <div class="teacher-courses">
            <div class="container">
                <div class="row">
                    <h2>КУРСЫ ПРЕПОДАВАТЕЛЯ</h2>
                    <? $courses = get_field('курсы'); ?>
                    <div class="courses-slider-wrap row">
                        <div class="courses-slider-page">
                            
                            <? foreach($courses as $course){ ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="courses-slide">
                                        <a href="<? echo get_permalink($course); ?>">
                                            <div class="courses-title">
                                                <? if(get_field('h1', $course)) { the_field('h1', $course); } else { echo get_the_title($course); } ?>
                                            </div>
                                        </a>
                                        <div class="courses-text">
                                            <? the_field('описание_курса', $course); ?>
                                        </div>
                                        <div class="courses-teachers">
                                            <? $courseProfs = get_field('преподаватели', $course); ?>
                                            <div>Преподаватели:</div>
                                            <? foreach($courseProfs as $courseProf){ ?>
                                                <span><a href="<? echo get_permalink($courseProf); ?>"><? if(get_field('h1',$courseProf)) { the_field('h1',$courseProf); } else { echo get_the_title($courseProf); } ?></a></span>
                                            <? } ?>
                                        </div>
                                        <div class="courses-length">
                                            <img src="<? the_field('иконка', $course); ?>" alt="">
                                            <span><? the_field('тип_курса', $course); ?></span>
                                        </div>
                                        <? $coursePrice = get_field('стоимость', $course); ?>
                                        <div class="courses-price"><? echo $coursePrice[0]['цена'] . ' ₽'; ?></div>
                                        <div class="clearfix"></div>
                                        <div class="courses-date"><? the_field('дата', $course); ?></div>
                                        <div class="courses-time"><? the_field('время', $course); ?></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            <? } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
