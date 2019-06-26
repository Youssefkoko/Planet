
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Planet_Gaming
 */
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

// GLOBAL CONTENT OPTIONS
$title = get_field('title', 'option');
$content_text = get_field('content_text', 'option');

$title_in_contact_section = get_field('title_in_contact_section', 'option');
$content_in_contact_section = get_field('content_in_contact_section', 'option');

$stad = get_field('stad');
$email = get_field('email');
$bereikbaar = get_field('bereikbaar');
$telefoon_nummer = get_field('telefoon_nummer');
$facebook_icon = get_field('facebook_icon');
$linkedin_icon = get_field('linkedin_icon');
get_header();
?>

  <!--=========CONTENT SECTION==========-->
  <section>

    <div class="content" id="product-pagina-bg-image">

    </div>
    <!-- ========= END OF CONTENT SECTION ======== -->
  </section>
  <section>
    <!--========= ONZE SERVICES SECTION ========-->

    <div class="container" id="product-pagina">
      <div class="row">
      <?php while (have_posts()): the_post();?>
						<div class="col-md-6 card-single-page">
							<?php if (has_post_thumbnail()) { // check for Image
        the_post_thumbnail();}?>
						</div>
						<div class="col-md-6">
	            <h1 class="text-capitalize product-pagina-item"><?php the_title();?></h1>
	            <?php the_content();?>
	            <a href="<?php echo get_page_link(get_page_by_title("contact")->ID); ?>" class="btn btn-product-pagina  text-uppercase">contact</a>
						</div>
	<?php
    // the_post_navigation();

endwhile; // End of the loop.
?>
      </div> <!--== END OF ROW === -->
      <!-- END OF THE CONTAINER HERE -->
    </div>
</section>
    <!--=============END ONZE SERVICES SECTION==========-->

  <!-- ====== SERVICE ITEMS SECTION HERE =======  -->

    <!--============= END ONZE PRODUCTEN SECTION ==========-->
    <!--=============PRODUCTE ITEMS START HERE=======-->
    <?php get_template_part('template/content', 'service');?>
    <!-- ====== END SERVICE ITEMS SECTION HERE =======  -->






  <!--==============START CONTACT SECTION==========-->
  <?php get_template_part('template/content', 'contact');?>
  <!--==============END CONTACT SECTION==========-->

<?php

get_footer();
?>