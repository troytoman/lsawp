<?php
/**
 * The template used for displaying content in single.php
 */
?>

<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  // Check if post has a featured image 
        $thumb = get_post_thumbnail_id();
        $img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
?>

	<div class="featured_image">
		<a href="<?php echo $img_url ?>" class="fancybox image_hover" title="<?php echo get_the_title(); ?>"><?php the_post_thumbnail( 'blog_posts' );  ?></a>
	</div><!-- .featured_image -->

<?php endif; // featured image check ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
	<footer>
		<div class="entry-meta">
		<ul><?php $format = get_post_format(); ?>
			<li class="post_format"><span class="rescue_staff"><?php echo ucfirst($format); ?></span></li>
			<li><?php rescue_posted_on(); ?></li>
			<li><?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'rescue' ), __( '1 Comment', 'rescue' ), __( '% Comments', 'rescue' ) ); ?></span>
			<?php endif; ?></li>
			<li><?php edit_post_link( __( 'Edit', 'rescue' ), '<span class="edit-link">', '</span>' ); ?></li>
		</ul>
		</div><!-- .entry-meta -->
	</footer>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Post Pages:', 'rescue' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry_meta">
	<hr>
		<div class="row">

		<div class="large-8 columns post_details">

		<div class="author_details">
		<?php _e('Published by: &nbsp;', 'rescue'); ?> <?php the_author_posts_link(); ?> 
		</div>

		<div class="category_details">
		<?php _e('Posted in: &nbsp;', 'rescue'); ?>
				<?php 
				$category_list = get_the_category_list( __( ', ', 'rescue' ) );
					printf(
						$category_list,
						get_permalink()
					);
				?>
		</div><!-- .category_details -->

		<div class="tags">
			
			<?php the_tags() ?>

		</div>

		</div><!-- .large-8 .post_details -->

		<div class="large-4 columns post_sharing">

		<?php // Checking for Simple Share plugin
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		if ( is_plugin_active( 'simple-share-buttons-adder/simple-share-buttons-adder.php' ) ) : ?>

		<?php echo do_shortcode('[ssba]'); ?>

		<?php endif; ?>

		</div><!-- .large-4 .post_sharing -->

		</div><!-- .row -->
	<hr>
	</footer><!-- .entry_meta -->

</article><!-- #post-## -->
