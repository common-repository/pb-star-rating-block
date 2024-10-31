<?php
/**
 * Plugin Name:       Star Rating Block for Block Editor
 * Description:       Star Rating Block for Block Editor is a Gutenberg block that allows you to add star rating to your post.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           1.0.2
 * Author:            mhimon
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pb-star-rating
 *
 * @package           mh_star_rating
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function mh_star_rating_block_init() {
	register_block_type_from_metadata( __DIR__ );
}
add_action( 'init', 'mh_star_rating_block_init' );
