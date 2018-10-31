<?php  /* template name: Расписание */ get_header(); ?>

<div class="schedule-page">
        <div class="container">
            <div class="row">
                <div class="schedule-page-title">
                    <h1>Расписание</h1>
                </div>
                <div class="schedule">
                    <div class="schedule-bar">
                        <div class="prev-year year year-switch" data="12-2017"><img src="<? bloginfo('template_directory'); ?>/images/angle-right.svg" alt=""> <span>2017</span></div>
                        <div class="prev-month month month-switch" data="09-2018"><img src="<? bloginfo('template_directory'); ?>/images/angle-right.svg" alt=""> <span>СЕНТЯБРЬ</span></div>
                        <div class="curr-month month-switch" data="10-2018"><span>Октябрь</span></div>
                        <div class="next-year year year-switch" data="01-2019"><span>2019</span> <img src="<? bloginfo('template_directory'); ?>/images/angle-left.svg" alt=""></div>
                        <div class="next-month month month-switch" data="11-2018"><span>НОЯБРЬ</span> <img src="<? bloginfo('template_directory'); ?>/images/angle-left.svg" alt=""></div>
                    </div>
                    
                    <div class="tips clearfix">
                        <div class="color-items">
                            <div class="color-item"><div class="color-square yellow"></div>МЕТАМАССАЖ</div>
                            <div class="color-item"><div class="color-square orange"></div>МЕТАГИМНАСТИКА</div>
                            <div class="color-item"><div class="color-square purple"></div>ФЕЙСПЛАСТИКА</div>
                            <div class="color-item"><div class="color-square pink"></div>ПОСТ ДИПЛОМНЫЙ</div>
                            <div class="color-item"><div class="color-square blue"></div>ДОПОЛНИТЕЛЬНЫЙ</div>
                        </div>
                        <div class="courses-link">
                            <a href="<? echo get_permalink(223); ?>">ВСЕ КУРСЫ</a>
                        </div>
                    </div>
                    <? $schedule = get_field('расписание', 'options'); 
                    $arrayIds = array(); ?>
                    
                    <div class="courses-filter">
                        <span>Расписание курса на год:</span>
                        <select name="courses" id="courses">
                        <? foreach($schedule as $courseItem){ ?>
                            <? $course = $courseItem['курс']; 
                            if(!is_int(array_search($course, $arrayIds))){    
                                array_push($arrayIds, $course); ?>
                                <option value="<?=$course; ?>"><? echo get_the_title($course); ?></option>
                            <? } ?>
                        <? } ?>
                        </select>
                        <div class="show-courses">
                            ПОКАЗАТЬ
                        </div>
                    </div>
                        <div class="filter-result">
                            <h2>Восстановление молодости "Faceplastic"</h2>
                            <div class="go-back">РАСПИСАНИЕ НА МЕСЯЦ</div>
                            <div class="row clearfix">
                                <div class="col-lg-10 col-md-10  col-sm-12">
                                    
                                </div>
                            </div>
                        </div>
                    
                    <!-- ИЮЛЬ 2018 -->
                       
                        <div class="schedule-table" curr-date="07-2018">
                        
                                <div class="day-of-week cell">Понедельник</div>
                                <div class="day-of-week cell">Вторник</div>
                                <div class="day-of-week cell">Среда</div>
                                <div class="day-of-week cell">Четверг</div>
                                <div class="day-of-week cell">Пятница</div>
                                <div class="day-of-week cell">Суббота</div>
                                <div class="day-of-week cell">Воскресенье</div>
                                
                                <div class="cell">
                                    <div class="date">25</div>
                                    
                                    
                                </div>
                                <div class="cell">
                                    <div class="date">26</div>
                                </div>
                                <div class="cell">
                                    <div class="date">27</div>
                                </div>
                                <div class="cell">
                                    <div class="date">28</div>
                                </div>
                                <div class="cell">
                                    <div class="date">29</div>
                                </div>
                                <div class="cell">
                                    <div class="date">30</div>
                                    
                                </div>
                                <div class="cell">
                                    <div class="date">1</div>
                                </div>
                                <div class="cell">
                                    <div class="date">2</div>
                                </div>
                                <div class="cell">
                                    <div class="date">3</div>
                                </div>
                                <div class="cell">
                                    <div class="date">4</div>
                                    
                                </div>
                                <div class="cell">
                                    <div class="date">5</div>
                                </div>
                                <div class="cell">
                                    <div class="date">6</div>
                                </div>
                                <div class="cell">
                                    <div class="date">7</div>
                                </div>
                                <div class="cell">
                                    <div class="date">8</div>
                                </div>
                                <div class="cell">
                                    <div class="date">9</div>
                                </div>
                                <div class="cell">
                                    <div class="date">10</div>
                                </div>
                                <div class="cell">
                                    <div class="date">11</div>
                                </div>
                                <div class="cell">
                                    <div class="date">12</div>
                                </div>
                                <div class="cell">
                                    <div class="date">13</div>
                                </div>
                                <div class="cell">
                                    <div class="date">14</div>
                                </div>
                                <div class="cell">
                                    <div class="date">15</div>
                                </div>
                                <div class="cell">
                                    <div class="date">16</div>
                                </div>
                                <div class="cell">
                                    <div class="date">17</div>
                                </div>
                                <div class="cell">
                                    <div class="date">18</div>
                                </div>
                                <div class="cell">
                                    <div class="date">19</div>
                                </div>
                                <div class="cell">
                                    <div class="date">20</div>
                                </div>
                                <div class="cell">
                                    <div class="date">21</div>
                                </div>
                                <div class="cell">
                                    <div class="date">22</div>
                                </div>
                                <div class="cell">
                                    <div class="date">23</div>
                                </div>
                                <div class="cell">
                                    <div class="date">24</div>
                                </div>
                                <div class="cell">
                                    <div class="date">25</div>
                                </div>
                                <div class="cell">
                                    <div class="date">26</div>
                                </div>
                                <div class="cell">
                                    <div class="date">27</div>
                                </div>
                                <div class="cell">
                                    <div class="date">28</div>
                                </div>
                                <div class="cell">
                                    <div class="date">29</div>
                                </div>
                                <div class="cell">
                                    <div class="date">30</div>
                                </div>
                                <div class="cell">
                                    <div class="date">31</div>
                                </div>
                                <div class="cell">
                                    <div class="date">1</div>
                                </div>
                                <div class="cell">
                                    <div class="date">2</div>
                                </div>
                                <div class="cell">
                                    <div class="date">3</div>
                                </div>
                                <div class="cell">
                                    <div class="date">4</div>
                                </div>
                                <div class="cell">
                                    <div class="date">5</div>
                                </div>
                                
                            
                        </div>
                    <!-- /ИЮЛЬ 2018 -->
                    
                    <!-- АВГУСТ 2018 -->
                    
                        <div class="schedule-table" curr-date="08-2018">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            


                        </div>
                    <!-- /АВГУСТ 2018 -->
                    <!-- СЕНТЯБРЬ 2018 -->
                    
                        <div class="schedule-table" curr-date="09-2018">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            
                            


                        </div>
                    
                    <!-- /СЕНТЯБРЬ 2018 -->
                    <!-- ОКТЯБРЬ 2018 -->
                    
                        <div class="schedule-table show" curr-date="10-2018">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            
                            


                        </div>
                    
                    <!-- /ОКТЯБРЬ 2018 -->
                    <!-- НОЯБРЬ 2018 -->
                    
                        <div class="schedule-table" curr-date="11-2018">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            
                            
                            


                        </div>
                    
                    <!-- /НОЯБРЬ 2018 -->
                    <!-- ДЕКАБРЬ 2018 -->
                    
                        <div class="schedule-table" curr-date="12-2018">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            
                            
                            


                        </div>
                    
                    <!-- /ДЕКАБРЬ 2018 -->
                    
                    <!-- ЯНВАРЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="01-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            


                        </div>
                    
                    <!-- /ЯНВАРЬ 2019 -->
                    <!-- ФЕВРАЛЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="02-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            


                        </div>
                    
                    <!-- /ФЕВРАЛЬ 2019 -->
                    <!-- МАРТ 2019 -->
                    
                        <div class="schedule-table" curr-date="03-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            


                        </div>
                    
                    <!-- /МАРТ 2019 -->
                    <!-- АПРЕЛЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="04-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>


                        </div>
                    
                    <!-- /АПРЕЛЬ 2019 -->
                    <!-- МАЙ 2019 -->
                    
                        <div class="schedule-table" curr-date="05-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>

                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            


                        </div>
                    
                    <!-- /МАЙ 2019 -->
                    <!-- ИЮНЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="06-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>    
                        </div>
                    
                    <!-- /ИЮНЬ 2019 -->
                    <!-- ИЮНЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="06-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>    
                        </div>
                    
                    <!-- /ИЮНЬ 2019 -->
                    <!-- ИЮЛЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="07-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>  
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>  
                        </div>
                    
                    <!-- /ИЮЛЬ 2019 -->
                    <!-- АВГУСТ 2019 -->
                    
                        <div class="schedule-table" curr-date="08-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>  
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            
                        </div>
                    
                    <!-- /АВГУСТ 2019 -->
                    <!-- СЕНТЯБРЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="09-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>  
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            
                        </div>
                    
                    <!-- /СЕНТЯБРЬ 2019 -->
                    <!-- ОКТЯБРЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="10-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>  
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            
                        </div>
                    
                    <!-- /ОКТЯБРЬ 2019 -->
                    <!-- НОЯБРЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="11-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            
                        </div>
                    
                    <!-- /НОЯБРЬ 2019 -->
                    <!-- ДЕКАБРЬ 2019 -->
                    
                        <div class="schedule-table" curr-date="12-2019">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            
                            
                        </div>
                    
                    <!-- /ДЕКАБРЬ 2019 -->
                    <!-- ЯНВАРЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="01-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            
                            
                            
                        </div>
                    
                    <!-- /ЯНВАРЬ 2020 -->
                    <!-- ФЕВРАЛЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="02-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            
                            
                        </div>
                    
                    <!-- /ФЕВРАЛЬ 2020 -->
                    <!-- МАРТ 2020 -->
                    
                        <div class="schedule-table " curr-date="03-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            
                            
                            
                        </div>
                    
                    <!-- /МАРТ 2020 -->
                    <!-- АПРЕЛЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="04-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            
                            
                            
                            
                        </div>
                    
                    <!-- /АПРЕЛЬ 2020 -->
                    <!-- МАЙ 2020 -->
                    
                        <div class="schedule-table" curr-date="05-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            
                            
                            
                            
                        </div>
                    
                    <!-- /МАЙ 2020 -->
                    <!-- ИЮНЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="06-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            
                            
                            
                        </div>
                    
                    <!-- /ИЮНЬ 2020 -->
                    <!-- ИЮЛЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="07-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            
                        </div>
                    
                    <!-- /ИЮЛЬ 2020 -->
                    <!-- АВГУСТ 2020 -->
                    
                        <div class="schedule-table" curr-date="08-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            
                        </div>
                    
                    <!-- /АВГУСТ 2020 -->
                    <!-- СЕНТЯБРЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="09-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                           
                            
                        </div>
                    
                    <!-- /СЕНТЯБРЬ 2020 -->
                    <!-- ОКТЯБРЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="10-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            
                            
                        </div>
                    
                    <!-- /ОКТЯБРЬ 2020 -->
                    <!-- НОЯБРЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="11-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            
                            
                        </div>
                    
                    <!-- /НОЯБРЬ 2020 -->
                    <!-- НОЯБРЬ 2020 -->
                    
                        <div class="schedule-table" curr-date="12-2020">
                        
                            <div class="day-of-week cell">Понедельник</div>
                            <div class="day-of-week cell">Вторник</div>
                            <div class="day-of-week cell">Среда</div>
                            <div class="day-of-week cell">Четверг</div>
                            <div class="day-of-week cell">Пятница</div>
                            <div class="day-of-week cell">Суббота</div>
                            <div class="day-of-week cell">Воскресенье</div>
                            
                            
                            
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            <div class="cell">
                                <div class="date">4</div>
                            </div>
                            <div class="cell">
                                <div class="date">5</div>
                            </div>
                            <div class="cell">
                                <div class="date">6</div>
                            </div>
                            <div class="cell">
                                <div class="date">7</div>
                            </div>
                            <div class="cell">
                                <div class="date">8</div>
                            </div>
                            <div class="cell">
                                <div class="date">9</div>
                            </div>
                            <div class="cell">
                                <div class="date">10</div>
                            </div>
                            <div class="cell">
                                <div class="date">11</div>
                            </div>
                            <div class="cell">
                                <div class="date">12</div>
                            </div>
                            <div class="cell">
                                <div class="date">13</div>
                            </div>
                            <div class="cell">
                                <div class="date">14</div>
                            </div>
                            <div class="cell">
                                <div class="date">15</div>
                            </div>
                            <div class="cell">
                                <div class="date">16</div>
                            </div>
                            <div class="cell">
                                <div class="date">17</div>
                            </div>
                            <div class="cell">
                                <div class="date">18</div>
                            </div>
                            <div class="cell">
                                <div class="date">19</div>
                            </div>
                            <div class="cell">
                                <div class="date">20</div>
                            </div>
                            <div class="cell">
                                <div class="date">21</div>
                            </div>
                            <div class="cell">
                                <div class="date">22</div>
                            </div>
                            <div class="cell">
                                <div class="date">23</div>
                            </div>
                            <div class="cell">
                                <div class="date">24</div>
                            </div>
                            <div class="cell">
                                <div class="date">25</div>
                            </div>
                            <div class="cell">
                                <div class="date">26</div>
                            </div>
                            <div class="cell">
                                <div class="date">27</div>
                            </div>
                            <div class="cell">
                                <div class="date">28</div>
                            </div>
                            <div class="cell">
                                <div class="date">29</div>
                            </div>
                            <div class="cell">
                                <div class="date">30</div>
                            </div>
                            <div class="cell">
                                <div class="date">31</div>
                            </div>
                            <div class="cell">
                                <div class="date">1</div>
                            </div>
                            <div class="cell">
                                <div class="date">2</div>
                            </div>
                            <div class="cell">
                                <div class="date">3</div>
                            </div>
                            
                            
                            
                        </div>
                    
                    <!-- /НОЯБРЬ 2020 -->
                    </div>
                </div>
            </div>
        </div>
        <script>
            $ = jQuery.noConflict();
            var dates = ['06-2018', '07-2018', '08-2018', '09-2018', '10-2018', '11-2018', '12-2018', '01-2019', '02-2019', '03-2019', '04-2019', '05-2019', '06-2019', '07-2019', '08-2019', '09-2019', '10-2019', '11-2019', '12-2019', '01-2020', '02-2020', '03-2020', '04-2020', '05-2020', '06-2020', '07-2020', '08-2020', '09-2020', '10-2020', '11-2020', '12-2020'];
            
            function rebuildDates(){
                
                $('.month-switch').each(function(){
                    currVal = $(this).attr('data');
                    currValMonth = currVal.substr(0,2);
                    console.log(currValMonth);
                    switch(currValMonth){
                        case '01': $(this).children('span').text('Январь'); break;
                        case '02': $(this).children('span').text('Февраль'); break;
                        case '03': $(this).children('span').text('Март'); break;
                        case '04': $(this).children('span').text('Апрель'); break;
                        case '05': $(this).children('span').text('Май'); break;
                        case '06': $(this).children('span').text('Июнь'); break;
                        case '07': $(this).children('span').text('Июль'); break;
                        case '08': $(this).children('span').text('Август'); break;
                        case '09': $(this).children('span').text('Сентябрь'); break;
                        case '10': $(this).children('span').text('Октябрь'); break;
                        case '11': $(this).children('span').text('Ноябрь'); break;
                        case '12': $(this).children('span').text('Декабрь'); break;
                    }
                    
                });
                
                $('.year-switch').each(function(){
                    currValY = $(this).attr('data');
                    currValYear = currValY.substr(-4);
                    console.log(currValYear);
                    switch(currValYear){
                        case '2018': $(this).children('span').text('2018'); break;
                        case '2019': $(this).children('span').text('2019'); break;
                        case '2020': $(this).children('span').text('2020'); break;
                        
                    }
                });
                
            };
            
            
            $('.next-year').click(function(){
                var nextYear = $(this).attr('data');
                var nextYearIndex = dates.indexOf(nextYear);
                if( nextYearIndex > -1){
                    $('.curr-month').attr('data', dates[nextYearIndex]);
                    
                    $('.schedule-table').removeClass('show');
                    $('.schedule-table[curr-date="'+ dates[nextYearIndex] +'"]').addClass('show');
                    
                    $('.prev-month').attr('data', dates[nextYearIndex - 12]);
                    $('.prev-year').attr('data', dates[nextYearIndex - 12]);
                    $('.next-month').attr('data', dates[nextYearIndex + 1]);
                    $(this).attr('data', dates[nextYearIndex + 12]);
                }
                
                rebuildDates();
            });
            
            $('.prev-year').click(function(){
                var prevYear = $(this).attr('data');
                var prevYearIndex = dates.indexOf(prevYear);
                console.log(prevYearIndex);
                if( prevYearIndex > -1){
                    $('.curr-month').attr('data', dates[prevYearIndex - 12]);
                    
                    $('.schedule-table').removeClass('show');
                    $('.schedule-table[curr-date="'+ dates[prevYearIndex] +'"]').addClass('show');
                    
                    $('.prev-month').attr('data', dates[prevYearIndex - 13]);
                    $('.prev-year').attr('data', dates[prevYearIndex - 13]);
                    $('.next-month').attr('data', dates[prevYearIndex + 1]);
                    $(this).attr('data', dates[prevYearIndex - 12]);
                }
                rebuildDates();
            });
            
            $('.prev-month').click(function(){
                var currMonth = $('.curr-month').attr('data');
                var currMonthIndex = dates.indexOf(currMonth);
                
                $('.curr-month').attr('data', dates[currMonthIndex - 1]);
                
                $('.schedule-table').removeClass('show');
                $('.schedule-table[curr-date="'+ dates[currMonthIndex - 1] +'"]').addClass('show');
                
                $('.prev-month').attr('data', dates[currMonthIndex - 2]);
                $('.next-month').attr('data', dates[currMonthIndex]);
                
                if( currMonth == '01-2019'){
                    $('.next-year').attr('data', dates[currMonthIndex]);
                }
                
                if( currMonth == '01-2020'){
                    $('.next-year').attr('data', dates[currMonthIndex]);
                }
                rebuildDates();
                
             });
            
             $('.next-month').click(function(){
                var currMonth = $('.curr-month').attr('data');
                var currMonthIndex = dates.indexOf(currMonth);
                
                $('.curr-month').attr('data', dates[currMonthIndex + 1]);
                 
                $('.schedule-table').removeClass('show');
                $('.schedule-table[curr-date="'+ dates[currMonthIndex + 1] +'"]').addClass('show');
                 
                $('.prev-month').attr('data', dates[currMonthIndex]);
                $('.next-month').attr('data', dates[currMonthIndex + 2]);
                
                if( currMonth == '12-2018'){
                    $('.prev-year').attr('data', '01-2018');
                    $('.next-year').attr('data', '01-2020');
                }
                
                if( currMonth == '12-2019'){
                    $('.prev-year').attr('data', '01-2019');
                }
                
                rebuildDates();
              });
            
            
            
            $('.schedule-table').each(function(){
                var flag = 0;
                var flagUp = 0;
                $(this).find('.cell').each(function(){
                    var currCellMonthYear = $(this).parent().attr('curr-date');
                    currCellMonthYear = currCellMonthYear.split('-');
                    currCellMonth = currCellMonthYear[0];
                    currCellYear = currCellMonthYear[1];

                    var currCellDay = $(this).find('.date').text();
                    var prevCellDay = $(this).prev().find('.date').text();
                    if(flag == 0 && currCellDay != '1'){
                        currCellMonth = currCellMonth - 1 + '';
                        console.log(currCellMonth.length);
                        if(currCellMonth.length == 1){
                            currCellMonth = '0' + currCellMonth;
                        }
                    } else {
//                        if((flag == 1 && parseInt(prevCellDay) > parseInt(currCellDay)) || flag == 2){
                        if((currCellDay == '1' && flag == 1) || flagUp == 2){
                            currCellMonth = parseInt(currCellMonth) + 1;
                            flagUp = 2;
                        }
                        flag = 1;
                    }
                    
                    
                    
                       
                    $(this).attr('curr-cell-date', currCellDay + '-' +currCellMonth + '-' + currCellYear);
                });
            });
            
            var courses = [];
            
            console.log(courses);
            
            <? $schedule = get_field('расписание', 'options'); 
            foreach($schedule as $k=>$courseItem){ ?>
                <? $course = $courseItem['курс']; ?>
                var course = '<div class="schedule-courses-item" course-id="<?=$course;?>" style="background-color: ">Восстановление мо…    <div class="schedule-courses-item-info"><div class="courses-slide"><a href="<? echo get_permalink($course); ?>"><div class="courses-title"><? if(get_field('h1', $course)) { the_field('h1', $course); } else { echo get_the_title($course); } ?></div></a><div class="courses-text"><? the_field('описание_курса', $course); ?></div><div class="courses-teachers"><? $courseProfs = get_field('преподаватели', $course); ?><div>Преподаватели:</div><? foreach($courseProfs as $courseProf){ ?><span><a href="<? echo get_permalink($courseProf); ?>"><? if(get_field('h1',$courseProf)) { the_field('h1',$courseProf); } else { echo get_the_title($courseProf); } ?></a></span><? } ?></div><div class="courses-length"><img src="<? the_field('иконка', $course); ?>" alt=""><span><? the_field('тип_курса', $course); ?></span></div><? $coursePrice = get_field('стоимость', $course); ?><div class="courses-price"><? echo $coursePrice[0]['цена'] . ' ₽'; ?></div><div class="clearfix"></div><div class="courses-date"><? the_field('дата', $course); ?></div><div class="courses-time"><? the_field('время', $course); ?></div><div class="clearfix"></div><div class="all-course-a"><img src="<? bloginfo('template_directory'); ?>/images/calendar-course.png" alt="" /><span><span class="show-course-schedule">Расписание всего курса</span></span></div><div class="clearfix"></div></div></div></div>';

                // Добавил 05-10-18 <div class="all-course-a"><img src="<? bloginfo('template_directory'); ?>/images/calendar-course.png" alt="" /><span><a href="">Расписание всего курса</a></span></div>

                $('.cell[curr-cell-date="<?=$courseItem['дата']?>"]').append(course);
            
                courses[<?=$k;?>] = {
                    id : "<?=$course;?>",
                    link : "<? echo get_permalink($course);?>",
                    title : "<? if(get_field('h1', $course)) { the_field('h1', $course); } else { echo get_the_title($course); } ?>",
                    duration : "<? if(get_field('длительность', $course)) { the_field('длительность', $course); } ?>",
                    time : "<? if(get_field('время', $course)) { the_field('время', $course); } ?>",
                    profs : "<? $courseProfs = get_field('преподаватели', $course); $profCount = count($courseProfs) - 3; foreach($courseProfs as $profIter=>$courseProf){ if($profIter < 3) { echo '<span><a href=\"' . get_permalink($courseProf) . '\">' . get_the_title($courseProf) . '</a></span>'; } } echo '<span> +'. $profCount . '</span>' ?>"
                };
            
            <? } ?>
             
            console.log(courses);
 
            $('.show-courses').click(function(){
                var selectedCourse = $('#courses').val();
                console.log(selectedCourse);
                $('.filter-result').show();
                $('.schedule-table.show').removeClass('show').addClass('inactive');
                $('.filter-item').remove();
                for(var i = 0; i < courses.length; i++){
                    if(courses[i]["id"] == selectedCourse){
                        filterItem = '<div class="filter-item clearfix"><div class="filter-course-title"><a href="' + courses[i]["link"] + '">' + courses[i]["title"] + '</a></div><div class="filter-course-profs">' + courses[i]["profs"] + '</div><div class="filter-course-date">Дата обучения: ' + courses[i]["duration"] + courses[i]["time"] + '</div></div>';
                        $('.filter-result .col-md-10').append(filterItem);
                    }
                }
                $('.filter-result .go-back').click(function(){
                    $('.schedule-table.inactive').removeClass('inactive').addClass('show');
                    $('.filter-result').hide();
                });
            });
            
            $('.show-course-schedule').click(function(){
                var selectedCourse = $(this).closest('.schedule-courses-item').attr('course-id');
                console.log(selectedCourse);
                $('.filter-result').show();
                $('.schedule-table.show').removeClass('show').addClass('inactive');
                $('.filter-item').remove();
                for(var i = 0; i < courses.length; i++){
                    if(courses[i]["id"] == selectedCourse){
                        filterItem = '<div class="filter-item clearfix"><div class="filter-course-title"><a href="' + courses[i]["link"] + '">' + courses[i]["title"] + '</a></div><div class="filter-course-profs">' + courses[i]["profs"] + '</div><div class="filter-course-date">Дата обучения: ' + courses[i]["duration"] + courses[i]["time"] + '</div></div>';
                        $('.filter-result .col-md-10').append(filterItem);
                    }
                }
                $('.filter-result .go-back').click(function(){
                    $('.schedule-table.inactive').removeClass('inactive').addClass('show');
                    $('.filter-result').hide();
                });
            });
            
        </script>        
        
         

<?php get_footer();
