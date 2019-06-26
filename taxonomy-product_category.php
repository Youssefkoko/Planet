<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Planet_Gaming
 */
?>
<?php get_header();?>


<div class="container product-lists">
	<div class="cards">
		<div class="row">
	<?php
global $post, $wp_query;
$term = $wp_query->queried_object;
$cat_id = $term->term_id;
$cat_slug = $term->slug;
$cat_name = $term->name;
if (get_query_var('paged')) {
    $paged = get_query_var('paged');
}

if (get_query_var('page')) {
    $paged = get_query_var('page');
}

$planet_gaming_args = array(
    'post_type' => 'onze_producten',
    'post_status' => 'publish',
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_category',
            'field' => 'id',
            'terms' => $cat_id,
        ),
    ),
);
$planet_gaming = new WP_Query($planet_gaming_args);
if ($planet_gaming->have_posts()):
    while ($planet_gaming->have_posts()): $planet_gaming->the_post();?>
							<div class="col-lg-4">
									<div class="card">
									<div class="img">
									 <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
									</div>
										<div class="body">
											<h3 class="title text-center"><?php the_title();?></h3>
											<p class="description text-center">
											<?php echo wp_trim_words(get_the_content(), 19, '...'); ?>
											</p>
											<div class="button">
											<a class="btn btn-warning text-uppercase" href="<?php the_permalink();?>">
											Bekijk meer
											 </a>
											</div>
									</div>
								</div>
							                            <!-- === END OF COLUNM == -->
								</div>

									<?php endwhile;?>


									<div class="center-pagination">
										<div class="pagination">
											<?php pagination_bar($planet_gaming);?>
										</div>
											<?php wp_reset_postdata();?>
									</div>
										<?php endif;?>
			<?php wp_reset_query();?>
		<!-- END OF ROW HERE  -->
		</div>
	<!-- ===== END OF CARDS HERE ==== -->
	</div>
<!-- === END OF CONTAINER HERE === -->
</div>
<?php get_footer();?>