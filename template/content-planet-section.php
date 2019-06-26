<?php
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$second_background_image = get_field('second_background_image', 'option');

$image_2_of_onze_producten = get_field('image_2_of_onze_producten');
?>
<section id="planet-section">
<?php if (has_post_thumbnail()) { // check for Image ?>

      <div style="
                  background-image: url('<?php echo $second_background_image['url']; ?>');
                  background-attachment: scroll;
                  background-repeat: no-repeat;
                  background-position: 50% 50%;
                  background-size: 100% 100%;
                  width: 100%;
                  height: 396px;
                  box-sizing: border-box;"
                  class="planet-gaming-2-content text-center">
        <div class="over-lay">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>Als <strong>Planet Gaming </strong><br />bieden wij <span class="content-text-bold">klant-
                  en spelersgericht kansspelen</span>voor in de Horeca. </p><a href="<?php echo get_page_link(get_page_by_title("onze services")->ID); ?>" class="btn btn-light-2 text-uppercase">onze
                services</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } else {?>

      <div id="planet-gaming-3" class="planet-gaming-2-content text-center">
        <div class="over-lay">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <p>Als <strong>Planet Gaming </strong><br />bieden wij <span class="content-text-bold">klant-
                  en spelersgericht kansspelen</span>voor in de Horeca. </p><a href="<?php echo get_page_link(get_page_by_title("onze services")->ID); ?>" class="btn btn-light-2 text-uppercase">onze
                services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php }?>
  </section>