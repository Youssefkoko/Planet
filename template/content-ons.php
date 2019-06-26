<?php
/* Template Name Over Ons
 */
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$title = get_field('title', 'option');
$content_text = get_field('content_text', 'option');

$over_ons_producten_title = get_field('over_ons_producten_title');
$over_ons_producten_content = get_field('over_ons_producten_content');
$over_ons_contact_title = get_field('over_ons_contact_title');
$over_ons_contact_content = get_field('over_ons_contact_content');

get_header();
?>

<section id="service-item">
  <!--=============ONZE PRODUCTEN SECTION==========-->
  <div class="container">
    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8 onze-producten-services">
        <h1><?php echo $title; ?>
        </h1>
        <p>
          <?php echo substr($content_text, 0, 200); ?>
        </p>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div><!--=============END ONZE PRODUCTEN SECTION==========-->

  <!--=============PRODUCTE ITEMS START HERE=======-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="product-slider" class="owl-carousel">
        <?php $loop = new wp_Query(array('post_type' => 'home_producten', 'orderby' => 'ID', 'order' => 'ASC'));?>
        <?php while ($loop->have_posts()): $loop->the_post();?>
												        <div class="product-item">
												            <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    }

    ?>
												            <h3 class="title">
												              <?php the_title();?>
												            </h3>
												            <p class="description">
												              <?php the_content();?>
												            </p>
												            <a href="<?php the_permalink();?>" class="btn btn-warning text-uppercase">
												            bekijk meer
												            </a>
												        </div>
												        <?php endwhile;?>
      </div>
    </div>
  </div>
</div>
<!--======END SERVICE ITEMS SECTION HERE=======-->
</section>