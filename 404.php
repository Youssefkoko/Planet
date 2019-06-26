<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Planet_Gaming
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">

				</header><!-- .page-header -->

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
		<?php esc_html_e('Oops! That page can&rsquo;t be found.', 'planet-gaming');?>
    </h1>
    <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or contact us?', 'planet-gaming');?></p>
    <a href="<?php echo get_page_link(get_page_by_title("contact")->ID); ?>" class="btn btn-services  text-uppercase">
    contact
    </a>
    <!-- END OF THE CONTAINER HERE -->
  </div>
  <!--=============END ONZE SERVICES SECTION==========-->
</section>
</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
