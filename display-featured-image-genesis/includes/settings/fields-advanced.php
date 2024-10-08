<?php

return array(
	array(
		'id'      => 'backstretch_hook',
		'title'   => __( 'Backstretch Image Hook', 'display-featured-image-genesis' ),
		'section' => 'advanced',
		'choices' => array(
			'genesis_before_header'               => 'genesis_before_header',
			'genesis_header'                      => 'genesis_header',
			'genesis_after_header'                => 'genesis_after_header ' . __( '(default)', 'display-featured-image-genesis' ),
			'genesis_before_content_sidebar_wrap' => 'genesis_before_content_sidebar_wrap',
			'genesis_before_content'              => 'genesis_before_content',
		),
		'type'    => 'select',
		'skip'    => true,
	),
	array(
		'id'          => 'backstretch_priority',
		'title'       => __( 'Backstretch Image Priority', 'display-featured-image-genesis' ),
		'section'     => 'advanced',
		'label'       => '',
		'min'         => 1,
		'max'         => 100,
		'description' => __( 'Default: 10', 'display-featured-image-genesis' ),
		'type'        => 'number',
		'skip'        => true,
	),
	array(
		'id'          => 'large_hook',
		'title'       => __( 'Large Image Hook', 'display-featured-image-genesis' ),
		'section'     => 'advanced',
		'choices'     => $this->large_hook_options(),
		'description' => __( 'Changing this hook only affects single post/page output, due to overlap/conflict with archive page output.', 'display-featured-image-genesis' ),
		'type'        => 'select',
		'skip'        => true,
	),
	array(
		'id'          => 'large_priority',
		'title'       => __( 'Large Image Priority', 'display-featured-image-genesis' ),
		'section'     => 'advanced',
		'label'       => '',
		'min'         => 1,
		'max'         => 100,
		'description' => __( 'Default: 12', 'display-featured-image-genesis' ),
		'type'        => 'number',
		'skip'        => true,
	),
);
