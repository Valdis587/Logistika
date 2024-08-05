<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'О нас', 'your-textdomain-here' ),
		'id'               => 'onas-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'onas-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'О нас', 'your-textdomain-here' ),
				'default'  => 'О нас',
			),
            array(
				'id'       => 'onas-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'onas-text-left',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'onas-img1',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка 1', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
)
);