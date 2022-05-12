<?php
/*
Template Name: page-serviсes

*/

// … остальной код шаблона
?>

<?php get_header('other'); ?>
<div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>НАШИ УСЛУГИ</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!-- design -->
      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-4">
                  <div class="titlepage">
                     <h2>Проектирование</h2>
                     <span>
                     
                        <?php the_field('design'); ?>
                     </span>
                     <!-- <a class="read_more" href="Javascript:void(0)"> Read More</a> -->
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php bloginfo('template_url');  ?>/images/service_2.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- design -->
<!-- mounting -->
<div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php bloginfo('template_url');  ?>/images/montaj.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="titlepage">
                     <h2>Монтаж</h2>
                     <span><?php the_field('mounting'); ?>

                     </span>
                     <!-- <a class="read_more" href="Javascript:void(0)"> Read More</a> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end mounting -->
       <!-- mounting -->
       <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-4">
                  <div class="titlepage">
                     <h2>Наладка и обслуживание</h2>
                     <span><?php the_field('adjustment'); ?>

                     </span>
                     
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php bloginfo('template_url');  ?>/images/naladka.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mounting -->
<!-- measurements -->
<div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php bloginfo('template_url');  ?>/images/service_8.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="titlepage">
                     <h2>Электрофизические измерения</h2>
                     <span>
                        <?php the_field('measurements'); ?>
                     </span>
                  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end measurements -->


      
      

<?php get_footer(); ?>