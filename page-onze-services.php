<?php
/*
Template Name Onze Services
 */
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$title = get_field('title');
$onze_services_content = get_field('onze_services_content');

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
    <div class="content" id="bg-image">

    </div>
<?php }?>
<!--=========END OF CONTENT SECTION========-->
</section>

<section><!--=========ONZE SERVICES SECTION========-->
  <div class="container my-3" id="services-width">
    <h1 class="text-capitalize text-center">
      <?php echo $title; ?>
    </h1>
    <p>
      <?php echo wp_trim_words($onze_services_content, 150, '...'); ?>
    </P>
    <a href="http://localhost/projects/wordpress-5.0.3/wordpress/contact/" class="btn btn-services text-uppercase">
    contact
    </a>
  <!-- END OF THE CONTAINER HERE -->
  </div>
  <!--=============END ONZE SERVICES SECTION==========-->
</section>


  <?php get_template_part('template/content', 'service');?>


<!--==============START CONTACT SECTION==========-->
<?php get_template_part('template/content', 'contact');?>
<!--==============END CONTACT SECTION==========-->



<?php get_footer();
?>