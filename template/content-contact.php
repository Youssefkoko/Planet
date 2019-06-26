<?php

// GLOBAL CONTENT OPTIONS
$title_in_contact_section = get_field('title_in_contact_section', 'option');
$content_in_contact_section = get_field('content_in_contact_section', 'option');
?>




<section id="contact-section">
      <div class="container my-3">
        <div class="row">
          <div class="col-lg-6">
            <!--===START CONTACT FORM====-->


            <div class=" contact-wrapper">

            <?php echo do_shortcode('[contact-form-7 id="983" title="Contact form 1"]'); ?>
            </div>
            <!--====END OF CONTACT FORM====-->
            <!--=====END OF COLUNM 6 HERE====-->
          </div>
          <div class="col-lg-6 ">
            <div class="contact-wrapper-2">
              <?php echo $title_in_contact_section; ?>


                  <?php echo substr($content_in_contact_section, 0, 500); ?>

              <div>
                <!-- This Link style is same in all pages, using same code in stylesheet -->
                <a href="<?php echo get_page_link(get_page_by_title("contact")->ID); ?>" class="informatie text-uppercase" type="button">
                meer informatie
                </a>
              </div>
            </div>
            <!-- END OF COLLOMN-6 HERE -->
          </div>
        </div>
      </div>
      <!-- END OF THE CONTAINER HERE -->
    </section>