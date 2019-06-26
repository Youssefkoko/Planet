<?php
/* Template Name : Contact Page
 */

get_header();
$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));

$image_2_of_onze_producten = get_field('image_2_of_onze_producten');

$stad = get_field('stad');
$email = get_field('email');
$bereikbaar = get_field('bereikbaar');
$telefoon_nummer = get_field('telefoon_nummer');
$facebook_icon = get_field('facebook_icon');
$linkedin_icon = get_field('linkedin_icon');
?>
<!--============MAP SECTION HERE==========-->
<section class="map-section">
    <div id="map">

    </div>
    <!--==========END OF MAP SECTION HERE========-->
</section>
<!--==============START CONTACT SECTION==========-->
<section>
    <div class="container my-3 " id="container-width">
        <div class="row">
            <div class="col-lg-6 col-ms-12">
                <!--=====START OF CONTACT FORM HERE====-->
                <div class="details-wrapper">
                    <div class="contact-details">
                        <h3>Contact gegevens</h3>
                        <h6>
                            <?php echo $stad; ?>
                        </h6>
                        <h6>
                            <?php echo $email; ?>
                        </h6>
                        <h6 class="bereikbaar">
                            <?php echo $bereikbaar; ?>
                        </h6>
                        <h6 class="number">
                            <?php echo $telefoon_nummer; ?>
                        </h6>
                        <img class="ml-3" src="<?php echo $linkedin_icon['url']; ?>" alt="linkedin page of Planet Gaming">
                        <img src="<?php echo $facebook_icon['url']; ?>" alt="facebook page of Planet Gaming">

                    </div>
                </div>
                <!--=====END OF COLUNM 6 HERE====-->

            </div>
            <div class="col-lg-6 col-ms-12 mb-5">
                <div class=" contact-wrapper-in-contact-page">
                    <!--===START CONTACT FORM====-->
                    <form>
                        <h3 class="text-center ">
                            Contact
                        </h3>
                        <!-- <div class="form-group">
                            <label class="naam" for="name">
                                Naam
                            </label>
                            <input type="name" class="form-control" id="inputName" aria- describedby="name" placeholder="Uw naam" />
                        </div>
                        <div class="form-group">
                            <label class="emailadres" for="emailadres">
                                Emailadres
                            </label>
                            <input type="email" class="form-control" id="inputEmailAdres" placeholder="Uw emailadres" />
                        </div>
                        <div class="form-group">
                            <label class="onderwerp" for="onderwerp">
                                Onderwerp
                            </label>
                            <input type="onderwerp" name="" class="form-control" id="inputonderwerp" placeholder="Uw onderwerp" />
                        </div>
                        <div class="form-group">
                            <label class="bricht" for="text">
                                Bericht
                            </label>
                            <input type="text" name="text" class="form-control" id="inputtext" placeholder="Uw bericht" />
                        </div>
                        <button type="submit" class="btn btn-contact-page text-uppercase">
                            verzenden
                        </button> -->
                        <?php echo do_shortcode('[contact-form-7 id="983" title="Contact form 1"]'); ?>
                        <!--====END OF CONTACT FORM====-->
                    </form>
                </div>
                <!-- END OF COLLOMN-2 HERE -->
            </div>
        </div>
    </div><!-- END OF THE CONTAINER HERE -->
</section>
<!--==============END CONTACT SECTION==========-->

<!--=============PLANET SECTION ==========-->
<?php get_template_part('template/content', 'planet-section'); ?>

<!--=============END OF PLANET SECTION ==========-->
<?php get_footer();
?>