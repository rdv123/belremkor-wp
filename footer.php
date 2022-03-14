<footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-lg-3 col-md-6">
                     <a class="logo_bottom"><img src="<?php bloginfo('template_url');  ?>/images/belremcor-footer.png" alt="#"/></a>
                     <address class="many">
                        <p class="p-footer">
                           <?php the_field('address');?>
                           <a class="a-footer" href="tel:+<?php the_field('phone_number'); ?>"><?php the_field('phone'); ?></a>
                        </p>
                        
                     </address>
                     <!-- <p class="many">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humou
                     </p> -->
                  </div>
                  <div class="col-lg-2 offset-lg-1 col-md-6">
                     <h3>БЫСТРЫЕ ССЫЛКИ</h3>
                     <ul class="link_menu">
                        <li><a href="index.html">Главная</a></li>
                        <li><a href="#"> О нас</a></li>
                        <li><a href="#">Услуги</a></li>
                        <!-- <li><a href="staff.html">Staff</a></li> -->
                        <li><a href="#">Контакты</a></li>
                     </ul>
                  </div>
                  <div class=" col-lg-3 col-md-6">
                     <h3>НАШ INSTAGRAM </h3>
                     <ul class="insta text_align_left">
                        <li><img src="<?php bloginfo('template_url');  ?>/images/inst1.png" alt="#"/></li>
                        <li><img src="<?php bloginfo('template_url');  ?>/images/inst2.png" alt="#"/></li>
                        <li><img src="<?php bloginfo('template_url');  ?>/images/inst3.png" alt="#"/></li>
                        <li><img src="<?php bloginfo('template_url');  ?>/images/inst4.png" alt="#"/></li>
                     </ul>
                  </div>
                  <div class=" col-lg-3 col-md-6 ">
                     <h3>Подпишитесь на нас </h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Введите email" type="text" name="Enter your email">
                        <button class="sub_btn">Подписаться</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-8 offset-md-2">
                        <p>© 2022 <a href="<?php echo get_page_link("3"); ?>">Политика конфиденциальности</a><br> Design by <a href="https://rdv123.github.io/freelans-pf1/"> RDV</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php wp_footer(); ?>
   </body>
</html>