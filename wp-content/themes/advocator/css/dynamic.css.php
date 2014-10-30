<?php 
	require_once( trailingslashit( get_template_directory() ). 'inc/options-framework.php' );
    header("Content-type: text/css; charset: UTF-8");
?>

.bottom_header_wrap, 
.bottom_header_wrap nav, 
.bottom_header_wrap .top-bar-section ul, 
.bottom_header_wrap .top-bar.expanded .title-area,
ul.pagination li span.current,
#commentlist .rescue_staff,
.entry-meta .rescue_staff,
.format-quote .entry-content, .format-link .entry-content,
.bottom_header_wrap .top-bar-section li:not(.has-form) a:not(.button), 
.bottom_header_wrap .top-bar-section .dropdown li:not(.has-form) a:not(.button),
.search-form input[type="submit"], 
a.tribe-events-read-more,
.single-tribe_events .tribe-events-schedule .tribe-events-cost,
.wpcf7 input[type="submit"],
.page button, .page .button, .widget_recent_entries span, .tribe-events-widget-link a, .content-area .button, .tribe-events-list .tribe-events-event-cost span {
  background-color: <?php echo of_get_option( 'main_color_scheme' ); ?>!important;
}

.content-area .button:hover, .content-area .button:focus,
.search-form input[type="submit"]:hover,
.wpcf7 input[type="submit"]:hover, .tribe-events-widget-link a:hover, .tribe-events-widget-link a:focus  {
  background-color: <?php echo of_get_option( 'main_buttons_hover' ); ?>!important;
}

article .entry-meta a:hover,
ul.pagination li.arrow a,
.tribe-events-widget-link a,
a.tribe-events-read-more:hover,
#rescue_site a:hover, #rescue_site a:focus, .type-post h2.entry-title a:hover, footer.entry_meta .post_details a:hover
{
  color: <?php echo of_get_option( 'main_color_scheme_hover' ); ?>!important;
}

.bottom_header_wrap .bottom_nav a:hover, .content-area a:hover, #site_footer a:hover, .inner_sidebar a:hover {
  color: <?php echo of_get_option( 'general_links_hover' ); ?>!important;
}
.content-area .button:hover {
  color: #ffffff!important;
}

.donation_button .button {
    background-color: <?php echo of_get_option( 'donation_button_color' ); ?>!important;
    border-bottom: 10px solid <?php echo of_get_option( 'donation_button_border' ); ?>!important;
}

.donation_button .button:hover, .donation_button .button:focus {
    background-color: <?php echo of_get_option( 'donation_button_color_hover' ); ?>!important;
    border-bottom: 10px solid <?php echo of_get_option( 'donation_button_border_hover' ); ?>!important;
}

.home_top_bg, .home_top_wrap, .inner_sidebar #mc_signup, .footer_widget #mc_signup {
    background-color: <?php echo of_get_option( 'home_top_bg' ); ?>;
}

<?php echo of_get_option( 'custom_css' ); ?>