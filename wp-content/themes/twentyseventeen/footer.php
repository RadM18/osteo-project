<?php 
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<div class="footer">
    <div class="container">
        <div class="row">
            <ul class="menu-footer menu-left">
                <li><a href="/kursy/">Все курсы</a></li>
                <li><a href="/ob-institute/">Об институте</a></li>
                <li><a href="/blog/">Статьи</a></li>
                <li><a href="/raspisanie/">Расписание</a></li>
            </ul>
            <div class="footer-logo">
                <img src="<? bloginfo('template_directory'); ?>/images/logo-footer.svg" alt="">
            </div>
            <ul class="menu-footer menu-right">
                <li><a href="#">Партнеры</a></li>
                <li><a href="/registr/">Регистр</a></li>
                <li><a href="/video/">Видео</a></li>
                <li><a href="/kontakty/">Контакты</a></li>
            </ul>
            <div class="clearfix"></div>
            <div class="footer-text">
                Copyright © 2016 НАЗВАНИЕпроекта. All Rights Reserved.<br>
                <a href="#">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</div>
		
<?php wp_footer(); ?>

<script src="<? bloginfo('template_directory'); ?>/js/slick.js"></script>
<script src="<? bloginfo('template_directory'); ?>/js/jquery-ui.min.js"></script>
<script src="<? bloginfo('template_directory'); ?>/js/jquery.maskedinput.min.js"></script>

<div id="tModalForm">
<div class="overlay" onclick="tModalForm.closeAll();"></div>
    <div class="form-box" id="frm_kurs">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2">ЗАПИСАТЬСЯ НА КУРС</div>
        <div>
            <? echo do_shortcode('[contact-form-7 id="417" title="Записаться на курс"]'); ?>
              <div class="checkbox">
                <input type="checkbox"   id="wifi"/>
                <label for="wifi"></label><span class="policy-text"> Ознакомился и принимаю условия <a href="http://institut-osteopatii.ru/politika-konfidencialnosti/">Политики конфиденциальности</a></span>
              </div> 
        </div>

    </div>
    <div class="form-box" id="frm_feed">
        <div class="form-close" onclick="tModalForm.closeAll();"></div>
        <div class="h2">Оставить отзыв</div>
        <div>
            <? echo do_shortcode('[contact-form-7 id="545" title="Оставить отзыв"]'); ?>
              <div class="checkbox">
                <input type="checkbox"   id="wifi"/>
                <label for="wifi"></label><span class="policy-text"> Ознакомился и принимаю условия <a href="http://institut-osteopatii.ru/politika-konfidencialnosti/">Политики конфиденциальности</a></span>
              </div> 
        </div>

    </div>

</div>

                         <!--      БУРГЕР МЕНЮ -->
    <script>
       jQuery(document).ready(function($) {
        $('#burger-menu, .burger__menu').on('click', function () {
             $(this).toggleClass('active');
          $('.burger__menu').toggleClass('actibe-burger-menu');
           $('.all-courses-menu').toggleClass('active-burger');
        });
       });
    </script>

<script type="text/javascript">
        (function($){
            window.tModalForm = {
                overlayBox:'#tModalForm .overlay', formBox:'#tModalForm .form-box',
                show: function(id, flds) {
                    var cs = $(window).scrollTop();var wh = window.innerHeight;var hb = $('#'+id).outerHeight();var po = (parseInt(wh) - parseInt(hb)) / 2;
                    if( po > 0 ) eo = parseInt(cs) + parseInt(po); else eo = parseInt(cs) + 10;
                    $(tModalForm.overlayBox).fadeIn('fast',function(){$('#'+id).animate({'top':eo}, 300);});
                    if( flds ) $.each(flds, function(i,v) {if(i && v) $('#'+i).val(v);});
                    return false;
                },
                closeAll:function() {
                    $(tModalForm.formBox).each(function() {$(this).animate({top:-2400}, 100);});
                    $(tModalForm.overlayBox).fadeOut('fast');

                    return false;
                }
            };
        })(jQuery);
        </script>

