<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Planet_Gaming
 */

?>
<!doctype html>
<html <?php language_attributes();
      ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
  <?php wp_head();
  ?>
  <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script><script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>< ![endif]-->
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
      <?php esc_html_e('Skip to content', 'planet-gaming'); ?>
    </a>
    <!--===========HEADER===========-->
    <header class="site-header" role="banner">
      <div class="nav-wrapper">
        <!--======NAV BAR START HERE=======-->
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
          <a class="navbar-brand" href="<?php the_permalink(); ?>">
            <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-planetgaming.png" alt="Planet Gaming BV" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarmain">
            <?php wp_nav_menu(array(
              'menu' => 'primary',
              "theme_location" => "primary",
              'items_wrap' => '<ul class="navbar-nav navbar-right">%3$s</ul>',
              "menu_id" => 'main-menu', "depth" => 2,
            ));
            ?>
            <ul class="navbar-nav phone">
              <li class="nav-item ">
                <img alt="Planet Game Phone number" class="phone-pic" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/phone-pic.png" />
                <a class="p-2" href="#">
                  <span class="dagEnNacht">
                    dag en nacht bereikbar
                  </span>
                </a><br>
                <span class="phone-number">0172 24 28 37 </span>
              </li>
            </ul>
          </div>
        </nav>
        <!--====NAV BAR ENDS HERE=====-->
      </div>
    </header>
    <div id="content" class="site-content">