<?php /* template name: Курсы */ get_header(); ?>

    <div class="courses-page">
        
    <div class="courses">
        <div class="container">
            <div class="row">
                <h2>НАШИ КУРСЫ</h2>
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
                    <? } ?>
                     
                    
                </div>
                
            </div>
        </div>
    </div>
        <? $seoBlock = get_field('seo_text'); ?>
        <div class="seo-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <h2><?=$seoBlock['заголовок']; ?></h2>
                        <div class="seo-text">
                            <?=$seoBlock['текст']; ?>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="seo-img">
                            <img src="<?=$seoBlock['изображение']; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

<?php get_footer();
