<?php 
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="main-page">
    <div class="big-image">
        <div class="big-image-slider">
             <div class="big-image-slide">
                        <div class="big-image-bg">
                            <img src="<? the_field('изображение_первый_экран'); ?>" alt="">
                        </div>
                        <div class="big-image-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="big-image-title"><? the_field('заголовок_первый_экран'); ?></div>
                                    <div class="big-image-text"><? the_field('текст_первый_экран'); ?></div>
                                    <div class="big-image-button">
                                        <? $mainLinks = get_field('ссылки_первый_экран'); 
                                        foreach($mainLinks as $mainLink){ ?>
                                            <div class="btn <? if($mainLink['прозрачная']) { echo 'btn-transparent'; } ?>"><a href="<?=$mainLink['ссылка']; ?>"><?=$mainLink['название']; ?></a></div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
             <div class="big-image-slide">
                        <div class="big-image-bg">
                            <img src="<? the_field('изображение_первый_экран'); ?>" alt="">
                        </div>
                        <div class="big-image-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="big-image-title"><? the_field('заголовок_второй_экран'); ?></div>
                                    <div class="big-image-text"><? the_field('текст_второй_экран'); ?></div>
                                    <div class="big-image-button">
                                        <? $mainLinks = get_field('ссылки_второй_экран'); 
                                        foreach($mainLinks as $mainLink){ ?>
                                            <div class="btn <? if($mainLink['прозрачная_2']) { echo 'btn-transparent'; } ?>"><a href="<?=$mainLink['ссылка_2']; ?>"><?=$mainLink['название_2']; ?></a></div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>

    </div>
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-inner">
                        <div class="about-title">
                            МЕТАВИТОНИКА
                        </div>
                        <div class="about-text">
                            <? the_field('текст'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="https://www.youtube.com/embed/<? the_field('видео'); ?>">
                        <div class="about-img">
                            <img src="<? bloginfo('template_directory'); ?>/images/about-img.png" alt="">
                        </div>
                        <div class="about-play">
                            <img src="<? bloginfo('template_directory'); ?>/images/play.png" alt="">
                            <span>Название  видео</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="advantages-inner">
                        <h2><? the_field('meta_heading'); ?></h2>
                        <div class="advantages-list">
                            <div class="row">
                                <? $metaAdv = get_field('meta_adv'); ?>
                                <div class="col-md-6">
                                    <? $i = 1; 
                                        $countAdv = count($metaAdv);
                                    foreach($metaAdv as $metaAd){ ?>
                                        <div class="advantages-item"><img src="<? bloginfo('template_directory'); ?>/images/check.svg" alt=""> <span><?=$metaAd['meta_adv_item'];?></span></div>
                                    <? 
                                        if($i == round($countAdv / 2)){
                                            echo '</div><div class="col-md-6">';
                                        }
                                            $i++;
                                    } ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="study">
        <div class="container">
            <div class="row">
                <div class="row">
                    <h2>Особенности обучения в школе</h2>
                    <? $schoolAdv = get_field('school_adv');
                    $i = 1;
                    foreach($schoolAdv as $schoolAd){ 
                    if($i % 2 != 0) { ?>
                        <div class="study-row study-row-1 clearfix">

                            <div class="col-md-7 col-sm-12">
                                <div class="study-text">
                                    <?=$schoolAd['текст'];?>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12">
                                <div class="professor">
                                    <div class="professor-img"><img src="<?=$schoolAd['преподаватель']['фото'] ?>" alt=""></div>
                                    <div class="professor-desc">
                                        <div class="professor-name"><?=$schoolAd['преподаватель']['имя'] ?></div>
                                        <div class="professor-bio"><?=$schoolAd['преподаватель']['описание'] ?></div>
                                        <div class="professor-link"><a href="<?=$schoolAd['преподаватель']['ссылка'] ?>">биография ></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } else { ?>
                        <div class="study-row study-row-2 clearfix">

                            <div class="col-md-5 col-sm-12">
                                <div class="professor">
                                    <div class="professor-img"><img src="<?=$schoolAd['преподаватель']['фото'] ?>" alt=""></div>
                                    <div class="professor-desc left">
                                        <div class="professor-name"><?=$schoolAd['преподаватель']['имя'] ?></div>
                                        <div class="professor-bio"><?=$schoolAd['преподаватель']['описание'] ?></div>
                                        <div class="professor-link"><a href="<?=$schoolAd['преподаватель']['ссылка'] ?>">биография ></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12">
                                <div class="study-text">
                                    <?=$schoolAd['текст'];?>
                                </div>
                            </div>
                        </div>
                    <? } $i++; } ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="about-school">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="about-school-slider">
                            <? $schoolGal = get_field('school_gal');
                            foreach($schoolGal as $schoolGalItem){ ?>
                                <div class="about-school-slide">
                                    <img src="<? echo kama_thumb_src('src=' . $schoolGalItem['url'] . '&w=640&h=630'); ?>" alt="">
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="about-school-text">
                            <h2>О школе</h2>
                            <?=the_field('school_text');?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 col-sm-12">
                        <div class="practice-slider-wrap">
                        <div class="practice-slider">
                            <? $addCourses = get_field('add_courses');
                            foreach($addCourses as $addCourse){ ?>
                                <div class="practice-slide">
                                    <h2><?=$addCourse['название']; ?></h2>
                                    <div class="practice-dop"><?=$addCourse['тип']; ?></div>
                                    <div class="practice-date"><?=$addCourse['date_time']; ?></div>
                                    <div class="practice-text">
                                        <?=$addCourse['description']; ?>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="leading">
                            <img src="<? echo kama_thumb_src('src=' . $host['photo'] . '&w=640&h=497'); ?>" alt="">
                            <? $host = get_field('ведущий'); ?>
                            <div class="professor-desc">
                                <div class="professor-name"><?=$host['name'];?></div>
                                <div class="professor-bio">ведущая семинара</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="courses">
        <div class="container">
            <div class="row">
                <h2>КУРСЫ</h2>
                <div id="tabs">
                    <ul class="link-list">
                        <? $tabs = get_field('tabs'); ?>
                        <? foreach($tabs as $k=>$tab){ ?>
                            <li><a href="#tabs-<?=$k+1; ?>"><?=$tab['title'];?></a></li>
                        <? } ?>
                    </ul>
                    <? foreach($tabs as $k=>$tab){ ?>
                    <div id="tabs-<?=$k+1; ?>">
                        <div class="courses-slider-wrap row">
                            <div class="courses-slider-page">
                                <? foreach($tab['courses'] as $course){ ?>
                                    <div class="col-md-4">
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
                    <? } ?>
                    
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <div class="teachers">
        <div class="container">
            <div class="row">
                <h2>Преподаватели</h2>
                <div class="teachers-slider-wrap row">
                    <div class="teachers-slider">
                        <? 
                        $args = array(
                            'post_type' => 'page',
                            'post_status' => 'publish',
                            'meta_key' => 'page_parent',
                            'meta_value' => 162,
                            'posts_per_page' => -1
                        );
                        $childPages = new WP_Query( $args ); ?>
                        <?
                        $i = 1;
                        while($childPages->have_posts()) { $childPages->the_post(); ?>
                        <div class="col-md-3">
                            <div class="teachers-slide"><div class="teachers-slide-bg"><img src="<? bloginfo('template_directory'); ?>/images/teacher-bg.png"></div><div class="teachers-slide-inner">
                                <a href="<? the_permalink(); ?>">
                                    <div class="teachers-photo">
                                        <img src="<? the_field('small_photo'); ?>" alt="">
                                    </div>
                                    <div class="teachers-name">
                                        <? if(get_field('h1')) { the_field('h1'); } else { the_title(); } ?> 
                                    </div>
                                    <div class="teachers-text">
                                        <? the_field('должность'); ?>
                                    </div>
                                </a>
                            </div>
                            </div>
                        </div>
                        <? $i++; } wp_reset_query(); ?>
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
                            <div class="col-md-4">
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
    
    <div class="video-block">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <div class="video">
                            <h2>Видео о школе</h2>
                            <div class="video-slider">
                                <? $videoSlider = get_field('school_video'); 
                                foreach($videoSlider as $videoSlide){ ?>
                                <div class="video-slide">
                                    <a href="https://www.youtube.com/embed/<?=$videoSlide['link'];?>">
                                        <img src="<? echo kama_thumb_src('src=' . $videoSlide['video_preview'] . '&w=570&h=349'); ?>" alt="">
                                    </a>
                                </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-block-wrap">
                            <div class="form-block">
                                <h2>ХОТИТЕ БЫТЬ В КУРСЕ?</h2>
                                <div class="form-block-text">Подпишитесь на нашу рассылку и вы высегда будете получать только самые актуальные новости о предстоящих курсах и акциях!</div>
                                <div class="form-block-form">
                                    <? echo do_shortcode('[contact-form-7 id="416" title="Подписаться"]'); ?>
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
