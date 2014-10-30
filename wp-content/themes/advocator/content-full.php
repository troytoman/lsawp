<?php
/**
 * The template used for displaying page content in template-full.php
 *
 */
?>

<?php if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) :  // Check if post has a featured image 
        $thumb = get_post_thumbnail_id();
        $img_url = wp_get_attachment_url( $thumb,'full'); //get img URL
?>

	<div class="featured_image">
		<a href="<?php echo $img_url ?>" class="fancybox image_hover" title="<?php echo get_the_title(); ?>"><?php the_post_thumbnail( 'full_page' );  ?></a>
	</div><!-- .featured_image -->

<?php endif; // featured image check ?>

<article id="post-<?php the_ID(); ?> full_width_post" <?php post_class(); ?>>
	
	<header class="entry-header">
		<h2 class="entry-title full_width_title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rescue' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'rescue' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->