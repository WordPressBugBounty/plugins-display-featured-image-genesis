<?php

return array(
	'term'   => array(
		'title'       => __( 'Display Featured Term Image', 'display-featured-image-genesis' ),
		'description' => __( 'Display a featured term', 'display-featured-image-genesis' ),
		'keywords'    => array(
			__( 'Term', 'display-featured-image-genesis' ),
			__( 'Featured Image', 'display-featured-image-genesis' ),
		),
		'placeholder' => __( 'Please select a term.', 'display-featured-image-genesis' ),
		'required'    => 'term',
	),
	'author' => array(
		'title'       => __( 'Display Featured Author Profile', 'display-featured-image-genesis' ),
		'description' => __( 'Display a featured author', 'display-featured-image-genesis' ),
		'keywords'    => array(
			__( 'Author', 'display-featured-image-genesis' ),
			__( 'Featured Image', 'display-featured-image-genesis' ),
		),
		'placeholder' => __( 'Please select an author.', 'display-featured-image-genesis' ),
		'required'    => 'user',
	),
	'cpt'    => array(
		'title'       => __( 'Display Featured Post Type Archive Image', 'display-featured-image-genesis' ),
		'description' => __( 'Display a featured content type', 'display-featured-image-genesis' ),
		'keywords'    => array(
			__( 'Post Type', 'display-featured-image-genesis' ),
			__( 'Featured Image', 'display-featured-image-genesis' ),
		),
		'placeholder' => __( 'Please select a post type.', 'display-featured-image-genesis' ),
		'required'    => 'post_type',
	),
);
