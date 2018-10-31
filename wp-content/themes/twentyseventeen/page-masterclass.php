<?php /* template name: Мастеркласс */ get_header(); ?>


    
    <div class="masterclass-page">
        <h1 class="center-line">
            <? if(function_exists('h1_title')) h1_title(); ?>
        </h1>
        <div class="masterclass-subtitle">
            <? the_field('подзаголовок'); ?>
        </div>
        <div class="masterclass-info">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="mc-img" src="<? echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID)); ?>" alt="">
                        </div>
                        <div class="col-md-6">
                            <div class="masterclass-form">
                                <div class="masterclass-time">
                                    <? the_field('дата_время'); ?>
                                </div>
                                <div class="masterclass-form-inner">
                                    <div class="form-title">
                                        ЗАРЕИСТРИРОВАТЬСЯ
                                    </div>
                                    <div class="form-subtitle">
                                        только живое участие
                                    </div>
                                    <form action="">
                                        <input type="text" placeholder="Имя и Фамилия">
                                        <input type="text" placeholder="Телефон*">
                                        <input type="text" placeholder="E-mail*">
                                        <input type="submit" value="ХОЧУ УЧАСТВОВАТЬ">
                                        <div class="form-subtitle">
                                            только живое участие
                                        </div>
                                        <label class="for-checkbox">
                                            <input type="checkbox" value="Ознакомился и принимаю условия">
                                            <span> Ознакомился и принимаю условия <a href="#">Полиики конфиденциальности</a></span>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $metaMassage = get_field('метамассаж'); ?>
        <div class="meta-massage-block">
            <div class="container">
                <div class="row">
                    <div class="meta-massage">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="meta-massage-img">
                                    <h2 class="center-line"><?=$metaMassage['заголовок']; ?></h2>
                                    <img  src="<?=$metaMassage['изображение']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="meta-massage content p-b-0">
                                    <?=$metaMassage['текст_мета']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $metaV = get_field('метавионика'); ?>
        <div class="about-metav-block">
            <div class="container">
                <div class="row">
                    <div class="about-metav-video">
                        <iframe width="770" height="433" src="https://www.youtube.com/embed/<?=$metaV['видео']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                    <div class="about-metav-text">
                        <h2 class="center-line">
                            <?=$metaV['заголовок']; ?>
                        </h2>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <?=$metaV['текст']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $whatWeDo = get_field('что_будем_делать'); ?>
        <div class="what-we-do-block">
            <div class="container">
                <div class="row">
                    <div class="what-we-do">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="what-we-do-text content">
                                    <h2 class="center-line"><?=$whatWeDo['заголовок']; ?></h2>
                                    <?=$whatWeDo['текст']; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="what-we-do-img">
                                    <img src="<?=$whatWeDo['картинка']; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $host = get_field('кто_проводит'); ?>
        <div class="mc-teacher-block">
            <div class="container">
                <div class="row">
                    <div class="mc-teacher-subtitle">
                        Мастер-класс проводит
                    </div>
                    <h2 class="center-line">
                        <?=$host['имя']; ?>
                    </h2>
                    <div class="mc-teacher">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mc-teacher-img">
                                    <img src="<?=$host['фото']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mc-teacher-info">
                                    <div class="mc-teacher-text content p-b-0">
                                        <?=$host['описание']; ?>
                                    </div>
                                    <div class="mc-teacher-btn btn">
                                        ХОЧУ УЧАСТВОВАТЬ
                                    </div>
                                    <div class="mc-teacher-enter">
                                        Вход свободный для всех желающих, приглашайте своих родственников, друзей 
                                        и знакомых. Главное зарегистрироваться и сделать репост в социальных сетях
                                        <span>Количество мест ограничено</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $diplom = get_field('диплом'); ?>
        <div class="diplom-block">
            <div class="container">
                <div class="row">
                    <h2 class="center-line">
                        <?=$diplom['заголовок']; ?>
                    </h2>
                    <div class="diplom-subtitle"><?=$diplom['подзаголовок']; ?></div>
                    <div class="diplom">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="diplom-img">
                                    <img src="<?=$diplom['изображение']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <div class="diplom-text content p-b-0">
                                    <?=$diplom['текст']; ?>
                                </div>
                            </div>
                            <div class="col-md-offset-3 col-md-6">
                                <div class="diplom-text-after">
                                    <?=$diplom['текст_2']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $program = get_field('программа'); ?>
        <div class="program-block">
            <div class="container">
                <div class="row">
                    <div class="program">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <h2 class="center-line">
                                    Программа курса
                                </h2>
                                <div id="accordion" class="row">
                                    <? foreach($program['программа'] as $programItem){ ?>
                                    <h3 class="padding-offset-5-24"><?=$programItem['заголовок'];?></h3>
                                    <div class="program-item padding-offset-5-24">
                                        <?=$programItem['текст'];?>
                                    </div>
                                    <? } ?>
                                </div>
                                <div class="program-discount padding-offset-5-24">
                                    <?=$program['текст']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mc-photo-block">
            <div class="container">
                <div class="row">
                    <div class="mc-photo">
                        <div class="row">
                            <div class="col-md-7 col-md-offset-5-24">
                                <div class="mc-photo-slider">
                                    <? $gal = get_field('фото'); ?>
                                    <? foreach($gal as $photo){ ?>
                                    <div class="mc-photo-item">
                                        <img src="<? echo kama_thumb_src('src=' . $photo['url'] . '&w=670&h=446'); ?>" alt="">
                                    </div>
                                    <? } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? $discount = get_field('скидка'); ?>
        <div class="gift-block">
            <div class="container">
                <div class="row">
                    <div class="gift">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="gift-inner">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="gift-img">
                                                <img src="<? bloginfo('template_directory'); ?>/images/gift.png" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="gift-title">
                                                <?=$discount['заголовок']; ?>
                                            </div>
                                            <div class="gift-text">
                                                <?=$discount['текст']; ?>
                                            </div>
                                            <div class="gift-btn btn">ОСТАВИТЬ ЗАЯВКУ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-block">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-11">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="contact-info">
                                        <div class="contact-title">
                                            Адрес «Института<br> Остеопатии и Метавитоники»                                 </div>
                                        <div class="contact-adr">
                                            <?=the_field('address', 76); ?>
                                        </div>

                                        <div class="contact-adr-title">
                                            По вопросам обучения <br>и сотрудничества<!-- Адрес Школы <br>“METAVITONICA” -->
                                        </div>
                                        <div class="contact-phone">
                                            <a href="tel:<?php echo preg_replace('/[^0-9\+]/', '', get_field('phone', 76)); ?>"><?=the_field('phone', 76); ?></a>
                                        </div>
                                        <div class="contact-mail">
                                            <a href="mailto:<?=the_field('email', 76); ?>"><?=the_field('email', 76); ?></a>
                                        </div>
                                        <div class="contact-call-us">
                                            <?=the_field('text_collab', 76); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact-map">
                                        <div class="contact-map-title">
                                           Как добраться: 
                                        </div>
                                        <? $scheme = get_field('scheme', 76); ?>
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
            </div>
        </div>
    </div>

<?php get_footer();
