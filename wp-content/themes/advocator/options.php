<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'rescue'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$numbers_array = array(
		'1' => __('One', 'rescue'),
		'2' => __('Two', 'rescue'),
		'3' => __('Three', 'rescue'),
		'4' => __('Four', 'rescue'),
		'5' => __('Five', 'rescue')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'rescue'),
		'two' => __('Pancake', 'rescue'),
		'three' => __('Omelette', 'rescue'),
		'four' => __('Crepe', 'rescue'),
		'five' => __('Waffle', 'rescue')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bdb7eb' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/img/';

	$options = array(); 

/*----------------------------------------------------*/
/*  General Settings
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('General', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo Image', 'rescue'),
		'desc' => __('Upload your logo image. Recommended width: 200px.', 'rescue'),
		'id' => 'logo_image',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Show Donation Button?', 'rescue'),
		'desc' => __('Check here if you want the donation button displayed at the top of the site.', 'rescue'),
		'std' => '1',
		'id' => 'donation_button_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Donation Button Text', 'rescue'),
		'desc' => __('The text to be displayed on the donation button.', 'rescue'),
		'id' => 'donate_button_text',
		'std' => 'Donate Now',
		'type' => 'text');

	$options[] = array(
		'name' => __('Donation Button Link', 'rescue'),
		'desc' => __('The direct link to your donation page. Recommended Donation Plugin: <a href="http://wordpress.org/plugins/seamless-donations/">Seamless Donations</a>', 'rescue'),
		'id' => 'donation_button_link',
		'std' => '#',
		'type' => 'text');

	$options[] = array(
		'name' => __('Footer Copyright', 'rescue'),
		'desc' => __('Enter copyright details for display in the footer. Copyright character ( &#169; ) and current year will automatically appear.', 'rescue'),
		'id' => 'footer_copyright',
		'std' => 'Rescue themes. All rights reserved',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Main Color Scheme', 'rescue'),
		'desc' => __('Change the main site color scheme. The default is a lovely green: #1FA67A ', 'rescue'),
		'id' => 'main_color_scheme',
		'std' => '#1FA67A',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Main Buttons Hover', 'rescue'),
		'desc' => __('Change the main site color scheme for link hover. The default is a lovely green: #bdb7eb ', 'rescue'),
		'id' => 'main_buttons_hover',
		'std' => '#bdb7eb',
		'type' => 'color' );

	$options[] = array(
		'name' => __('General Links Hover', 'rescue'),
		'desc' => __('Change the navigation color for link hover. The default is a lovely green: #bdb7eb ', 'rescue'),
		'id' => 'general_links_hover',
		'std' => '#bdb7eb',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Donation Button Color', 'rescue'),
		'desc' => __('Change the donation button color. The default is this yellowish hue: #f1c40f ', 'rescue'),
		'id' => 'donation_button_color',
		'std' => '#f1c40f',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Donation Button Bottom Border Color', 'rescue'),
		'desc' => __('Change the donation button bottom border color. The default is a complimentary yellow: #e2b709 ', 'rescue'),
		'id' => 'donation_button_border',
		'std' => '#e2b709',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Donation Button Color Hover', 'rescue'),
		'desc' => __('Change the donation button hover color. The default is this yellowish hue: #fbce1c ', 'rescue'),
		'id' => 'donation_button_color_hover',
		'std' => '#fbce1c',
		'type' => 'color' );

	$options[] = array(
		'name' => __('Donation Button Bottom Border Color Hover', 'rescue'),
		'desc' => __('Change the donation button bottom border hover color. The default is a complimentary yellow: #e2b709 ', 'rescue'),
		'id' => 'donation_button_border_hover',
		'std' => '#e2b709',
		'type' => 'color' );

	// $options[] = array(
	// 	'name' => __('Custom CSS', 'rescue'),
	// 	'desc' => __('Enter any custom CSS in this box.', 'rescue'),
	// 	'id' => 'custom_css',
	// 	'std' => '',
	// 	'type' => 'textarea');

/*----------------------------------------------------*/
/*  Home Hero Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Hero', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Home Slider Static Image', 'rescue'),
		'desc' => __('If you want a static image instead of a slider/widgetized area on the home page, upload it here. Recommended width: 3000x1200. If no static image is set here, this area on the home page becomes widgetized. Add content to this area in <b>Appearance > Widgets > Home Hero Area</b>. Recommended Slider Plugin: <a href="http://wordpress.org/plugins/soliloquy-lite/">Soliloquy</a>', 'rescue'),
		'id' => 'home_static_image',
		'std' => $imagepath . 'smiling_woman.jpg',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Info Box Background Color', 'rescue'),
		'desc' => __('Change the color of the top home page info box. The default is: #34495e ', 'rescue'),
		'id' => 'home_top_bg',
		'std' => '#34495e',
		'type' => 'color' );

/*----------------------------------------------------*/
/*  Home Events Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Events', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Home Events Area?', 'rescue'),
		'desc' => __('Check here if you want to display the Events area on the home page. Add content to this area in <b>Appearance > Widgets > Home Events Area</b>. Recommended Events Plugin: <a href="http://wordpress.org/plugins/the-events-calendar/">The Events Calendar</a>', 'rescue'),
		'std' => '1',
		'id' => 'home_events_area_show',
		'type' => 'checkbox');

/*----------------------------------------------------*/
/*  Home Latest News Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Latest News', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Latest news Area?', 'rescue'),
		'desc' => __('Check here if you want to display the Latest News area on the home page.', 'rescue'),
		'std' => '1',
		'id' => 'home_news_area_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Home Latest News Title', 'rescue'),
		'desc' => __('Enter the title for the home page Latest News area.', 'rescue'),
		'id' => 'home_news_title',
		'std' => 'Latest News',
		'type' => 'text');

	$options[] = array(
		'name' => __('Select Number of posts on home page', 'rescue'),
		'desc' => __('', 'rescue'),
		'id' => 'home_blog_num_select',
		'std' => 'one',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $numbers_array);

	$options[] = array(
		'name' => __('Home News Button Link', 'rescue'),
		'desc' => __('Enter the direct link to your blog page.', 'rescue'),
		'id' => 'home_news_link',
		'std' => '#',
		'type' => 'text');

/*----------------------------------------------------*/
/*  Home Gallery Area
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Home: Gallery', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Show the Home Gallery Area?', 'rescue'),
		'desc' => __('Check here if you want to display the Gallery area on the home page. Make sure that you activate the <a href="http://rescuethemes.com/plugins/">Rescue Portfolio Plugin</a>', 'rescue'),
		'std' => '1',
		'id' => 'home_gallery_area_show',
		'type' => 'checkbox');

	$options[] = array(
		'name' => __('Home Gallery Area Title', 'rescue'),
		'desc' => __('The title displayed at the top of the gallery area on the home page. ', 'rescue'),
		'id' => 'home_gallery_title',
		'std' => 'Latest Gallery Images',
		'type' => 'text');

	$options[] = array(
		'name' => __('Home Gallery Button Link', 'rescue'),
		'desc' => __('Enter the direct link to your image gallery page. This is the URL of the page where you entered the Rescue Portfolio shortcode: [rescue_portfolio]', 'rescue'),
		'id' => 'home_gallery_link',
		'std' => '#',
		'type' => 'text');

/*----------------------------------------------------*/
/*  Blog Page Tab
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Blog Page', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Blog Page Title', 'rescue'),
		'desc' => __('The title displayed at the top of the blog page.', 'rescue'),
		'id' => 'blog_title',
		'std' => 'News and Updates',
		'type' => 'text');

/*----------------------------------------------------*/
/*  Social Tab
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Social Media Footer Icons', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Twitter', 'rescue'),
		'desc' => __('Enter your Twitter profile link.', 'rescue'),
		'id' => 'twitter_icon',
		'std' => 'https://twitter.com/rescuethemes',
		'type' => 'text');

	$options[] = array(
		'name' => __('Facebook', 'rescue'),
		'desc' => __('Enter your Facebook link.', 'rescue'),
		'id' => 'facebook_icon',
		'std' => 'https://www.facebook.com/RescueThemes',
		'type' => 'text');

	$options[] = array(
		'name' => __('Google+', 'rescue'),
		'desc' => __('Enter your Google Plus profile link.', 'rescue'),
		'id' => 'google_icon',
		'std' => 'https://plus.google.com/u/1/+rescuethemes/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Instagram', 'rescue'),
		'desc' => __('Enter your Instagram profile link.', 'rescue'),
		'id' => 'instagram_icon',
		'std' => 'https://instagram.com/rescuethemes/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Vimeo', 'rescue'),
		'desc' => __('Enter your Vimeo profile link.', 'rescue'),
		'id' => 'vimeo_icon',
		'std' => 'https://vimeo.com/rescuethemes/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Youtube', 'rescue'),
		'desc' => __('Enter your Vimeo profile link.', 'rescue'),
		'id' => 'youtube_icon',
		'std' => 'http://www.youtube.com/user/rescuethemes',
		'type' => 'text');

	$options[] = array(
		'name' => __('Pinterest', 'rescue'),
		'desc' => __('Enter your Pinterest profile link.', 'rescue'),
		'id' => 'pinterest_icon',
		'std' => 'http://www.pinterest.com/rescuethemes/',
		'type' => 'text');

/*----------------------------------------------------*/
/*  Custom Styles
/*----------------------------------------------------*/
	$options[] = array(
		'name' => __('Custom Styles', 'rescue'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Custom CSS', 'rescue'),
		'desc' => __('All default styles are located in /css/style.css but you can overide those styles by entering CSS here. It\'s recommended that a <a href="http://codex.wordpress.org/Child_Themes">child theme</a> is used but if that isn\'t possible, add your custom styles here.' , 'rescue'),
		'id' => 'custom_css',
		'type' => 'textarea');


	return $options;
}