<?php
/**
 *
 *
 * @package Planet_Gaming
 */
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

// Advanced Custom Fields
$first_title = get_field('first_title');

// GLOBAL CONTENT OPTIONS
$title = get_field('title', 'option');
$content_text = get_field('content_text', 'option');

$background_image_2 = get_field('background_image_2');

get_header();
?>

<!--=========CONTENT SECTION==========-->
<?php if (has_post_thumbnail()) { // check for Image ?>
<section>

    <div class="content" style="background-image: url('<?php echo $thumbnail_url; ?>');
                                background-attachment: scroll;
                                background-repeat: no-repeat;
                                background-position: 50% 50%;
                                background-size: contain;
                                width: 100%;
                                height:451px;
                                box-sizing: border-box;">
      <div class="row">
        <div class="col-md-4 d-flex justify-content-start">
          <div class="content-text text-center">
            <p class="">
            Als
              <strong>
                Planet Gaming
              </strong>
              bieden wij
              <span class="content-text-bold">
                klant- en spelersgericht kansspelen
              </span>
              voor in de Horeca.
            </p>

            <a class="btn btn-light text-center text-uppercase" href="#">
              meer informatie
            </a>
          </div>
        </div>
      <div class=" col-md-8 offset-col-ms-8"></div>
    </div>
  </div>
<?php } else {?>
  <div class="content" id="bg-image">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-start">
          <div class="content-text text-center">
            <p class="">
            Als
              <strong>
                Planet Gaming
              </strong>
              bieden wij
              <span class="content-text-bold">
                klant- en spelersgericht kansspelen
              </span>
              voor in de Horeca.
            </p>

            <a class="btn btn-light text-center text-uppercase" href="<?php echo get_page_link(get_page_by_title("contact")->ID); ?>">
              meer informatie
            </a>
          </div>
        </div>
        <div class=" col-md-8 offset-col-ms-8"></div>
    </div>
  </div>

<?php }?>

    <!--=========END OF CONTENT SECTION========-->
  </section>
  <section>
    <!--=============ONZE PRODUCTEN SECTION==========-->
    <div class="container onze-producten-container">
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
    <!--=============END ONZE PRODUCTEN SECTION==========-->
    <!--=============PRODUCTE ITEMS START HERE=======-->
    <!--=============PRODUCTE ITEMS START HERE=======-->
    <div class="container">
                <div class=" cards-slider">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="card card-slider">
                            <div class="owl-carousel" id="product-slider">
                              <?php $loop = new wp_Query(array(
    'post_type' => 'home_producten',
    'orderby' => 'ID',
    'order' => 'ASC',
));?>
          <?php while ($loop->have_posts()): $loop->the_post();?>
										<div class="product">
											<?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
												<div class="body">
													<h3 class="title">
														<?php the_title();?>
													</h3>
												  <p>
											          <?php
    $content = get_the_content();
    echo wp_trim_words($content, 19, '...');
    ?></p>
												<div class="button-slider">
													<a class="btn btn-warning text-uppercase" href="<?php the_permalink();?>">
													bekijk meer
													</a>
												</div>
										</div>
									</div>
							<?php endwhile;?>
        </div>
        </div>
      </div>
    </div>
    <!-- END OF CONTAINER HERE  -->
</div>
</div>
    <!--==========END OF PRODUCT ITEMS HERE==========-->
    <!--=============PLANET SECTION==========-->
    <?php get_template_part('template/content', 'planet-section');?>


    <!--=============END OF PLANET SECTION ==========-->
    <!--==============START CONTACT SECTION==========-->
    <?php get_template_part('template/content', 'contact');?>
    <!--==============END CONTACT SECTION==========-->

<?php
get_footer();
?>