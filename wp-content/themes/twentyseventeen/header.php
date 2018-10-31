<?php 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/slick.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/slick-theme.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/style.css">
<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700" rel="stylesheet">
<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?
    $phone1 = get_field('телефон_1', 'options');  
    $phone2 = get_field('телефон_2', 'options');  
    $worktime = get_field('время_работы', 'options'); 
    $yt = get_field('youtube', 'options'); 
    $in = get_field('instagram', 'options'); 
    $vk = get_field('vk', 'options'); 
    $fb = get_field('facebook', 'options'); 
?>

<div class="header">
        <div class="top-line">
            <div class="container">
                <div class="row">
                <div class="row">
                    <div class="col-md-2">
                        <div class="logo col-sm-12 col-xs-12">
                            <a href="/">
                                <img src="<? bloginfo('template_directory'); ?>/images/logo.svg" alt="">
                            </a>
                            <div class="phones">
                                <span><a href="tel:<?php echo preg_replace('/[^0-9\+]/', '', $phone1); ?>"><?=$phone1; ?></a></span>
                                <span><a href="tel:<?php echo preg_replace('/[^0-9\+]/', '', $phone2); ?>"><?=$phone2; ?></a></span>
                            </div>
                            <div class="worktime">
                                <?=$worktime;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-12 col-xs-12">
                        <div class="top-menu">
                            <? echo wp_nav_menu('menu=5&menu_class=top-line-menu&container=false&echo=false'); ?>
                        </div>
                        <div class="social">
                            <? if($yt) { ?>
                            <div class="social-item"><a href="<?=$yt;?>"><img src="<? bloginfo('template_directory'); ?>/images/youtube.svg" alt=""></a></div>
                            <? } ?>
                            <? if($vk) { ?>
                            <div class="social-item"><a href="<?=$vk;?>"><img src="<? bloginfo('template_directory'); ?>/images/vk.svg" alt=""></a></div>
                            <? } ?>
                            <? if($fb) { ?>
                            <div class="social-item"><a href="<?=$fb; ?>"><img src="<? bloginfo('template_directory'); ?>/images/facebook.svg" alt=""></a></div>
                            <? } ?>
                            <? if($in) { ?>
                            <div class="social-item"><a href="<?=$in; ?>"><img src="<? bloginfo('template_directory'); ?>/images/instagram.svg" alt=""></a></div>
                            <? } ?>
                        </div>
                        <div class="login">
                            <a href="#">
                                <img src="<? bloginfo('template_directory'); ?>/images/user.svg" alt="">
                                <span>ВХОД</span>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="menu-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        
                    </div>
                    <div class="col-md-10 col-sm-12 box-all-courses">
                        <div class="all-courses">
                            
                            <div id="burger-menu">
                                <span></span>
                            </div>
                            <span><a href="<? echo get_permalink(223); ?>">Все курсы </a></span>
                                
                            <div class="all-courses-menu">
                                <div class="row clearfix">
                                <? $cols = get_field('колонки', 'options'); ?>
                                <? foreach($cols as $col){ ?>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <? foreach($col['группа'] as $group){ ?>
                                            <div class="courses-group">
                                                <div class="courses-group-title">
                                                    <?=$group['название_группы']; ?>
                                                </div>
                                                <div class="courses-group-list">
                                                    <ul>
                                                    <? foreach($group['страницы'] as $coursesList){ ?>
                                                        <li><a href="<? echo get_permalink($coursesList); ?>"><? echo get_the_title($coursesList); ?></a></li>
                                                    <? } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                <? } ?>
                                </div>
                            </div>
                        </div>
                        <div class="menu menu-hid">
                            <? echo wp_nav_menu('menu=6&menu_id=menu-verxnee-menyu2&menu_class=menu-header-bottom&container=menu-verxnee-menyu2-container&echo=false'); ?>
                        </div>
                        <div class="wrap-mpbile">
                            <div class="social">
                                <? if($yt) { ?>
                                <div class="social-item"><a href="<?=$yt;?>"><img src="<? bloginfo('template_directory'); ?>/images/youtube.svg" alt=""></a></div>
                                <? } ?>
                                <? if($vk) { ?>
                                <div class="social-item"><a href="<?=$vk;?>"><img src="<? bloginfo('template_directory'); ?>/images/vk.svg" alt=""></a></div>
                                <? } ?>
                                <? if($fb) { ?>
                                <div class="social-item"><a href="<?=$fb; ?>"><img src="<? bloginfo('template_directory'); ?>/images/facebook.svg" alt=""></a></div>
                                <? } ?>
                                <? if($in) { ?>
                                <div class="social-item"><a href="<?=$in; ?>"><img src="<? bloginfo('template_directory'); ?>/images/instagram.svg" alt=""></a></div>
                                <? } ?>
                            </div>
                            <div class="login">
                                <a href="#">
                                    <img src="<? bloginfo('template_directory'); ?>/images/user.svg" alt="">
                                    <span>ВХОД</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="breadcrumbs-inner">
                    <? if(function_exists('tBreadcrumbs')) { tBreadcrumbs(); } ?>
                </div>
            </div>
        </div>
    </div>
</div>