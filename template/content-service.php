<?php
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$title = get_field('title');
$onze_services_content = get_field('onze_services_content');

$title = get_field('title', 'option');
$content_text = get_field('content_text', 'option');

$contact_onze_services_title = get_field('contact_onze_services_title');
$contact_content = get_field('contact_content');
$stad = get_field('stad');
get_header();
?>

<!--======SERVICE ITEMS SECTION HERE=======-->
<section id="service-item">
  <!--=============ONZE PRODUCTEN SECTION==========-->
  <div class="container">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8 onze-producten-services">
        <h1>
          <?php echo $title; ?>
        </h1>
        <p>
            <?php echo substr($content_text, 0, 200); ?>
        </p>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
<!--=============END ONZE PRODUCTEN SECTION==========-->

<!--=============PRODUCTE SLIDER START HERE=======-->
<div class="container">
                <div class=" cards-slider">
                    <div class="row">
                        <div class="col-md-12">
                          <div class="card card-slider-bg-light-blue">
                            <div class="owl-carousel" id="product-slider">
                              <?php $loop = new wp_Query(array(
    'post_type' => 'home_producten',
    'orderby' => 'ID',
    'order' => 'DESC',
));?>
          <?php while ($loop->have_posts()): $loop->the_post();?>
								<div class="product-item">
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
    <!-- END OF CONTAINER HERE -->
<!--======END SERVICE ITEMS SECTION HERE=======-->
</section>