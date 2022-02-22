<?php
/*
Template Name: page-aboutus

*/

// … остальной код шаблона
?>

<?php get_header('other'); ?>
    <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>О НАС</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>О нашей компании</h2>
                     <span>Компания ООО БелРемКор осуществляет помощь по сбору предпроектной документации. Оказывает услуги по проектированию, выполнению строительно-монтажных и пусконаладочных работ и сдаче объекта в эксплуатацию по следующим направлениям: водоснабжение и канализация, электроснабжение, газоснабжение, отопление и вентиляция. Компания имеет собственную электроизмерительную лабораторияю,что позволяет производить электрофизические измерения (ЭФИ) на любых видах объектов. Наши специалисты высококвалифицированны и имеют большой опыт работы в сфере электроизмерений и допущены к работе с повышенным напряжением.

                     </span>
                     <!-- <a class="read_more" href="Javascript:void(0)"> Read More</a> -->
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php bloginfo('template_url');  ?>/images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <div class="projects">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Наши проекты</h2>
                     <span>Здесь будут фото с объектов и их краткое описание</span>
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

                                             <!-- <figure><img src="<?php bloginfo('template_url');  ?>/<?php bloginfo('template_url');  ?>/images/3.jpg" alt="#"/></figure> -->
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
      <!-- clients -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Наши клиенты</h2>
                     <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="testimo_ban_bg">
                     <div id="testimo" class="carousel slide testimo_ban" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#testimo" data-slide-to="0" class="active"></li>
                           <li data-target="#testimo" data-slide-to="1"></li>
                           <li data-target="#testimo" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="container parile0">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-12">
                                          <i><img class="qusright" src="<?php bloginfo('template_url');  ?>/images/t.png" alt="#"/>
                                             <img src="<?php bloginfo('template_url');  ?>/images/images.jfif" alt="#"/>
                                             <img class="qusleft" src="<?php bloginfo('template_url');  ?>/images/t.png" alt="#"/>
                                            </i>
                                          <div class="consect">
                                             <span>УО СПК «Путришки»</span>
                                             <!-- <p>УО СПК «Путришки» выражает благодарность ООО «БелРемКор» за
                                                добропорядочность, оперативность, профессионализм и высокий уровень
                                                сервиса в работе. В процессе нашего сотрудничества мы были приятно
                                                удивлены не только ценовой политикой и качеством оказываемых вами услуг
                                                но и высокой культурой общения вашего персонала.
                                                Желаем вам новых клиентов и стремительного развития.</p> -->
                                                <img class="qusleft" src="<?php bloginfo('template_url');  ?>/images/review_00001.png" alt="#"/>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container parile0">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-12">
                                          <i><img class="qusright" src="<?php bloginfo('template_url');  ?>/images/t.png" alt="#"/>
                                             <img src="<?php bloginfo('template_url');  ?>/images/kremko4.png" alt="#"/>
                                             <img class="qusleft" src="<?php bloginfo('template_url');  ?>/images/t.png" alt="#"/>
                                            </i>
                                          <div class="consect">
                                             <span>ПК имени В.И.Кремко</span>
                                             <!-- <p>Производственный кооператив имени В.И.Кремко, Гродненского
                                                района благодарит Вас за оперативность в проведении ремонтных
                                                работ.
                                                Специалисты Вашей организации обладают достаточными знаниями
                                                и квалификацией, пунктуальны и аккуратны при выполнении
                                                порученной им работы.
                                                Мы верим в сохранение сложившихся деловых отношений, надеемся
                                                на дальнейшее взаимовыгодное сотрудничество.
                                                Желаем Вам и Вашему коллективу успехов, достижения намеченных целей, динамичного развития</p> -->
                                                <img class="qusleft" src="<?php bloginfo('template_url');  ?>/images/review_00001.png" alt="#"/>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <div class="container parile0">
                                 <div class="carousel-caption relative2">
                                    <div class="row d_flex">
                                       <div class="col-md-12">
                                          <i><img class="qusright" src="<?php bloginfo('template_url');  ?>/images/t.png" alt="#"/>
                                             <img src="<?php bloginfo('template_url');  ?>/images/gpf1.png" alt="#"/>
                                             <img class="qusleft" src="<?php bloginfo('template_url');  ?>/images/t.png" alt="#"/>
                                            </i>
                                          <div class="consect">
                                             <span>КПСУ «Гродненская ПФ»</span>
                                             <!-- <p>Коммунальное производственное сельскохозяйственное унитарное
                                                предприятие «Гродненская птицефабрика» выражает свою благодарность,
                                                как ООО «БелРемКор» так и сотрудникам Вашей компании за
                                                профессионализм в работе и оперативность в исполнении заказываемых
                                                работ. Наша организация рассчитывает на дальнейшее в будущем с Вашей
                                                компанией.</p> -->
                                                <img class="qusleft" src="<?php bloginfo('template_url');  ?>/images/review_00001.png" alt="#"/>

                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="carousel-button">
                              <div class="button-left">
                                 <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                                 <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 <span class="sr-only">Previous</span>
                                 </a>
                              </div>
                              <div class="button-right">
                                 <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                                 <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                 <span class="sr-only">Next</span>
                                 </a>
                              </div>
                           </div>
                           <!-- <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
                           <i class="fa fa-arrow-left" aria-hidden="true"></i>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
                           <i class="fa fa-arrow-right" aria-hidden="true"></i>
                           <span class="sr-only">Next</span>
                           </a> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients -->

<?php get_footer(); ?>