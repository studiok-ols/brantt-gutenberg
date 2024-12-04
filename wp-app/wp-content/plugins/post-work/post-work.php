<?php
/**
 * Plugin Name:       Post Work
 * Description:       Post Work - brantt gutenberg task
 * Requires at least: 6.6
 * Requires PHP:      7.2
 * Version:           1.0.0
 * Author:            Stk
 * Text Domain:       post-work
 *
 * @package CreateBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function create_block_post_work_block_init() {
	register_block_type( __DIR__ . '/build/cta' );
	register_block_type( __DIR__ . '/build/all-posts' );
	register_block_type( __DIR__ . '/build/contents' );
	register_block_type( __DIR__ . '/build/subtitle' );
}
add_action( 'init', 'create_block_post_work_block_init' );
