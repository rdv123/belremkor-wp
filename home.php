<?php

/*
Template Name: home

*/
?>

<?php get_header(); ?>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-2 ">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="<?php bloginfo('template_url');  ?>/images/free-icon-technical-drawing-2558125.png" class="icon-container" alt="#"/></i>
                     <span>проектирование</span>
                  </div>
               </div>
               <div class="col-md-2">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="<?php bloginfo('template_url');  ?>/images/ser3.png" class="icon-container" alt="#"/></i>
                     <span>монтаж</span>
                  </div>
               </div>
               <div class="col-md-2">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="<?php bloginfo('template_url');  ?>/images/free-icon-maintenance-1118481.png" class="icon-container" alt="#"/></i>
                     <span>наладка</span>
                  </div>
               </div>
               <div class="col-md-2">
                  <div id="text_hover" class="const text_align_center">
                     <i><img src="<?php bloginfo('template_url');  ?>/images/free-icon-measure-3030111.png" class="icon-container" alt="#"/></i>
                     <span>ЭФИ измерения</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="projects">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Наши проекты</h2>
                     <span>Лучше о нас скажут наши выполненные проекты</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="proj" class="carousel slide projects_ban" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#proj" data-slide-to="0" class="active"></li>
                        <li data-target="#proj" data-slide-to="1"></li>
                        <li data-target="#proj" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                     <?php
                                        global $post;

                                        $myposts = get_posts([ 
                                            'numberposts' => 3,
                                            'category_name' => 'project_part_1'

                                        ]);

                                        if( $myposts ){
                                            foreach( $myposts as $post ){
                                                setup_postdata( $post );
                                     ?>
                                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->

                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">

                                             <?php the_post_thumbnail(); ?>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3><?php the_title(); ?></h3>
                                             <p><?php the_content() ?></p>
                                          </div>
                                       </div>
                                    </div>


                                     <?php 
                                            } }  wp_reset_postdata(); 
                                     ?>

                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative3">
                                 <div class="row">
                                 <?php
                                        global $post;

                                        $myposts = get_posts([ 
                                            'numberposts' => 3,
                                            'category_name' => 'project_part_2'
                                        ]);

                                        if( $myposts ){
                                            foreach( $myposts as $post ){
                                                setup_postdata( $post );
                                     ?>
                                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->

                                    <div class="col-md-4">
                                       <div class="project">
                                          <div class="project_img">

                                             <!-- <figure><img src="<?php bloginfo('template_url');  ?>/images/3.jpg" alt="#"/></figure> -->
                                             <?php the_post_thumbnail(); ?>
                                          </div>
                                          <div id="pro_ho" class="project_text">
                                             <h3><?php the_title(); ?></h3>
                                             <p><?php the_content() ?></p>
                                          </div>
                                       </div>
                                    </div>


                                     <?php 
                                            } }  wp_reset_postdata(); 
                                     ?>
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        </div>
                        <a class="carousel-control-prev" href="#proj" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#proj" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end projects -->
      <!-- choose -->
      <div class="choose">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-7 ">
                  <div class="titlepage">
                     <h2>Наша главная цель</h2>
                     <!-- <p>Компания ООО БелРемКор осуществляет помощь по сбору предпроектной документации. 
                        Оказывает услуги по проектированию, выполнению строительно-монтажных и пусконаладочных работ
                        и сдаче объекта в эксплуатацию по следующим направлениям: водоснабжение и канализация,
                        электроснабжение, газоснабжение, отопление и вентиляция. Компания имеет собственную 
                        электроизмерительную лабораторияю,что позволяет производить электрофизические измерения (ЭФИ)
                        на любых видах объектов. Наши специалисты высококвалифицированны и имеют большой опыт работы в 
                        сфере электроизмерений и допущены к работе с повышенным напряжением.</p> -->
                        <p>
                           Всегда быть надежным партнерам для наших клиентов, ведь только вместе мы сможем достичь лидерства!
                        </p>
                     <div class="award">
                        
                        <div id="awa_ho" class="award_icon text_align_center">
                           <i><img src="<?php bloginfo('template_url');  ?>/images/ch1.png" alt="#"/>
                           </i>
                           <strong>клиент</strong>
                        </div>
                        <div id="awa_ho" class="award_icon text_align_center">
                           <i><img src="<?php bloginfo('template_url');  ?>/images/ch2.png" alt="#"/></i>
                           <strong>лидерство</strong>
                        </div>
                        <div id="awa_ho" class="award_icon text_align_center">
                           <i><img src="<?php bloginfo('template_url');  ?>/images/ch3.png" alt="#"/></i>
                           <strong>надежность</strong>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Напишите нам</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 padding_right0">
                  <form id="request" class="main_form">
                     <div class="row">
                        <?php echo do_shortcode('[contact-form-7 id="34" title="Контактная форма"]') ?>
                     </div>
                  </form>
               </div>
               <div class="col-md-6 padding_left0">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=28786946747" width="560" height="400" frameborder="0"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      
      <!--  footer -->
<?php get_footer(); ?>
