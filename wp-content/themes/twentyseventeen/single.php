<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="new-page">
        <div class="new">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="row">
                                <div class="back-link">
                                    <? $parentCat = get_the_category(); $parentCatID = $parentCat['0']->term_id; ?>
                                    <a href="<? if($parentCatID == 3) { echo get_permalink(397); } else { echo get_permalink(399); } ?>">Назад в раздел</a>
                                </div>
                                <div class="new-img">
                                    <img src="<?=wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>" alt="">
                                </div>
                                <div class="new-info clearfix">
                                    <div class="new-date">
                                        <? echo get_the_date(); ?>
                                    </div>
                                    <div class="new-share">
                                        <span>Поделиться:</span>
                                        
                                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                        <script src="//yastatic.net/share2/share.js"></script>
                                        <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki"></div>
                                    </div>
                                </div>
                                <h1><? if(function_exists('h1_title')) h1_title(); ?></h1>
                                <? while(have_posts()) { the_post(); the_content(); } ?>
                                <div class="new-share pull-left">
                                    <span>Поделиться:</span>
                                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
                    <div class="recent-news">
                        <h2>Вам может быть интересно</h2>
                        <? $args = array(
                            'cat' => $parentCatID,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 3,
                            );
                        $news = new WP_Query($args); ?>
                        
                        <div class="news-items">
                            <div class="row">
                                <? while($news->have_posts()){ $news->the_post();  ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="news-item">
                                        <a href="<? the_permalink(); ?>">
                                        <div class="news-img">
                                            <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=370&h=186'); ?>" alt="">
                                        </div>
                                        <div class="news-info">
                                            <div class="news-title">
                                                <? if(get_field('h1')) { the_field('h1'); } else { the_title(); } ?>
                                            </div>
                                            <div class="news-exc">
                                                <? echo kama_excerpt(); ?>
                                            </div>
                                            <div class="news-date">
                                                <? echo get_the_date(); ?>
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
