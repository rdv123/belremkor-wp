<?php

/*

Template Name: header



*/



// … остальной код шаблона

?>



<!DOCTYPE html>

<html <?php language_attributes(); ?>>

   <head>

      <meta charset="<?php bloginfo('charset');?>">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <!-- mobile metas -->

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <!-- site metas -->

      <title>Belremkor</title>

      <meta name="keywords" content="">

      <meta name="description" content="">

      <meta name="author" content="">





        <?php wp_head(); ?>



        <!-- fevicon -->

      <!-- <link rel="icon" href="icon/logo-belremkor-icon.ico" /> -->

      <!-- <?php wp_site_icon(); ?> -->

     

      <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

   </head>

   <!-- body -->

   <body class="main-layout">

  

      <!-- header -->

      <header class="full_bg">

         <!-- header inner -->

         <div class="header">

            <div class="header_top">

               <div class="container">

                  <div class="row">

                     <div class="col-md-3">

                        <ul class="contat_infoma">

                           <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+<?php the_field('phone_number'); ?>"><?php the_field('phone'); ?></a></li>

                        </ul>

                     </div>

                     <div class="col-md-6">

                        <ul class="social_icon_top text_align_center  ">

                           <li><a href="<?php the_field('facebook-link'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

                           <li><a href="<?php the_field('vk-link'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a></li>

                           <li><a href="<?php the_field('linkedin-link'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                           <li><a href="<?php the_field('ok-link'); ?>"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></a></li>

                           <li><a href="<?php the_field('instagram-link'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                        </ul>

                     </div>

                     <div class="col-md-3">

                        <ul class="contat_infoma text_align_right">

                           <li><a href="Javascript:void(0)"> <i class="fa fa-mail-reply-all" aria-hidden="true"></i><?php the_field('email'); ?></a></li>

                        </ul>

                     </div>

                  </div>

               </div>

            </div>

            <div class="container">

               <div class="row">

                  <div class="col-md-12">

                     <div class="header_bottom">

                        <div class="row">

                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">

                              <div class="full">

                                 <div class="center-desk">

                                    <div class="logo">

                                       

                                       <a href="https://belremkor.by/">

                                          <!-- <img class ="logo-belremkor" src="<?php bloginfo('template_url');  ?>/images/logo-belremkor2.png"/> -->

                                        <?php $logo_img = '';

                                             if( $custom_logo_id = get_theme_mod('custom_logo') ){

                                                $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(

                                                   'class'    => 'logo-belremkor',

                                                   'itemprop' => 'logo',

                                                ) );

                                             }



                                             echo $logo_img;

                                          ?>  

                                       </a>

                                       <div class ="logo-text">Белремкор</div>

                                          

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">

                              

                              <nav class="navigation navbar navbar-expand-md navbar-dark ">

                                 

                                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">

                                 <span class="navbar-toggler-icon"></span>

                                 </button>

                                 <div class="collapse navbar-collapse" id="navbarsExample04">

                                    <?php wp_nav_menu(array(



                                       'theme_location' => 'top',

                                       'container'       => null,

                                       'menu_class'      => 'navbar-nav mr-auto',

                                       'menu_id'         => 'nav',



                                       )); 

                                    ?>

                                    

                                 </div>

                                 <!-- <ul class="search">

                                    <li><a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a></li>

                                 </ul> -->

                              </nav>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <!-- end header inner -->

         <!-- end header -->

         <!-- banner -->

         <section class="banner_main">

            <div id="myCarousel" class="carousel slide banner" data-ride="carousel">

               <ol class="carousel-indicators">

                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

                  <li data-target="#myCarousel" data-slide-to="1"></li>

                  <li data-target="#myCarousel" data-slide-to="2"></li>

               </ol>

               <div class="carousel-inner" style="height: 540px">

                  <div class="carousel-item active">

                     <div class="container">

                        <div class="carousel-caption  banner_po">

                           <div class="row">

                              <div class="col-md-9">

                                 <div class="build_box">

                                    <h1><?php the_field('slider_1'); ?></h1>

                                    <p><?php the_field('slider_text_1'); ?>

                                    </p>

                                    <a class="read_more conatct_btn" href="https://belremkor.by/page-services/" role="button">Подробнее</a>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="carousel-item">

                     <div class="container">

                        <div class="carousel-caption banner_po">

                           <div class="row">

                              <div class="col-md-9">

                                 <div class="build_box">

                                    <h1><?php the_field('slider_2'); ?></h1>

                                    <p><?php the_field('slider_text_2'); ?></p>

                                    <a class="read_more conatct_btn" href="https://belremkor.by/page-services/" role="button">Подробнее</a>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="carousel-item">

                     <div class="container">

                        <div class="carousel-caption banner_po">

                           <div class="row">

                              <div class="col-md-9">

                                 <div class="build_box">

                                    <h1><?php the_field('slider_3'); ?></h1>

                                    <p><?php the_field('slider_text_3'); ?></p>

                                    <a class="read_more conatct_btn" href="https://belremkor.by/page-services/" role="button">Подробнее</a>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">

               <i class="fa fa-angle-left" aria-hidden="true"></i>

               <span class="sr-only">Previous</span>

               </a>

               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">

               <i class="fa fa-angle-right" aria-hidden="true"></i>

               <span class="sr-only">Next</span>

               </a>

            </div>

         </section>

      </header>