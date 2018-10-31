<?php /* template name: Контакты */ get_header(); ?>

    <div class="contact-page">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-offset-1 col-md-11">
                    <div class="row">

                        <h1>Контакты</h1>

                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-adr-title">
                                    По вопросам обучения <br>и сотрудничества
                                </div>
                                <div class="contact-phone">
                                    <a href="tel:<?php echo preg_replace('/[^0-9\+]/', '', get_field('phone')); ?>"><?=the_field('phone'); ?></a>
                                </div>
                                <div class="contact-mail">
                                    <a href="mailto:<?=the_field('email'); ?>"><?=the_field('email'); ?></a>
                                </div>
                                <div class="contact-title">
                                    Адрес «Института<br> Остеопатии и Метавитоники»                                 </div>
                                <div class="contact-adr">
                                    <?=the_field('address'); ?>
                                </div>


                                <div class="contact-call-us">
                                    <?=the_field('text_collab'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-map">
                                <div class="contact-map-title">
                                   Как добраться: 
                                </div>
                                <? $scheme = get_field('scheme'); ?>
                                <div id="maps">
                                    <ul>
                                        <? foreach($scheme as $k=>$schemeItem){ ?>
                                        <li><a href="#tabs-<?=$k+1;?>"><?=$schemeItem['metro'] ?></a></li>
                                        <? } ?>
                                    </ul>
                                    <? foreach($scheme as $k=>$schemeItem){ ?>
                                    <div id="tabs-<?=$k+1;?>">
                                        <?=$schemeItem['scheme_map'] ?>
                                    </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
            <div class="row row-tr-place">
                <h3><? the_field('heading'); ?></h3>
                <? $blocks = get_field('blocks'); 
                foreach($blocks as $block){ ?>
                <div class="col-md-6">
                    <img src="<? echo kama_thumb_src('src=' . $block['photo'] . '&w=555&h=324'); ?>" alt="">
                    <p><?=$block['text'] ?></p>
                </div>
                <? } ?>


            </div>
    </div>
</div>
<script>
  jQuery( function() {
    jQuery( "#maps" ).tabs();
  } );
  </script>

<?php get_footer();
