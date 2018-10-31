<?php /* template name: Регистр (вн) */ get_header(); ?>

<div class="registr-vn-page">
    <div class="container">
        <div class="row">
            <div class="student">
                <div class="row">
                    <div class="col-md-5">
                        <div class="student-image">
                            <img src="<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($post->ID)) . '&w=470&h=304'); ?>" alt="">
                            <div class="student-call" onClick="tModalForm.show('frm_kurs');">
                                Связаться
                            </div>
                        </div>
                        <div class="student-title">
                            <h1><? if(function_exists('h1_title')) h1_title(); ?></h1>
                        </div>
                        <div class="student-text">
                            <? while(have_posts()) { the_post(); the_content(); } ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <? $courses = get_field('курсы'); ?>
                        <div class="student-courses">
                            <? foreach($courses as $course){ ?>
                                <div class="student-course clearfix">
                                    <div class="student-course-title">
                                        <span>Название курса</span>
                                        <?=$course['название_курса']; ?>
                                    </div>
                                    <div class="student-course-date">
                                        <span>Дата прохождения</span>
                                        <?=$course['дата_прохождения']; ?>
                                    </div>
                                    <div class="student-course-result">
                                        <span>Результат прохождения курса</span>
                                        <?=$course['результат_прохождения']; ?>
                                    </div>
                                    <div class="student-course-diplom">
                                        <span>Диплом</span>
                                        <?=$course['диплом']; ?>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                        <div class="teacher-col">
                            <? 
                            $teachers = get_field('teacher_col'); 
                            foreach($teachers as $teacher){ ?>
                                <div class="teacher-col-item">
                                    <div class="teacher-col-photo">
                                        <img src="<? the_field('small_photo', $teacher); ?>" alt="">
                                    </div>
                                    <div class="teacher-col-name">
                                        <a href="<? echo get_permalink($teacher); ?>"><? echo get_the_title($teacher); ?></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="teacher-col-text">
                                        <? echo get_the_content($teacher); ?>
                                    </div>
                                </div>
                                
                            <? } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();
