<?php  /* template name: Фотографии */ get_header(); ?>

    <div class="photos-page">
        <div class="photos">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1>
                            Медиа-центр
                        </h1>
                        <div class="media-cats">
                            <div class="media-cat">
                                <a href="<? echo get_permalink(397); ?>">Блог</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(399); ?>">Новости</a>
                            </div>
                            <div class="media-cat <? if(is_page(119)) { echo 'active'; }; ?>">
                                <a href="<? echo get_permalink(119); ?>">Фото</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(133); ?>">Видео</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(102); ?>">Библиотека</a>
                            </div>
                        </div>
                        <?
                            if($_REQUEST){
                                $ppp = $_REQUEST['count'];
                            } else {
                                $ppp = 12;
                            }
                        ?>
                        <div class="news-count">
                            <span>На странице:</span>
                            <div class="news-count-items">
                                <form id="filter-form" method="get" action="">
                                    <span><button form="filter-form" name="count" class="<? if($ppp == 12) { echo 'active'; } ?>" value="12">12</button></span>
                                    <span><button form="filter-form" name="count" class="<? if($ppp == 24) { echo 'active'; } ?>" value="24">24</button></span>
                                    <span><button form="filter-form" name="count" class="<? if($ppp == 36) { echo 'active'; } ?>" value="36">36</button></span>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <? 
                        
                        if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
                        elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
                        else { $paged = 1; }

                        $args = array(
                            'post_type' => 'page',
                            'post_status' => 'publish',
                            'meta_key' => 'page_parent',
                            'paged' => $paged,
                            'meta_value' => $post->ID,
                            'posts_per_page' => $ppp
                        );
                        $childPages = new WP_Query( $args ); ?>
                        <div class="photos-items">
                            <div class="row">
                                <? while($childPages->have_posts()) { $childPages->the_post(); ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="photos-item">
                                        <a href="<? the_permalink(); ?>">
                                            <div class="photos-img">
                                                <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=370&h=246'); ?>" alt="">
                                            </div>
                                            <div class="photos-info">
                                                <div class="photos-title">
                                                    <? if(get_field('h1')) { the_field('h1'); } else { the_title(); } ?>
                                                </div>

                                                <div class="photos-date">
                                                    <? echo count(get_field('галерея')) . ' фотографий'; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <? } ?>
                                
                                
                            </div>
                        </div>
                        <? if($news->max_num_pages > 1) { ?>
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
                                    'prev_text'    => 'В начало',
                                    'next_text'    => 'В конец',
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                                wp_reset_query(); ?>
                        </div>
                        <? } ?>
                        <div class="news-count news-count-bottom">
                            <span>На странице:</span>
                            <div class="news-count-items">
                                <form id="filter-form" method="get" action="">
                                    <span><button form="filter-form" name="count" class="<? if($ppp == 12) { echo 'active'; } ?>" value="12">12</button></span>
                                    <span><button form="filter-form" name="count" class="<? if($ppp == 24) { echo 'active'; } ?>" value="24">24</button></span>
                                    <span><button form="filter-form" name="count" class="<? if($ppp == 36) { echo 'active'; } ?>" value="36">36</button></span>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
