<?php
/**
 * The template for displaying Search Results pages.
 *
 */

get_header(); ?>

<section id="primary" class="content-area">

 	<div class="row" role="main">

    	<div class="large-12 columns">

			<header class="page-header">
				<h1 class="page-title">
					<?php printf( __( 'Search Results for: %s', 'rescue' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
				<hr> 
			</header><!-- .page-header -->

		</div><!-- .large-12 .columns -->
	</div><!-- .row -->

  <div class="row" role="main">

    <div class="large-7 columns inner_content">

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php rescue_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

    </div><!-- .inner_content .large-7 -->

	<?php get_sidebar(); ?>

  </div><!-- .row -->

</section><!-- #primary -->

<?php get_footer(); ?>
