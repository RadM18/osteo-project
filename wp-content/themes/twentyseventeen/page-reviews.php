<?php /* template name: Отзывы */ get_header(); ?>
 
    <div class="reviews-page">
        <div class="reviews" style="background-color: #fff">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1>
                            Отзывы
                        </h1>
                    <? 
                    $args = array(
                        'post_type' => 'page',
                        'post_status' => 'publish',
                        'meta_key' => 'page_parent',
                        'meta_value' => $post->ID,
                        'posts_per_page' => -1
                    );
                    $childPages = new WP_Query( $args ); ?>
                    <div class="reviews-wrap">
                        <div class="reviews-not-slider">
                            <? while($childPages->have_posts()) { $childPages->the_post(); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="reviews-slide">
                                    <a href="<? the_permalink(); ?>">
                                        <div class="reviews-photo">
                                            <img src="<? echo kama_thumb_src('src=' . get_field('photo') . '&w=130&h=130'); ?>" alt="">
                                        </div>
                                        <div class="reviews-name">
                                            <? if(get_field('h1')) { the_field('h1'); } else { the_title(); } ?>
                                        </div>
                                        <div class="reviews-text">
                                            <? echo kama_excerpt('maxchar=250'); ?> 
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
