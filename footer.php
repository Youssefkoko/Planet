<!--=============FOOTER===========-->

<?php
$queried_object = get_queried_object();

// GLOBAL CONTENT OPTIONS

$stad = get_field('stad', 'option');
$email = get_field('email', 'option');
$bereikbaar = get_field('bereikbaar', 'option');
$telefoon_nummer = get_field('telefoon_nummer', 'option');

// SOCIAL MEDIA
$facebook_icon = get_field('facebook_icon', 'option');
$linkedin_icon = get_field('linkedin_icon', 'option');
$facebook_url = get_field('facebook_url', 'option');
$linkedin_url = get_field('linkedin_url', 'option');
$instagram_icon = get_field('instagram_icon', 'option');
$instagram_url = get_field('instagram_icon', 'option');

?>


</div>

<footer>

      <div id="footer">

        <div class="container d-flex flex-md-column">

          <div class="row">

            <!--====FIRST COLUNM HERE====-->

            <div class="col-lg-4">
              <img alt="Planet gaming logo" src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-planetgaming-text-wit.png" />
                  <ul id="adress">
                    <li><?php echo $stad; ?></li>
                    <li><?php echo $email; ?></li>
                    <li><?php echo $bereikbaar; ?></li>
                    <li><?php echo $telefoon_nummer; ?></li>
                  </ul>
            </div><!--###  END OF COL HERE ### -->
            <?php
if (is_active_sidebar('product-footer')):
    dynamic_sidebar('product-footer');
endif;
?>
            <div class="col-lg-4" class="social-icon">

              <!--=====THIRD COLUNM HERE=====-->



              <ul id="socail-media">
                <h2 class="social-media">
                social media
                </h2>
                <li>
                  <a href="<?php echo $facebook_url; ?>">
                    <img alt="<?php echo $facebook_icon['alt']; ?>" class="icon-footer" src="<?php echo $facebook_icon['url']; ?>" />
                  </a>
                </li>
                <li>
                    <a href="<?php echo $linkedin_url; ?>">
                    <img alt="<?php echo $linkedin_icon['alt']; ?>" src="<?php echo $linkedin_icon['url']; ?>" />
                    </a>
                </li>
                <li>
                    <a href="<?php echo $instagram_url; ?>">
                    <img alt="<?php echo $instagram_icon['alt']; ?>" src="<?php echo $instagram_icon['url']; ?>" />
                    </a>
                </li>

              </ul>

            </div>

          </div>

        </div>

      </div>

    </footer>





   </section>

<!--==============BOOTSTRAP CORE JAVASCRIPT==========-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--=========JQUERY==========-->


  <!--=========CAROUSEL=========-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" type="text/javascript"></script>




  <script src="<?php bloginfo('template_directory');?>/assets/js/index.js"></script>

<?php wp_footer();?>

</body>

</html>

