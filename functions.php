<?php

/* enqueue scripts and style from parent theme */

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( 'hello-elementor' ),
        wp_get_theme()->get('2.4.1') // this only works if you have Version in the style header
    );
}


// add support Widget

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Website Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
	echo '
	<div style="text-align:center;">
		<a href="https://bryckroad.com/contact" title="Contact Brykroad Creative" target="_blank">
			<img src="https://bryckroad.com/wp-content/uploads/2020/06/bryckroad-creative-logo-horizontal.png" alt="Brykroad Creative" style="width:50%;height:auto;margin:10px auto;">
		</a>
	</div>
	<p>
		<a href="https://bryckroad.com/contact" title="Contact Brykroad Creative" target="_blank">Contact Brykroad Creative</a> for support with your website. Our services include: search engine optimization (SEO), email marketing, Google and Bing advertising, custom web development, logo design and branding, graphic design, brochure/catalog design, marketing and advertising.
	</p>
	<p><strong><a href="https://bryckroad.com/contact" title="Contact Brykroad Creative" target="_blank">Contact Brykroad Creative</a></strong></p>
	';
}
?>
