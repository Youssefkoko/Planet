<?php
//Producten Categories Shortcode
add_shortcode('producten-categories', 'pg_producten_categories');
function pg_producten_categories($atts = array())
{
    ob_start();
    pg_producten_categories_show($atts);
    $content = ob_get_clean();
    return $content;
}
function pg_producten_categories_show($atts = array())
{?>
<?php
$product_category_terms = get_terms(array(
    'taxonomy' => 'product_category',
    'hide_empty' => true,
    'orderby' => 'title',
    'order' => 'DESC',
));
    ?>

    <div class=" products-footer ">
        <ul id="footer-category">
        <h2 class="product-footer text-capitalize"><?php echo $atts['title']; ?></h2>
    <?php foreach ($product_category_terms as $product_category_term): ?>
        <li>
            <a href="<?php echo esc_url(get_category_link($product_category_term->term_id)); ?>"><?php echo $product_category_term->name; ?></a>
        </li>
    <?php endforeach;?>
        </ul>
    </div>
<?php }?>
<?php
//Onze Producten Categories Shortcode
add_shortcode('onze-producten-categories', 'pg_onze_producten_categories');
function pg_onze_producten_categories($atts = array())
{
    ob_start();
    pg_onze_producten_categories_show($atts);
    $content = ob_get_clean();
    return $content;
}
function pg_onze_producten_categories_show($atts = array())
{?>
<?php
$product_category_terms = get_terms(array(
    'taxonomy' => 'product_category',
    'hide_empty' => true,
    'orderby' => 'title',
    'order' => 'DESC',
));
    ?>

<div class="container text-capitalize " id="category">
  <div class="row">
    <?php foreach ($product_category_terms as $product_category_term): ?>
    <div class="col mt-5">
    	<?php
$cat_image = get_field('cat_image', $product_category_term);
    $size = 'full';
    if ($cat_image) {
        echo wp_get_attachment_image($cat_image, $size);
    }
    ?>
      <h5 class="my-3">
        <a href="<?php echo esc_url(get_category_link($product_category_term->term_id)); ?>"><?php echo $product_category_term->name; ?></a>
      </h5>
    </div>
    <?php endforeach;?>
  </div>
</div>
<h1 class="text-capitalize text-center mt-4 cate"><?php echo $atts['title']; ?></h1>
<?php }?>
