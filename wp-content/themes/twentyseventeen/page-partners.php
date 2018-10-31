<?php /* template name: Партнеры */ get_header(); ?>

    <div class="partners-page">
        <div class="container">
            <div class="row">
                <h1 class="center-line"><? if(function_exists('h1_title')) h1_title(); ?></h1>
                <div class="partners-list">
                    <? while(have_posts()) { the_post(); the_content(); } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="video-block course-video-block">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="video">
                                <img src="<? bloginfo('template_directory'); ?>/images/course-video.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-block-wrap">
                                <div class="form-block partners-form">
                                    <h2>СТАТЬ ПАРТНЁРОМ</h2>
                                    <div class="form-block-text">Оставьте заявку на обратный звонок <br>и наш специалист ответит на все ваши вопросы.</div>
                                    <div class="form-block-form">
<!--                                         <input type="email" placeholder="E-mail">
                                        <input type="submit" value="ПОДПИСАТЬСЯ">
                                        <label class="for-checkbox">
                                            <input type="checkbox" value="Ознакомился и принимаю условия">
                                            <span> Ознакомился и принимаю условия <a href="#">Полиики конфиденциальности</a></span>
                                        </label> -->
                                   <? echo do_shortcode('[contact-form-7 id="504" title="Стать партнёром"]'); ?>  
                                       
                                    <div class="checkbox">
                                      <input type="checkbox"   id="wifi"/>
                                      <label for="wifi"></label><span class="policy-text"> Ознакомился и принимаю условия <a href="http://institut-osteopatii.ru/politika-konfidencialnosti/">Политики конфиденциальности</a></span>
                                    </div>   
                            
                                </div>
 

 
                           </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer();
