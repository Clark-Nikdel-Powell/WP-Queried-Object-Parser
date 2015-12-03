<?php
/**
 * Created by PhpStorm.
 * User: glenn
 * Date: 12/3/15
 * Time: 11:14 AM
 */

function cnp_parse_queried_object() {

	$object = get_queried_object();

	if ( isset( $object->taxonomy ) ) {
		return cnp_queried_object( 'taxonomy', $object->taxonomy, $object->slug, $object->term_id );
	}

	return cnp_queried_object( 'post_type', $post->post_type, $post->slug, $post->ID );

}

/**
 * @param string $type
 * @param string $object
 * @param string $slug
 * @param int $ID
 *
 * @return object
 */
function cnp_queried_object( $type = '', $object = '', $slug = '', $ID = 0 ) {

	$queried_object = [
		'type'      => $type,
		'wp_object' => $object,
		'slug'      => $slug,
		'ID'        => $ID
	];

	return (object) $queried_object;

}
