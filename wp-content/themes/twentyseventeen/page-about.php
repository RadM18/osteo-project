<?php  /* template name: Об институте */ get_header(); ?>

    <div class="about-page">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="sidebar">
                            <div class="sidebar-menu">
                                <?
                                $args = array(
                                    'menu' => 2,
                                    'container' => 'false',
                                    'menu_class' => 'sidebar-menu-list'
                                );
                                wp_nav_menu( $args ); ?>
                            </div>
                            <div class="group">
                                <img src="<? bloginfo('template_directory'); ?>/images/group.png" alt="">
                            </div>
                            <div class="subscribe">
                                <h3>Быть в курсе</h3>
                                 <? echo do_shortcode('[contact-form-7 id="502" title="Подписаться на новости сайдбар"]'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="content">
                            <h1><? if(function_exists('h1_title')) h1_title(); ?></h1>
                            
                            <? while(have_posts()){ the_post(); the_content(); } ?>
                        </div>
                        <div class="insta">
                            <h2>Мы в INSTAGRAM</h2>
                            <div class="insta-inner">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12"><img src="<? bloginfo('template_directory'); ?>/images/insta.png" alt=""></div>
                                    <div class="col-md-4 col-sm-6 col-xs-12"><img src="<? bloginfo('template_directory'); ?>/images/insta.png" alt=""></div>
                                    <div class="col-md-4 col-sm-6 col-xs-12"><img src="<? bloginfo('template_directory'); ?>/images/insta.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
