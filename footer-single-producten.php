<!--=============FOOTER===========-->

<?php
// GLOBAL CONTENT OPTIONS

$stad = get_field('stad', 'option');
$email = get_field('email', 'option');
$bereikbaar = get_field('bereikbaar', 'option');
$telefoon_nummer = get_field('telefoon_nummer', 'option');
// PRODUCTEN
$product_1 = get_field('product_1', 'option');
$product_2 = get_field('product_2', 'option');
$product_3 = get_field('product_3', 'option');
$product_4 = get_field('product_4', 'option');
// SOCIAL MEDIA
$facebook_icon = get_field('facebook_icon', 'option');
$linkedin_icon = get_field('linkedin_icon', 'option');
$facebook_url = get_field('facebook_url', 'option');
$linkedin_url = get_field('linkedin_url', 'option');

?>


</div>

<footer>

      <div id="footer">

        <div class="container text-capitalize">

          <div class="row">

            <!--====FIRST COLUNM HERE====-->

            <div class="col-lg-4">

              <img alt="Planet gaming logo" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-planetgaming-text-wit.png" />

              <h6 class="city">

              <?php echo $stad; ?>

              </h6>

              <h6 class="email-footer">

              <?php echo $email; ?>

              </h6>

              <div>

                <div class="d-flex flex-row">

                  <div>

                    <img alt="Planet gaming phone number" class="call-footer" src="<?php bloginfo('stylesheet_directory')?>/assets/img/call.svg" />

                  </div>

                  <div class="tele-adress">

                    <h6 class="adress-footer">


                    <?php echo $bereikbaar; ?>


                    </h6>

                    <h6 class="tele-footer">

                      <?php echo $telefoon_nummer; ?>

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

                <?php echo $product_1 ?>

                </h6>

                <h6>

                <?php echo $product_2 ?>

                </h6>

                <h6>

                <?php echo $product_3 ?>

                </h6>

                <h6>

                <?php echo $product_4 ?>

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

                  <a href="<?php echo $facebook_url; ?>">
                    <?php if ($facebook_icon): ?>
                    <img alt="<?php echo $facebook_icon['alt']; ?>" class="icon-footer" src="<?php echo $facebook_icon['url'] ?>" />
                    <?php endif?>

                  </a>

                </div>
                <div class="linkedin-icon">

                  <a href="<?php echo $linkedin_url ?>">

                    <img alt="<?php echo $linkedin_icon['alt']; ?>" src="<?php echo $linkedin_icon['url']; ?>" />

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

