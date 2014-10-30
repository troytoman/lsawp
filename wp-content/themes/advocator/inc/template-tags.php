<?php
/**
 * Custom template tags for this theme.
 *
 * @package rescue
 */

/*----------------------------------------------------*/
/*  Customize the_excerpt() Output and Length
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_excerpt_more' ) ) :
    function rescue_excerpt_more( $more ) {
        return ' ... <i><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">read more</a></i>';
    }
    add_filter( 'excerpt_more', 'rescue_excerpt_more' );
endif;

if ( ! function_exists( 'rescue_excerpt_length' ) ) :
    function rescue_excerpt_length( $length ) {
        return 80;
    }
    add_filter( 'excerpt_length', 'rescue_excerpt_length', 999 );
endif;

/*----------------------------------------------------*/
/*  Customize readmore link with a few more classes
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_readmore' ) ) :
	function rescue_readmore($content) {

	 	$pattern = "/class=\"more-link\"/";
	  	$replacement = "class=\"more-link button tiny radius round left clearfix\" ";

	    $content = preg_replace($pattern, $replacement, $content);
	    return $content;
	     
	}
	add_action('the_content', 'rescue_readmore');
endif;

/*----------------------------------------------------*/
/*  Display navigation to next/previous set of posts when applicable.
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_paging_nav' ) ) :
function rescue_paging_nav() {

			global $wp_query;

			$total_pages = $wp_query->max_num_pages;  

			if ($total_pages > 1) : 

				$args = array(
					'base' => get_pagenum_link(1) . '%_%', 
					'format' => 'page/%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $total_pages,
					'type' => 'list'
				);

				$return = paginate_links( $args );
				echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );

			endif;

} endif;

/*----------------------------------------------------*/
/*  Display navigation to next/previous post when applicable.
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_post_nav' ) ) :
function rescue_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h5 class="screen-reader-text"><?php _e( 'More Posts', 'rescue' ); ?></h5>
		<div class="nav-links row">
			<?php
				previous_post_link( '<div class="nav-previous large-6 columns">%link</div>', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'rescue' ) );
				next_post_link(     '<div class="nav-next large-6 columns">%link</div>',     _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link',     'rescue' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

/*----------------------------------------------------*/
/*  Prints HTML with meta information for the current post-date/time.
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_posted_on' ) ) :
function rescue_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	// if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
	// 	$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	// }

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	// printf( __( '<span class="posted-on">Published %1$s</span><span class="byline"> by %2$s</span>', 'rescue' ),
	printf( __( '<span class="posted-on">Published %1$s</span>', 'rescue' ),
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	);
}
endif;

/*----------------------------------------------------*/
/*  Template for comments and pingbacks.
/*----------------------------------------------------*/
if ( ! function_exists( 'rescue_comments' ) ) :
    function rescue_comments( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case '' :
        ?>
        <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" class=" clearfix">
                <div class="left">                    
                    <?php echo get_avatar($comment,$size='60',$default='mm' ); ?>                                       
                </div><!-- end left -->
                <div class="right-comments">
                    <div class="comment-text">                      
                        
                        <p class='comment-meta-header'>
                            <?php // Check if comment is by an admin then add badge
                                $comment = get_comment( $comment_id );
                                if ( user_can( $comment->user_id, 'administrator' ) ) : ?> 

                            <span class="rescue_staff"><?php _e('Staff', 'rescue'); ?></span>
                            <?php endif; ?>

                            <cite class="fn"><?php echo get_comment_author_link() ?></cite>                     
                            <span class="comment-meta commentmetadata"><?php comment_date(get_option('date_format')); ?></span>
                            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                        </p>
                        
                        <?php if ($comment->comment_approved == '0') : ?><p class="moderated"><?php _e('Your comment is awaiting moderation.','rescue'); ?></p><?php endif; ?>
                        <div class="comment_content">
                        <?php comment_text() ?>
                        </div>

                    </div><!--//end comment-text-->             
                </div><!--//end right-comments -->
            </div>
            
        <?php
            break;
            case 'pingback'  :
            case 'trackback' :
        ?>
            <li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
            <div id="comment-<?php comment_ID(); ?>" class="clearfix">
                    <?php echo "<div class='author'><em>" . __('Trackback:','rescue') . "</em> ".get_comment_author_link()."</div>"; ?>
                    <?php echo strip_tags(substr(get_comment_text(),0, 110)) . "..."; ?>
                    <?php comment_author_url_link('', '<small>', '</small>'); ?>
             </div>
            <?php
            break;
        endswitch;
    }
    endif;

/*----------------------------------------------------*/
/*  Returns true if a blog has more than 1 category.
/*----------------------------------------------------*/
function rescue_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so rescue_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so rescue_categorized_blog should return false.
		return false;
	}
}

/*----------------------------------------------------*/
/*  Flush out the transients used in rescue_categorized_blog.
/*----------------------------------------------------*/
function rescue_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'rescue_category_transient_flusher' );
add_action( 'save_post',     'rescue_category_transient_flusher' );
