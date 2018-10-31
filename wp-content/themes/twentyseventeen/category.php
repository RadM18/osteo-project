<?php get_header(); ?>

<div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <div class="breadcrumbs-inner">
                        Главная / Отзыв
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="news-page">
        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1>
                            Медиа-центр
                        </h1>
                        <div class="media-cats">
                            <div class="media-cat <? if(is_category(3)) { echo 'active'; } ?>">
                                <a href="<? echo get_category_link(3); ?>">Блог</a>
                            </div>
                            <div class="media-cat <? if(is_category(4)) { echo 'active'; } ?>">
                                <a href="<? echo get_category_link(4); ?>">Новости</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(119); ?>">Фото</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(133); ?>">Видео</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(102); ?>">Библиотека</a>
                            </div>
                        </div>
                        <div class="news-count">
                            <span>На странице:</span>
                            <div class="news-count-items">
                                <span class="active">12</span>
                                <span>24</span>
                                <span>36</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <? 
                        if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                        elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                        else { $paged = 1; }
                        
                        $cat = get_queried_object();
                        $catID = $cat->term_id;
                        $ppp = 1;
                        $args = array(
                            'cat' => $catID,
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => $ppp,
                            );
                        $news = new WP_Query($args); ?>
                        
                        <div class="news-items">
                            <div class="row">
                                <? while($news->have_posts()){ $news->the_post();  ?>
                                <div class="col-md-4">
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
                                <? } ?>
                            </div>
                        </div>
                            <? var_dump($news->max_num_pages); ?>
                            <? var_dump($paged); ?>
                        <div class="pagination">
                            <? echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $news->max_num_pages,
                                    'current'      => max( 1, $paged ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'plain',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'prev_text'    => '',
                                    'next_text'    => '',
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                
                
                                wp_reset_query(); ?>
                           
                        </div>
                        <div class="news-count">
                            <span>На странице:</span>
                            <div class="news-count-items">
                                <span class="active">12</span>
                                <span>24</span>
                                <span>36</span>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
