<?php
/*
Plugin Name: cc lilly medonline at
Description: Makes pages, posts, categories, and posts in defined categories, and with defined tags and rss public. Member plugin MUST NOT set to private site.
Version: 1.4.8 
*/

if ( ! defined( 'ABSPATH' ) )
exit;

/**
 * Return boolean: whether the actual page is allowed to be accessed publicly
 * or not.
  */
function get_lilly_public_page() {
	$lilly_include = WP_PLUGIN_DIR . '/Shared-Includes/inc/lilly-public-pages/lilly-public-pages.php';
	if( file_exists( $lilly_include ) )
	include( $lilly_include );
}

$blog_id = get_current_blog_id();
if ($blog_id == 33) {
	get_lilly_public_page();
}
//test

