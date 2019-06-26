<?php
/*
Template Name : Onze Producten
 */
get_header();
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

// GLOBAL CONTENT OPTIONS
$title = get_field('title', 'option');
$content_text = get_field('content_text', 'option');

$image_2_of_onze_producten = get_field('image_2_of_onze_producten');

// Contact Section
$title_in_contact_section = get_field('title_in_contact_section', 'option');
$content_in_contact_section = get_field('content_in_contact_section', 'option');
?>
<!--=========CONTENT SECTION==========-->
<section>
  <?php if (has_post_thumbnail()) {
    ?>
    <div class="content" style=" background-image: url('<?php echo $thumbnail_url; ?>');
                                    background-attachment: scroll;
                                    background-repeat: no-repeat;
                                    background-position: 50% 50%;
                                    background-size: 100% 100%;
                                    width: 100%;
                                    height: 451px;
                                    box-sizing: border-box;">

    </div>

  <?php } else { ?>
    <div class="content" id="bg-image">

    </div>
  <?php } ?>

  <!-- ========= END OF CONTENT SECTION ======== -->
</section>
<section>
  <!-- ======= CATEGORY SECTION HERE ====== -->
  <!-- THE HTML CODE OF THIS SECTION EXISTS IN SHORTCODE.PHP FILE in INC folder  -->
  <?php
  if (is_active_sidebar('onze-product-page')) :
    dynamic_sidebar('onze-product-page');
  endif;
  ?>
  <!-- ========== END OF CATEGORY SECTION ====== -->
</section>
<section>
  <!-- ============ ONZE PRODUCTEN SECTION ======= -->
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8 onze-producten">
        <h1>
          <?php echo $title; ?>
        </h1>
        <p> <?php echo substr($content_text, 0, 200); ?> </p>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>
<!-- ============ END ONZE PRODUCTEN SECTION ======= -->
<!--=============PRODUCTE ITEMS START HERE=======-->
<section>
  <div class="container ">
    <!-- ====== CARD  HERE ===== -->
    <div class="cards">
      <div class="row align-items-center">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $loop = new wp_Query(array(
          'posts_per_page' => 6,
          'paged' => $paged,
          'post_type' => 'onze_producten',
          'orderby' => 'ID',
          'order' => 'DESC',
        )); ?>
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="col-lg-4">
            <div class="card">
              <div class="img">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } ?>
              </div>
              <div class="body">
                <h3 class="title text-center"><?php the_title(); ?></h3>
                <p class="description text-center">
                  <?php echo wp_trim_words(get_the_content(), 19, '...'); ?>
                </p>
                <div class="button">
                  <a class="btn btn-warning text-uppercase" href="<?php the_permalink(); ?>">
                    Bekijk meer
                  </a>
                </div>
              </div>
            </div>
            <!-- === END OF COLUNM == -->
          </div>
        <?php endwhile;
      wp_reset_postdata(); ?>
        <!-- ==== THE END OF ROW HERE ===== -->
      </div>
      <!-- ======== END CARD HERE ======= -->
    </div>
    <!-- ====== SECOND ROW HERE ======= -->
    <!-- ======= END SECOND ROW HERE======= -->
    <!-- PAGINATION START HERE  -->
    <div class="center-pagination">
      <div class="pagination">
        <?php pagination_bar($loop); ?>

      </div>
      <?php wp_reset_postdata(); ?>
    </div>

    <!-- ====== END OF THE CONTAINER HERE === -->
  </div>

  <!--==========END OF PRODUCT ITEMS HERE==========-->
</section>

<!--=============PLANET SECTION ==========-->


<?php get_template_part('template/content', 'planet-section'); ?>

<!--=============END OF PLANET SECTION ==========-->
<!--==============START CONTACT SECTION==========-->
<?php get_template_part('template/content', 'contact'); ?>
<!--==============END CONTACT SECTION==========-->


<?php get_footer(); ?>