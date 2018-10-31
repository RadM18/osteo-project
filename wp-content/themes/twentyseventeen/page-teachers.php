<?php   /* template name: Преподаватели */ get_header(); ?>


    <div class="teachers-page">
        <div class="container">
            <div class="row">
                
        <div class="teachers-page-title">
            <h1>ПРЕПОДАВАТЕЛИ</h1> 
        </div>
           <? 
            $args = array(
                'post_type' => 'page',
                'post_status' => 'publish',
                'meta_key' => 'page_parent',
                'meta_value' => $post->ID,
                'posts_per_page' => -1
            );
            $childPages = new WP_Query( $args ); ?>
            <div class="teachers-slider-wrap row">
                <div class="teachers-slider-page">
                    <?
                    $i = 1;
                    while($childPages->have_posts()) { $childPages->the_post(); ?>
                    <div class="col-md-3 box-teacher <? if($i == 5 || ($i - 5)%7==0) echo 'col-md-offet-3-24'; ?> <? if($i == 4 || ($i - 4)%5==0) echo 'col-sm-offet-3-24'; ?> <? if($i == 3 || $i%3==0) echo 'col-xs-offet-3-24'; ?>">
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

<?php get_footer();
