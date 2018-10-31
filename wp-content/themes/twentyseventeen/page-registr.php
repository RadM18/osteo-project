<?php /* template name: Регистр */ get_header(); ?>
    
    
    <div class="registr-page">
        <div class="container">
            <div class="row">
                <div class="content">
                    <h1>
                        Регистр
                    </h1>
                    <div class="registr-info">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <img src="<? bloginfo('template_directory'); ?>/images/regist.png" alt="">
                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <div class="registr-text">
                                    <p>МЕТАВИТОНИКА (meta - между, следование за чем либо, переход к чему либо; vitonica - жизненная сила, тонус) - современная оздоровительная система, рассматривающая человека единым связанным динамически подвижным организмом, где структура тела, метаболизм, эмоции, энергоинформационная сфера тесно переплетены и влияют друг на друга. </p>
                                    <p>Метавитоника имеет фундаментальный научный подход, опирается на знания топографической анатомии, законов биомеханики, физиологии организма, базируется на последних научных разработках российских и зарубежных ученых, использует опыт восточного целостного подхода к здоровью, а в коррекции применяет остеопатические принципы бережной работы с телом. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? $tabs = get_field('вкладки'); ?>
                    <div class="registr-block">
                        <div class="container">
                            <div class="row">
                                <h2 class="center-line">Специалисты</h2>
                                <div id="tabs">
                                    <ul class="link-list">
                                        <? foreach($tabs as $k=>$tab){ ?>
                                            <li><a href="#tabs-<?=$k; ?>"><?=$tab['название'];?></a></li>
                                        <? } ?>
                                    </ul>
                                    <? foreach($tabs as $k=>$tab){ ?>
                                    <div id="tabs-<?=$k; ?>" index="<?=$k; ?>" class="registr-tab">
                                        <div class="filter-block">
                                            <span>
                                                Поиск специалиста по параметрам:
                                            </span>
                                            <form action="" class="filter-form">
                                                <label>
                                                    <select class="filter-item-reg" name="city">
                                                        <option value="" disabled selected>Город</option>
                                                    </select>
                                                </label>
                                                <label>
                                                    <select class="filter-item-reg" name="status">
                                                        <option value="">Статус специалиста</option>
                                                        <option value="Слушатель">Слушатель</option>
                                                        <option value="Студент">Студент</option>
                                                        <option value="Специалист">Специалист</option>
                                                        <option value="Помощник">Помощник</option>
                                                        <option value="Ассистент">Ассистент</option>
                                                        <option value="Старший ассистент">Старший ассистент</option>
                                                        <option value="Преподаватель">Преподаватель</option>
                                                        <option value="Мастер">Мастер</option>
                                                        <option value="Доктор">Доктор</option>
                                                    </select>
                                                </label>
                                                <label>
                                                <select class="filter-item-reg" name="sort">
                                                    <option value="">Сортировать А-Я</option>
                                                    <option value="asc">А-Я</option>
                                                    <option value="desc">Я-А</option>
                                                </select>
                                                </label>
                                            </form>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row">
                                                
                                                <div class="registr-specs">
                                                    
                                                    
                                                </div> 
                                                
                                                
                                                <div class="show-more">
                                                    Показать еще
                                                </div>
                                                

                                            </div>
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
    </div>
    
    <script>
        $ = jQuery.noConflict();
        $(function() {
            $("#tabs").tabs();
        });
        
        var students = [];
        
        <? 
        $tabs = get_field('вкладки'); 
            foreach($tabs as $i=>$tab){
                $students = $tab['студенты']; ?>
        
                students[<?=$i;?>] = [];
        
                <? foreach($students as $k=>$student){
                $studentID = $student['студент'];
                $studentStatus = $student['статус'];
                $studentDate = $student['дата_обучения'];
                $coursesStud = get_field('курсы', $studentID);
                $coursesCount = count($coursesStud); ?>
                
        
                    students[<?=$i;?>][<?=$k;?>] = { 
                        title : '<? echo get_the_title($studentID); ?>',
                        count :'<?=$coursesCount; ?>',
                        status :'<?=$studentStatus; ?>',
                        city : '<? the_field('город', $studentID); ?>',
                        link : '<? echo get_permalink($studentID); ?>',
                        thumb : '<? echo kama_thumb_src('src=' . wp_get_attachment_url(get_post_thumbnail_id($studentID)) . '&w=70&h=70'); ?>',
                        date : '<?=$studentDate; ?>'
                    };
                
                
                if($('#tabs #tabs-<?=$i;?> [name="city"] [value="'+students[<?=$i;?>][<?=$k;?>]['city']+'"]').length == 0){
                    $('#tabs #tabs-<?=$i;?> [name="city"]').append('<option value="'+students[<?=$i;?>][<?=$k;?>]['city']+'">'+students[<?=$i;?>][<?=$k;?>]['city']+'</option>');
                }
                <? }
            }
        
        ?>
        
        studentsMore = []; 
        
        for(var i = 0; i < students.length; i++){
            studentsMore[i] = {
                currIndex : 0,
                flag : 0
            }
        }
        
        function getStudents(){
            for(var i = 0; i < students.length; i++){
                for(var k = studentsMore[i]['currIndex']; k < students[i].length && studentsMore[i]['flag'] < 5; k++){
                    student = '<div class="registr-spec clearfix"><div class="registr-spec-photo"><img src="' + students[i][k]['thumb'] + '" alt=""></div><div class="registr-spec-row clearfix"><div class="registr-spec-name">' + students[i][k]['title'] + '</div><div class="registr-spec-status">'+ students[i][k]['status'] +'</div><div class="registr-spec-city">' + students[i][k]['city'] + '</div></div><div class="registr-spec-row clearfix"><div class="registr-spec-date">Дата обучения: ' + students[i][k]['date'] + '</div><div class="registr-spec-courses">Пройдено курсов: ' + students[i][k]['count'] + '</div><div class="registr-spec-link"><a href="' + students[i][k]['link'] + '">Профиль ></a></div></div></div>';
                    $('#tabs #tabs-' + i + ' .registr-specs').append(student);  
                    studentsMore[i]['currIndex']++;
                    studentsMore[i]['flag']++;
                }
                studentsMore[i]['flag'] = 0;
            }
        }
        
        function getStudentsTab(currTab, chosenCity, chosenStatus){
            console.log(currTab, chosenCity, chosenStatus);
            for(var k = studentsMore[currTab]['currIndex']; k < students[currTab].length && studentsMore[currTab]['flag'] < 5; k++){
                student = '<div class="registr-spec clearfix"><div class="registr-spec-photo"><img src="' + students[currTab][k]['thumb'] + '" alt=""></div><div class="registr-spec-row clearfix"><div class="registr-spec-name">' + students[currTab][k]['title'] + '</div><div class="registr-spec-status">'+ students[currTab][k]['status'] +'</div><div class="registr-spec-city">' + students[currTab][k]['city'] + '</div></div><div class="registr-spec-row clearfix"><div class="registr-spec-date">Дата обучения: </div><div class="registr-spec-courses">Пройдено курсов: ' + students[currTab][k]['count'] + '</div><div class="registr-spec-link"><a href="' + students[currTab][k]['link'] + '">Профиль ></a></div></div></div>';
                if(chosenCity && !chosenStatus){
                    if(students[currTab][k]['city'] == chosenCity){
                        $('#tabs #tabs-' + currTab + ' .registr-specs').append(student);
                        studentsMore[currTab]['flag']++;    
                    }
                    studentsMore[currTab]['currIndex']++;
                    console.log('city choosen');
                } else if(chosenStatus && !chosenCity){
                    if(students[currTab][k]['status'] == chosenStatus){
                        $('#tabs #tabs-' + currTab + ' .registr-specs').append(student);
                        studentsMore[currTab]['flag']++;    
                    }
                    studentsMore[currTab]['currIndex']++;      
                    console.log('status choosen');
                } else if(chosenStatus && chosenCity){
                    if(students[currTab][k]['city'] == chosenCity && students[currTab][k]['status'] == chosenStatus){
                        $('#tabs #tabs-' + currTab + ' .registr-specs').append(student);
                        studentsMore[currTab]['flag']++;    
                    }
                    studentsMore[currTab]['currIndex']++;      
                    console.log('city & status choosen');
                } else {
                    $('#tabs #tabs-' + currTab + ' .registr-specs').append(student);
                    studentsMore[currTab]['currIndex']++;
                    studentsMore[currTab]['flag']++;
                }
            }
            studentsMore[currTab]['flag'] = 0;
        }
        
        getStudents();
        
        $('.filter-form').change(function(){
            var tabIndex = $(this).closest('.registr-tab').attr('index');
            var city = $('#tabs #tabs-' + tabIndex + ' [name="city"]').val();
            var sort = $('#tabs #tabs-' + tabIndex + ' [name="sort"]').val();
            var status = $('#tabs #tabs-' + tabIndex + ' [name="status"]').val();
            
            currIndex = 1;
            
            if(sort !=''){
                console.log(sort);
                if(sort == 'asc'){ 
                    students[tabIndex] = students[tabIndex].sort(function(a,b){
                        var c = a.title,
                            d = b.title;

                        if( c < d ){
                            return -1;
                        }else if( c > d ){
                            return 1;
                        }

                        return 0;
                    });
                } else if(sort == 'desc'){
                    students[tabIndex] = students[tabIndex].sort(function(a,b){
                        var c = a.title,
                            d = b.title;

                        if( c > d ){
                            return -1;
                        }else if( c < d ){
                            return 1;
                        }

                        return 0;
                    });
                }
                
                $('#tabs #tabs-' + tabIndex + ' .registr-specs .registr-spec').remove();
                studentsMore[tabIndex] = {
                    currIndex : 0,
                    flag : 0
                }
                getStudentsTab(tabIndex, city, status);
                
            }
            
            if(city || status){
                $('#tabs #tabs-' + tabIndex + ' .registr-specs .registr-spec').remove();
                studentsMore[tabIndex] = {
                    currIndex : 0,
                    flag : 0
                }
                getStudentsTab(tabIndex, city, status);
            }
            
            /*if(status){
                $('#tabs #tabs-' + tabIndex + ' .registr-specs .registr-spec').remove();
                studentsMore[tabIndex] = {
                    currIndex : 0,
                    flag : 0
                }
                getStudentsTab(tabIndex, city, status);
            }*/
            
        });
        
        $('.show-more').click(function(){
            var currNum = $(this).closest('.registr-tab').attr('index');
            var city = $('#tabs #tabs-' + currNum + ' [name="city"]').val();
            var status = $('#tabs #tabs-' + currNum + ' [name="status"]').val();
            getStudentsTab(currNum, city, status);
        });
        
    </script>

<?php get_footer();
