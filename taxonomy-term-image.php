<?php
/*
Plugin Name: Taxonomy Term Image (Updated)
Plugin URI: https://github.com/hitankar/taxonomy-term-image
Description: Plugin for adding an image upload field to a taxonomy term edit page using WordPress 4.4 taxonomy term meta data. Now support for composer and multiple taxonomies.
Author: daggerhart, hitankar
Version: 3.0.0
*/
namespace Hitankar\TaxonomyTermImage;

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Initialize the plugin by calling for its instance on WordPress action 'init'
 */
function taxonomy_term_image_init() {
	// category is set by default
	Taxonomy_Term_Image::instance(array('category'));
}
add_action( 'init', __NAMESPACE__ . '\\taxonomy_term_image_init' );

