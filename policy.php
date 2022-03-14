<?php
/*
Template Name: policy

*/

 get_header('other'); ?>
 <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2><?php the_title(); ?></h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
<div class="policy">
    <div class="container">
       
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>