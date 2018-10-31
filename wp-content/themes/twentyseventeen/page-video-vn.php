<?php  /* template name: Видео (вн) */ get_header(); ?>

    <div class="new-page">
        <div class="new">
            <div class="container">
                <div class="row">
                    <div class="content clearfix">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="row">
                                <div class="back-link">
                                    <a href="<? echo get_permalink(133); ?>">Назад в раздел</a>
                                </div>
                                <? $video = get_field('видео'); ?>
                                <iframe width="100%" height="500" src="https://www.youtube.com/embed/<?=$video;?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                
                                <div class="new-info clearfix">
                                    <div class="new-date">
                                        <? echo get_the_date(); ?>
                                    </div>
                                </div>
                                <h1><? if(function_exists('h1_title')) h1_title(); ?></h1>
                                <? while(have_posts()) { the_post(); the_content(); } ?>
                                <div class="new-share pull-left">
                                    <span>Поделиться:</span>
                                    
                                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki">
                                        <div class="social-item">
                                            <a href="#"><img src="<? bloginfo('template_directory'); ?>/images/ok-circle.png" alt=""></a>
                                        </div>
                                        <div class="social-item">
                                            <a href="//vk.com/metavitonica"><img src="<? bloginfo('template_directory'); ?>/images/vk-circle.png" alt=""></a>
                                        </div>
                                        <div class="social-item">
                                            <a href="//www.facebook.com/metavitonica"><img src="<? bloginfo('template_directory'); ?>/images/facebook-circle.png" alt=""></a>
                                        </div>
                                        <div class="social-item"><a href="//www.instagram.com/metavitonica/">
                                            <img src="<? bloginfo('template_directory'); ?>/images/instagram-circle.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="recent-news">
                        <h2>Вам может быть интересно</h2>
                        <? $args = array(
                            'post_type' => 'page',
                            'post_status' => 'publish',
                            'meta_key' => 'page_parent',
                            'meta_value' => 133,
                            'posts_per_page' => 3
                        );
                        $childPages = new WP_Query( $args ); ?>
                        <div class="videos-items">
                            <div class="row">
                                <? while($childPages->have_posts()) { $childPages->the_post(); ?>
                                <div class="col-md-4">
                                    <div class="videos-item">
                                        <a href="<? the_permalink(); ?>">
                                            <div class="videos-img">
                                                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=370&h=246'); ?>" alt="">
                                            </div>
                                            <div class="videos-info">
                                                <div class="videos-title">
                                                    <? if(get_field('h1')) { the_field('h1'); } else { the_title(); } ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <? } wp_reset_query(); ?>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
