<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">

 	<div class="row" role="main">

    	<div class="large-12 columns">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Drats! Error 404 - Not Found.', 'rescue' ); ?></h1>
				<div class="taxonomy-description"><p><?php _e( 'Maybe try one of these links or search?', 'rescue' ); ?></p></div>
				<hr> 
			</header><!-- .page-header -->

		</div><!-- .large-12 .columns -->

	</div><!-- .row -->

  <div class="row" role="main">

    <div class="large-12 columns inner_content">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">

				<?php get_search_form(); ?>

				<div class="row">

					<div class="large-4 columns">
    					<h2 class="widgettitle"><?php _e('Archives by Month:', 'rescue') ?></h2>
						
    					<ul>
    						<?php wp_get_archives(array( 'type' => 'monthly', 'limit' => 12 )); ?>
    					</ul>
					</div><!-- .large-4 -->

					<div class="large-4 columns">
					<?php if ( rescue_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Categories', 'rescue' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>
					</div><!-- .large-4 -->

					<div class="large-4 columns">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					</div><!-- .large-4 -->

				</div><!-- .row -->

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- .large-12 .columns .inner_content -->

    </div><!-- .row -->

	</div><!-- #primary -->

<?php get_footer(); ?>