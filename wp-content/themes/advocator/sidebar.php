<?php
/**
 * The Sidebar containing the main widget areas.
 *
 */
?>
    <div class="large-4 large-offset-1 columns inner_sidebar">

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('inner_sidebar') ) : ?>
		
			<aside class="widget">
		      <h5 class="widget-title">No Widgets Yet</h5>
		      <p>You can add widgets to this sidebar in the WordPress Admin Area.</p>
			</aside>

	<?php endif; // dynamic sidebar widget ?>

    </div><!-- .inner_sidebar .large-4 -->