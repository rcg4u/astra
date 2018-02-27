<?php
/**
 * Register customizer panels & sections.
 *
 * @package     Astra
 * @author      Brainstorm Force
 * @copyright   Copyright (c) 2015, Brainstorm Force
 * @link        http://www.brainstormforce.com
 * @since       Astra 1.2.3
 */

	/**
	 * Section
	 */
	$wp_customize->add_section(
		new Astra_WP_Customize_Section(
			$wp_customize, 'section-learndash',
			array(
				'priority' => 65,
				'title'    => __( 'LearnDash', 'astra' ),
				'panel'    => 'panel-layout',
			)
		)
	);