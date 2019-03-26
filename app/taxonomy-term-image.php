<?php
namespace Hitankar\TaxonomyTermImage;

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Initialize the plugin by calling for its instance on WordPress action 'init'
 */
function taxonomy_term_image_init() {
	Taxonomy_Term_Image::instance();
}
add_action( 'init', __NAMESPACE__ . '\\taxonomy_term_image_init' );

