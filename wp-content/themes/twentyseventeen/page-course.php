<?php /* template name: Курс */ get_header(); ?>

    <div class="courses-page">
        <div class="container">
            <div class="row">
                <div class="courses-page-title">
                    <h1><? if(function_exists('h1_title')) h1_title(); ?></h1>
                </div>
                <div class="courses-page-info">
                    <div class="row">
                        <div class="col-md-6 col-sm-5 col-xs-12">
                            <div class="courses-img">
                                <img src="<? echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-7 col-xs-12">
                            <div class="course-info">
                                <div class="course-nabor">
                                    <? the_field('набор'); ?>
                                </div>
                                <div class="course-type">
                                    <img src="<? the_field('иконка'); ?>" alt="">
                                    <span><? the_field('тип_курса'); ?></span>
                                </div>
                                <div class="course-time"><? the_field('время'); ?></div>
                                <div class="course-date"><? the_field('дата'); ?></div>
                                <div class="clearfix" style="margin-bottom: 15px;"></div>
                                <div class="course-about">
                                    <? while(have_posts()) { the_post(); the_content(); } ?>
                                </div>
                                <div class="course-order-btn">
                                    <div class="btn" onclick="tModalForm.show('frm_kurs');">ЗАПИСАТЬСЯ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="course-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        
                        <div class="course-text-inner">
                            <? the_field('seo_text'); ?>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="knowledge">
            <div class="container">
                <div class="row">
                    <div class="knowledge-title">
                        <h2><? the_field('ключевые_знания_заголовок'); ?></h2>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="knowledge-inner">
                                <? the_field('ключевые_знания'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="metavionika">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="metavionika-video">
                                <img src="<? bloginfo('template_directory'); ?>/images/school.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="metavionika-text">
                                <? the_field('текст'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="study-steps">
            <div class="container">
                <div class="row">
                    <h2><? the_field('заголовок_обучение'); ?></h2>
                    <? $studySteps = get_field('обучение'); ?>
                    <div class="study-steps-items">
                        <div class="row">
                            <? foreach($studySteps as $studyStep){ ?>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="study-steps-item">
                                    <div class="study-steps-num"><img src="<?=$studyStep['номер']; ?>" alt=""></div>
                                    <div class="study-steps-title"><?=$studyStep['текст']; ?></div>
                                </div>
                            </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="course-teachers">
            <div class="container">
                <div class="row">
                    <h2>Преподаватели Курса</h2>
                    <? 
                    $profs = get_field('преподаватели'); ?>
                    <div class="teachers-slider-wrap row">
                        <div class="teachers-slider-page">
                            <?
                            $i = 1;
                            foreach($profs as $prof){ ?>
                            <div class="col-md-3 col-sm-4 col-xs-12 <? if($i == 5 || ($i - 5)%7==0) echo 'col-md-offet-3-24'; ?>">
                                <div class="teachers-slide"><div class="teachers-slide-bg"><img src="<? bloginfo('template_directory'); ?>/images/teacher-bg.png"></div><div class="teachers-slide-inner">
                                    <a href="<? echo get_permalink($prof); ?>">
                                        <div class="teachers-photo">
                                            <img src="<? the_field('small_photo', $prof); ?>" alt="">
                                        </div>
                                        <div class="teachers-name">
                                            <? if(get_field('h1', $prof)) { the_field('h1', $prof); } else { echo get_the_title($prof); } ?> 
                                        </div>
                                        <div class="teachers-text">
                                            <? the_field('должность', $prof); ?>
                                        </div>
                                    </a>
                                </div>
                                </div>
                            </div>
                            <? $i++; } ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="course-price">
            <div class="container">
                <div class="row">
                    <h2>СТОИМОСТЬ КУРСА</h2>
                    <div class="course-price-items">
                        <div class="row">
                            <? $price = get_field('стоимость'); 
                            foreach($price as $priceItem){ ?>
                                <? if($priceItem['вид_цены'] == 'line'){ ?>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="course-price-item">
                                            <div class="course-price-block">
                                                <div class="course-price-discount"><?=$priceItem['старая_цена'];?> ₽</div>
                                                <div class="course-price-current"><?=$priceItem['цена'];?> ₽</div>
                                            </div>
                                            <div class="course-price-text"><?=$priceItem['описание'];?></div>
                                            <div class="course-price-order">
                                                <div class="btn" onclick="tModalForm.show('frm_kurs');">ЗАПИСАТЬСЯ</div>
                                            </div>
                                        </div>
                                    </div>
                                <? } elseif($priceItem['вид_цены'] == 'old') { ?>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="course-price-item">
                                            <div class="course-price-block">
                                                <div class="course-price-current"><?=$priceItem['цена'];?> ₽</div>
                                                <div class="course-price-old">Старая цена <?=$priceItem['старая_цена'];?> ₽</div>
                                            </div>
                                            <div class="course-price-text"><?=$priceItem['описание'];?></div>
                                            <div class="course-price-order">
                                                <div class="btn" onclick="tModalForm.show('frm_kurs');">ЗАПИСАТЬСЯ</div>
                                            </div>
                                        </div>
                                    </div>
                                <? } else { ?>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="course-price-item">
                                            <div class="course-price-block">
                                                <div class="course-price-current"><?=$priceItem['цена'];?> ₽</div>
                                            </div>
                                            <div class="course-price-text"><?=$priceItem['описание'];?></div>
                                            <div class="course-price-order">
                                                <div class="btn" onclick="tModalForm.show('frm_kurs');">ЗАПИСАТЬСЯ</div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="teacher-courses closest-courses">
            <div class="container">
                <div class="row">
                    <h2>Ближайшие потоки</h2>
                    <div class="courses-slider-wrap row">
                        <? $courses = get_field('ближайшие_потоки'); ?>
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
        <div class="photo-last">
            <div class="container">
                <div class="row">
                    <h2>Фото с прошедшего курса</h2>
                    <? $photos = get_field('фото'); ?>
                    <div class="photo-last-items">
                        <div class="row">
                            <? foreach($photos as $photo){ ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="photo-last-item">
                                    <a href="<? echo get_permalink($photo); ?>">
                                        <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($photo)) . '&w=370&h=186'); ?>" alt="">
                                        <div class="photo-last-info">
                                            <div class="photo-last-title"><? if(get_field('h1', $photo)) { the_field('h1',$photo); } else { echo get_the_title($photo); } ?></div>
                                            <div class="photo-last-date"><? echo get_the_date('d F', $photo); ?></div>
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
        <div class="reviews">
            <div class="container">
                <div class="row">
                    <h2>Отзывы</h2>
                    <div class="reviews-slider-wrap">
                        <div class="reviews-slider">
                            <? $reviews = get_field('отзывы'); 
                            foreach($reviews as $review){ ?>
                                <div class="col-md-4 col-sm-6">
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
        <div class="video-block course-video-block">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="video">
                                <img src="<? bloginfo('template_directory'); ?>/images/course-video.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-block-wrap">
                                <div class="form-block">
                                    <h2>ОСТАЛИСЬ ВОПРОСЫ?</h2>
                                    <div class="form-block-text">Оставьте заявку на обратный звонок <br>и наш специалист ответит на все ваши вопросы.</div>
                                    <div class="form-block-form">
                                       <? echo do_shortcode('[contact-form-7 id="499" title="обратный звонок"]'); ?>
                                        <div class="checkbox">
                                          <input type="checkbox"   id="wifi"/>
                                          <label for="wifi"></label><span class="policy-text"> Ознакомился и принимаю условия <a href="http://institut-osteopatii.ru/politika-konfidencialnosti/">Политики конфиденциальности</a></span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

<?php get_footer();
