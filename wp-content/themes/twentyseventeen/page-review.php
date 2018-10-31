<?php /* template name: Отзыв */ get_header(); ?>

    <div class="review-page">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="review-content content">
                            <h1>Отзыв</h1>
                            <div class="review-inner-image">
                                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=770&h=387'); ?>" alt="">
                            </div>
                            <div class="review-inner-meta clearfix">
                                <div class="review-inner-name">
                                    <? if(function_exists('h1_title')) h1_title(); ?>
                                </div>
                                <? if($video = get_field('video')) { ?>
                                <div class="review-inner-video">
                                    <a href="https://www.youtube.com/embed/<?=$video;?>">
                                    <img src="<? bloginfo('template_directory'); ?>/images/play.png" alt="">
                                    <span>Видеоотзыв</span>
                                    </a>
                                </div>
                                <? } ?>
                            </div>
                            <div class="review-inner-text">
                                <? while(have_posts()) { the_post(); the_content(); } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="reviews" style="background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="reviews-wrap">
                    <div class="reviews-not-slider">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="reviews-slide">
                                <div class="reviews-photo">
                                    <img src="<? bloginfo('template_directory'); ?>/images/review.png" alt="">
                                </div>
                                <div class="reviews-name">
                                    Имя Фамилия
                                </div>
                                <div class="reviews-text">
                                    Школа профессора Эдуарда Нейматова представляет собой образовательный проект, цель которого − распространение знаний о здоровье, подготовка специалистов по оздоровительной системе «МЕТАВИТОНИКА» и постдипломное обучение для врачей-остеопатов. 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="reviews-slide">
                                <div class="reviews-photo">
                                    <img src="<? bloginfo('template_directory'); ?>/images/review.png" alt="">
                                </div>
                                <div class="reviews-name">
                                    Имя Фамилия
                                </div>
                                <div class="reviews-text">
                                    Школа профессора Эдуарда Нейматова представляет собой образовательный проект, цель которого − распространение знаний о здоровье, подготовка специалистов по оздоровительной системе «МЕТАВИТОНИКА» и постдипломное обучение для врачей-остеопатов. 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="reviews-slide">
                                <div class="reviews-photo">
                                    <img src="<? bloginfo('template_directory'); ?>/images/review.png" alt="">
                                </div>
                                <div class="reviews-name">
                                    Имя Фамилия
                                </div>
                                <div class="reviews-text">
                                    Школа профессора Эдуарда Нейматова представляет собой образовательный проект, цель которого − распространение знаний о здоровье, подготовка специалистов по оздоровительной системе «МЕТАВИТОНИКА» и постдипломное обучение для врачей-остеопатов. 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
