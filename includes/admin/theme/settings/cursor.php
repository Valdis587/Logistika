<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Курсор', 'your-textdomain-here' ),
		'id'         => 'cursor',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'cursor-off',
				'type'     => 'switch',
				'title'    => esc_html__( 'Курсор вкл./выкл.', 'your-textdomain-here' ),
				'default'  => false,
			),
        ),
        )
    );