<script>
    $ = jQuery.noConflict();
        $(function() {
            $("#accordion").accordion();
        });

        $(function() {
            jQuery("#maps").tabs();
        });
        
        $('.mc-photo-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: true,
            prevArrow: '<div class="arrow prev-arrow"><img src="images/arrow-left-b.svg" alt=""></div>',
            nextArrow: '<div class="arrow next-arrow"><img src="images/arrow-right-b.svg" alt=""></div>',
        });
            $('.big-image-slider').each(function(){
            $(this).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true,

                prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b1.svg" alt=""></div>',
                nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b1.svg" alt=""></div>',
            });
        });
        $('.practice-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: true,
    
            prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b.svg" alt=""></div>',
            nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b.svg" alt=""></div>',
        });
        $('.about-school-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: true,
    
            prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left.svg" alt=""></div>',
            nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right.svg" alt=""></div>',
        });
        
        $( function() {
            $( "#tabs" ).tabs();
          } );
        
        $('.courses-slider').each(function(){
            $(this).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true,

                prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b.svg" alt=""></div>',
                nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b.svg" alt=""></div>',
                        responsive: [
                            {
                              breakpoint: 1024,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                              }
                            },
                            {
                              breakpoint: 650,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            },


                            {
                              breakpoint: 992,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                              }
                            },
                            {
                              breakpoint: 550,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }
                            // You can unslick at a given breakpoint now by adding:
                            // settings: "unslick"
                            // instead of a settings object
                          ]

            });
        });
        
        $('.teachers-slider').each(function(){
            $(this).slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true,

                prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b.svg" alt=""></div>',
                nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b.svg" alt=""></div>',
                                        responsive: [
                            {
                              breakpoint: 1024,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                              }
                            },
                            {
                              breakpoint: 992,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                              }
                            },
                            {
                              breakpoint: 650,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }
                            // You can unslick at a given breakpoint now by adding:
                            // settings: "unslick"
                            // instead of a settings object
                          ]
            });
        });
        
        $('.reviews-slider').each(function(){
            $(this).slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true,

                prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b.svg" alt=""></div>',
                nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b.svg" alt=""></div>',
                    responsive: [
                            {
                              breakpoint: 1024,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                infinite: true,
                                dots: true
                              }
                            },
                            {
                              breakpoint: 800,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                              }
                            },
                            {
                              breakpoint: 650,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            }
                            // You can unslick at a given breakpoint now by adding:
                            // settings: "unslick"
                            // instead of a settings object
                          ]
            });
        });
        
        $('.video-slider').each(function(){
            $(this).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: true,
                dots: true,

                prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b1.svg" alt=""></div>',
                nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b1.svg" alt=""></div>',
            });
        });
        
        function refreshSlick(){
            //jQuery('.products-slider').slick('destroy');
            jQuery('.courses-slider').each(function(){
                $(this).slick('refresh');                    
            });
        }
        jQuery('#tabs ul li a').click(function(){
            setTimeout(refreshSlick, 10);       
        });
    </script>
<script>
$ = jQuery.noConflict();
$('.photo-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: true,
  fade: true,
  asNavFor: '.photo-nav-slider',
  prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b.svg" alt=""></div>',
  nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b.svg" alt=""></div>',
});
$('.photo-nav-slider').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.photo-slider',
  dots: false,
  arrows: true,
  focusOnSelect: true,
  prevArrow: '<div class="arrow prev-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-left-b.svg" alt=""></div>',
  nextArrow: '<div class="arrow next-arrow"><img src="<? bloginfo('template_directory'); ?>/images/arrow-right-b.svg" alt=""></div>',
});
</script>
                                         <!--        МАСКА ДЛЯ ФОРМЫ -->
    <script>
         jQuery(document).ready(function($) {
                   jQuery('.data').mask('99/99/999999');
                    jQuery('.your-tel').mask('+9 (999) 999-99-99');
                    jQuery('.cpf').mask('999.999.999-99');
                    jQuery('.cnpj').mask('99.999.999/9999-99');
                    });

    </script>
</body>
</html>
