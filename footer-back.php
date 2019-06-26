
<!--=============FOOTER===========-->
<?php $queried_object = get_queried_object();?>
</div>
<footer>
      <div id="footer">
        <div class="container text-capitalize">
          <div class="row">
            <!--====FIRST COLUNM HERE====-->
            <div class="col-lg-4">
              <img alt="Planet gaming logo" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-planetgaming-text-wit.png" />
              <h6 class="city">
              <?php the_field('stad', $queried_object->ID);?>
              </h6>
              <h6 class="email-footer">
              <?php the_field('email', $queried_object->ID);?>
              </h6>
              <div>
                <div class="d-flex flex-row">
                  <div>
                    <img alt="Planet gaming phone number" class="call-footer" src="<?php bloginfo('stylesheet_directory')?>/assets/img/call.svg" />
                  </div>
                  <div class="tele-adress">
                    <h6 class="adress-footer">
                    <?php the_field('bereikbaar', $queried_object->ID);?>
                    </h6>
                    <h6 class="tele-footer">
                      <?php the_field('telefoon_nummer', $queried_object->ID);?>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h2 class="product-footer">
                producten
              </h2>
              <div class=" products-footer ">
              <h6>
                  product 1
                </h6>
                <h6>
                  product 2
                </h6>
                <h6>
                  product 3
                </h6>
                <h6>
                  product 4
                </h6>
              </div>
            </div>
            <div class="col-lg-4">
              <!--=====THIRD COLUNM HERE=====-->
              <h2 class="social-media">
                social media
              </h2>
              <div class="d-flex flex-row social-icons">
                <div class="facebook-icon">
                  <a href="https://www.facebook.com">
                    <img alt="Planet gaming facebook" class="icon-footer" src="<?php bloginfo('stylesheet_directory')?>/assets/img/facebook.png" />
                  </a>
                </div>
                <div class="linkedin-icon">
                  <a href="https://www.linkedin.com">
                    <img alt="Planet gaming linkedin" src="<?php bloginfo('stylesheet_directory')?>/assets/img/linkedin.png" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


   </section>
<!--==============BOOTSTRAP CORE JAVASCRIPT==========-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--=========JQUERY==========-->
<script src="<?php bloginfo('template_directory');?>/assets/js/jquery-3.3.1.min.js"></script>
  <!--=========CAROUSEL=========-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" type="text/javascript"></script>

  <script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory');?>/assets/js/index.js"></script>
<?php wp_footer();?>
</body>
</html>
