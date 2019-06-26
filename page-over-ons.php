<?php
/* Template Name Over Ons
 */
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$over_ons_title = get_field('over_ons_title');
$over_ons_content = get_field('over_ons_content');
$over_ons_producten_title = get_field('over_ons_producten_title');
$over_ons_producten_content = get_field('over_ons_producten_content');

// GLOBAL CONTENT OPTIONS
$title_in_contact_section = get_field('title_in_contact_section', 'option');
$content_in_contact_section = get_field('content_in_contact_section', 'option');

get_header();
?>
<section>
<?php if (has_post_thumbnail()) { // check for image ?>
    <div class="content" style=" background-image: url('<?php echo $thumbnail_url; ?>');
                                background-attachment: scroll;
                                background-repeat: no-repeat;
                                background-position: 50% 50%;
                                background-size: 100% 100%;
                                width: 100%;
                                height: 451px;
                                box-sizing: border-box;">

    </div>

<?php } else {?>
  <div class="content" id="over-ons-bg-image">

  </div>
<?php }?>
  <!--=========END OF CONTENT SECTION========-->
</section>
<section><!--=========ONZE SERVICES SECTION========-->
  <div class="container" id="over-ons-width">
    <h1 class="text-capitalize text-center">
      <?php echo $over_ons_title; ?>
    </h1>
    <p>
      <?php echo wp_trim_words($over_ons_content, 200, '...'); ?>
    </P>
    <a href="<?php echo get_page_link(get_page_by_title("contact")->ID); ?>" class="btn btn-services  text-uppercase">
    contact
    </a>
    <!-- END OF THE CONTAINER HERE -->
  </div>
  <!--=============END ONZE SERVICES SECTION==========-->
</section>
<!--======SERVICE ITEMS SECTION HERE=======-->

<?php get_template_part('template/content', 'service');?>

<!--==============START CONTACT SECTION==========-->
<?php get_template_part('template/content', 'contact');?>
  <!--==============END CONTACT SECTION==========-->

  <!--=============FOOTER===========-->
  <?php get_footer();
?>