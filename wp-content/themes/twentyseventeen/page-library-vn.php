<?php /* template name: Библиотека (вн) */ get_header(); ?>

    <div class="news-page library-page">
        <div class="news library-item">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h2 class="center-line">
                            Медиа-центр
                        </h2>
                        <? $pp = get_field('page_parent'); ?>
                        <div class="media-cats">
                            <div class="media-cat">
                                <a href="<? echo get_permalink(397); ?>">Блог</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(399); ?>">Новости</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(119); ?>">Фото</a>
                            </div>
                            <div class="media-cat">
                                <a href="<? echo get_permalink(133); ?>">Видео</a>
                            </div>
                            <div class="media-cat <? if($pp == 102) { echo 'active'; }; ?>">
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
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="library-sidebar">
                                    <ul>
                                        <li class="active"><a href="#">Фильмы</a></li>
                                        <li><a href="#">Книги</a></li>
                                        <li><a href="#">Музыка</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="lib-meta">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<? bloginfo('template_directory'); ?>/images/Lib-inner.png" alt="">
                                        </div>
                                        <div class="col-md-8">
                                            <h1 class="no-line"><? if(function_exists('h1_title')) h1_title(); ?></h1>
                                            <div class="lib-author">
                                                Автор <span><? the_field('author'); ?></span>
                                            </div>
                                            <div class="lib-price">
                                                <? the_field('price'); ?> ₽
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="lib-description">
                                                <? the_field('description'); ?> 
                                            </div>
                                            <div class="lib-btns">
                                                <div class="view-btn btn"><a href="<? the_field('link'); ?>">ПРОСМОТРЕТЬ</a></div>
                                                <div class="order-btn btn">ЗАКАЗАТЬ</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <? while(have_posts()) { the_post(); the_content(); } ?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
