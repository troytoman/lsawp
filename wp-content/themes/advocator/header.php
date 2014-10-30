<?php
/**
 * The Header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="rescue_site">

<?php do_action( 'before' ); ?>

<div class="top_header_wrap contain-to-grid">
  
  <div class="row">

    <div class="large-3 columns logo">
      <?php if ( of_get_option( 'logo_image' ) ) { //check if there's a logo image ?>

        <a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo of_get_option( 'logo_image' ); ?>" alt="<?php bloginfo('name'); ?>"></a>

      <?php } else { ?>

      <hgroup>  
        <h3 class="logo-text"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a></h3>
      </hgroup>
          
      <?php } ?>

    </div><!-- .large-3 .logo -->

    <!-- Top Nav -->
    <div class="large-6 columns">

      <nav class="top_mini_nav table" data-topbar>
        <section class="top-bar-section">

  			<?php 
  				$defaults = array(
  			        'theme_location' => 'header_top',
  			        'container' => false,
  			        'menu_class' => 'left top_nav',
  			        'depth' => 5,
  			        'fallback_cb' => false,
  			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  			        'walker' => new foundation_walker()
  				);

  				wp_nav_menu( $defaults );
  			?>

        </section><!-- .top-bar-section -->
      </nav><!-- .top_mini_nav -->

    </div><!-- .large-6 -->

    <!-- Search -->
    <div class="large-3 show-for-large-up columns">
        
    <div id="rescue_search" class="rescue_search">
        <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
            <input class="rescue_search-input" placeholder="search" type="search" value="" name="s" id="search">
            <input class="rescue_search-submit" type="submit" value="">
            <span class="rescue_icon-search"></span>
        </form>
    </div><!-- .rescue_search -->

    </div><!-- .large-3 .columns -->

  </div><!-- .row -->

</div><!-- .top_header_wrap -->

<div class="bottom_header_wrap .contain-to-grid">

  <div class="row">

  <?php // Fill variable with dontation button choice
    $button_show = of_get_option( 'donation_button_show', '' ); ?>

    <!-- Bottom Nav -->
    <div class="<?php if ($button_show == '1') : echo 'large-9'; else : echo 'large-12'; endif; ?> columns">
      <nav class="top-bar table" data-topbar data-options="mobile_show_parent_link: true">

          <ul class="title-area">
            <li class="name"></li>
             <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><?php _e('Menu','rescue'); ?></a></li>
          </ul><!-- .title-area -->

          <section class="top-bar-section">

			<?php 
				$defaults = array(
			        'theme_location' => 'header_bottom',
			        'container' => false,
			        'menu_class' => 'left bottom_nav',
			        'depth' => 5,
			        'fallback_cb' => false,
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker' => new foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

          </section><!-- .top-bar-section -->

      </nav><!-- .top-bar -->

    </div><!-- large-9 or large-12 -->

    <?php if ($button_show == '1') : // check if we want donate button visible ?>

    <!-- Donation Button -->
    <div class="large-3 columns">
      <div class="donation_button">
        <a href="<?php echo of_get_option( 'donation_button_link', '#' ); ?>" class="button large" ><?php echo of_get_option( 'donate_button_text', 'Donate Now' ); ?></a>
      </div><!-- .donation_button -->
    </div><!-- .large-3 -->

  <?php endif; // donate button check ?>

  </div><!-- .row -->

</div><!-- .bottom_header_wrap -->
