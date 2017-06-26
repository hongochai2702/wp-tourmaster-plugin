<?php

	/*	
	*	Tourmaster Plugin
	*	---------------------------------------------------------------------
	*	choosing template
	*	---------------------------------------------------------------------
	*/

	add_filter( 'template_include', 'tourmaster_template_registration', 9999 );
	if ( !function_exists('tourmaster_template_registration') ) {

		global $tourmaster_template;
		$tourmaster_template = false;

		// archive template.
		if ( is_tax( 'tour_category' ) || is_tax( 'tour_tag' ) ) {
			$tourmaster_template = 'archive';
			$template = TOURMASTER_LOCAL . '/single/archive.php';
		} else if ( isset( $_GET['tour-search'] ) ) {
			$tourmaster_template = 'search';
			$template = TOURMASTER_LOCAL . '/single/search.php';
		}
	}

	// apply single template filter
	add_filter('single_template', 'tourmaster_tour_template');
	if( !function_exists('tourmaster_tour_template') ){
		function tourmaster_tour_template( $template ){

			if( get_post_type() == 'tour' ){
				$template = TOURMASTER_LOCAL . '/single/tour.php';
			}

			return $template;
		}
	}

	// add class for each plugin's template 
	add_filter('body_class', 'tourmaster_template_class');
	if( !function_exists('tourmaster_template_class') ){
		function tourmaster_template_class( $classes ){

			global $tourmaster_template;
			if( !empty($tourmaster_template) ){
				$classes[] = 'tourmaster-template-' . $tourmaster_template;
			}
			return $classes;

		}
	}