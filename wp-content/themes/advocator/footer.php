<?php
/**
 * The template for displaying the footer.
 *
 */
?>

<footer id="site_footer">

  <div class="row footer_widget_wrap">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_sidebar') ) : ?>
		
		<div class="large-4 columns footer_widget">
			<aside>
		      <h5>First Footer Widget</h5>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		      <a href="#" class="button tiny radius round right">Learn More</a>
			</aside>
		</div><!-- .large-4 .footer_widget -->

		<div class="large-4 columns footer_widget">
			<aside>
		      <h5>Second Footer Widget</h5>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		      <a href="#" class="button tiny radius round right">Learn More</a>
			</aside>
		</div><!-- .large-4 .footer_widget -->

		<div class="large-4 columns footer_widget">
			<aside>
		      <h5>Third Footer Widget</h5>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		      <a href="#" class="button tiny radius round right">Learn More</a>
			</aside>
		</div><!-- .large-4 .footer_widget -->

	<?php endif; // dynamic footer widget ?>

  </div><!-- .row .footer_widget_wrap -->

  <div class="footer_social">

    <div class="row">
      <div class="large-12 columns">
        <ul>

			<?php $twitter_icon = of_get_option( 'twitter_icon', '' ); if ( $twitter_icon  ) : ?> 
			<li><a href="<?php echo $twitter_icon; ?>"><i class="fa fa-twitter fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $facebook_icon = of_get_option( 'facebook_icon', '' ); if ( $facebook_icon  ) : ?> 
			<li><a href="<?php echo $facebook_icon; ?>"><i class="fa fa-facebook fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $instagram_icon = of_get_option( 'instagram_icon', '' ); if ( $instagram_icon  ) : ?> 
			<li><a href="<?php echo $instagram_icon; ?>"><i class="fa fa-instagram fa-2x"></i></a></li>
			<?php endif; ?>

			<?php $youtube_icon = of_get_option( 'youtube_icon', '' ); if ( $youtube_icon  ) : ?> 
			<li><a href="<?php echo $youtube_icon; ?>"><i class="fa fa-youtube fa-2x"></i></a></li>
			<?php endif; ?>


        </ul>
      </div><!-- .large-12 -->
    </div><!-- .row -->
    
  </div><!-- .footer_social -->

  <div class="footer_copyright">
    <div class="row">

      <div class="large-6 columns copyright">
        <span>&#169; <?php _e('Copyright','rescue'); ?> <?php echo date('Y') . ' '; echo of_get_option( 'footer_copyright', '' ); ?></span>
      </div><!-- .large-6 .copyright -->

      <div class="large-6 columns footer_menu">

			<?php 
				$defaults = array(
			        'theme_location' => 'footer',
			        'container' => false,
			        'menu_class' => '',
			        'depth' => 5,
			        'fallback_cb' => false,
			        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			        'walker' => new foundation_walker()
				);

				wp_nav_menu( $defaults );
			?>

      </div><!-- .large-6 .footer_menu -->

    </div><!-- .row -->
    
  </div><!-- .footer_copyright -->

</footer><!-- .site_footer -->

<?php wp_footer(); ?>

</body>
</html>