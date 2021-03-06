<?php
/*
Template Name: page-contacts

*/

// … остальной код шаблона
?>

<?php get_header('other'); ?>



      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Наши контакты</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <!--  contact -->

      <div class="about">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-4">
                  <div class="titlepage">
                  <h2>ООО БелРемКор</h2>
                     <span>
                        Адрес: <?php the_field('address'); ?><br>
                        Телефон: <?php the_field('phone'); ?><br>
                        Факс: <?php the_field('fax'); ?><br>
                     </span>
                     <h3>
                        График работы
                     </h3>
                     <span>
                     <?php the_field('working_mode'); ?>
                     </span>
                     <h3>
                        Наши реквизиты
                     </h3>
                     <span> 
                     <?php the_field('id_company'); ?><br>
                     <?php the_field('requisites'); ?>
 
                     </span>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="<?php bloginfo('template_url');  ?>/images/sample2.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>


      <div class="contact">
         <div class="container">
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