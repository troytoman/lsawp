<?php if( !function_exists ('rescue_shortcodes_scripts') ) :

	function rescue_shortcodes_scripts() {

		wp_enqueue_script( 'jquery' );

		wp_register_script('rescue_wow', plugin_dir_url( __FILE__ ) . 'js/wow.min.js', array ( 'jquery'), '1.0', true );
		wp_register_script('rescue_tabs', plugin_dir_url( __FILE__ ) . 'js/rescue_tabs.js', array ( 'jquery', 'jquery-ui-tabs'), '1.0', true );
		wp_register_script('rescue_donation_tabs', plugin_dir_url( __FILE__ ) . 'js/rescue_donation_tabs.js', array ( 'jquery', 'jquery-ui-tabs'), '1.0', true );
		wp_register_script('rescue_toggle', plugin_dir_url( __FILE__ ) . 'js/rescue_toggle.js', 'jquery', '1.0', true );
		wp_register_script('rescue_accordion', plugin_dir_url( __FILE__ ) . 'js/rescue_accordion.js', array ( 'jquery', 'jquery-ui-accordion'), '1.0', true );
		wp_register_script('rescue_googlemap',  plugin_dir_url( __FILE__ ) . 'js/rescue_googlemap.js', array('jquery'), '1.0', true );
		wp_register_script('rescue_googlemap_api', 'https://maps.googleapis.com/maps/api/js?sensor=false', array('jquery'), '1.0', true );
		wp_register_script('rescue_progressbar', plugin_dir_url( __FILE__ ) . 'js/rescue_progressbar.js', array ( 'jquery' ), '1.0', true );
		wp_register_script('rescue_waypoints', plugin_dir_url( __FILE__ ) . 'js/waypoints.min.js', array ( 'jquery' ), '1.0', true );

		wp_register_style('rescue_animate', plugin_dir_url( __FILE__ ) . 'css/animate.css' );
        wp_enqueue_style( 'font_awesome', plugin_dir_url( __FILE__ ) . 'css/font-awesome.min.css', array(), '4.1.0', 'all' );
		wp_enqueue_style('rescue_shortcode_styles', plugin_dir_url( __FILE__ ) . 'css/rescue_shortcodes_styles.css' );

	}
	add_action('wp_enqueue_scripts', 'rescue_shortcodes_scripts');

endif;
