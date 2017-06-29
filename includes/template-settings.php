<?php

	/*	
	*	Tourmaster Plugin
	*	---------------------------------------------------------------------
	*	choosing template
	*	---------------------------------------------------------------------
	*/

	add_filter( 'template_include', 'tourmaster_template_registration', 9999 );
	if ( !function_exists('tourmaster_template_registration') ) {
		function tourmaster_template_registration( $template ){
			global $tourmaster_template;
			$tourmaster_template = false;

			// archive template.
			if ( is_tax( 'tour_category' ) || is_tax( 'tour_tag' ) ) {
				$tourmaster_template = 'archive';
				$template = TOURMASTER_LOCAL . '/single/archive.php';
			} else if ( isset( $_GET['tour-search'] ) ) {
				$tourmaster_template = 'search';
				$template = TOURMASTER_LOCAL . '/single/search.php';
			}else {
				// for user page
				/*
				$user_template = tourmaster_get_option('general', 'user-page', '');
				if( empty($user_template) ){
					if( is_front_page() && isset($_GET['tourmaster-user']) ){
						$tourmaster_template = 'user';
						$template = TOURMASTER_LOCAL . '/single/user.php';
					}
				}else{
					if( is_page() && get_the_ID() == $user_template ){
						$tourmaster_template = 'user';
						$template = TOURMASTER_LOCAL . '/single/user.php';
					}
				}

				// for login page
				$login_template = tourmaster_get_option('general', 'login-page', '');
				if( empty($login_template) ){
					if( is_front_page() && isset($_GET['tourmaster-login']) ){
						$tourmaster_template = 'login';
						$template = TOURMASTER_LOCAL . '/single/login.php';
					}
				}else{
					if( is_page() && get_the_ID() == $login_template ){
						$tourmaster_template = 'login';
						$template = TOURMASTER_LOCAL . '/single/login.php';
					}
				}

				// for registration page
				$register_template = tourmaster_get_option('general', 'register-page', '');
				if( empty($register_template) ){
					if( is_front_page() && isset($_GET['tourmaster-register']) ){
						$tourmaster_template = 'register';
						$template = TOURMASTER_LOCAL . '/single/register.php';
					}
				}else{
					if( is_page() && get_the_ID() == $register_template ){
						$tourmaster_template = 'register';
						$template = TOURMASTER_LOCAL . '/single/register.php';
					}
				}

				// for payment page
				$payment_template = tourmaster_get_option('general', 'payment-page', '');
				if( empty($payment_template) ){
					if( is_front_page() && isset($_GET['tourmaster-payment']) ){
						$tourmaster_template = 'payment';
						$template = TOURMASTER_LOCAL . '/single/payment.php';
					}
				}else{
					if( is_page() && get_the_ID() == $payment_template ){
						$tourmaster_template = 'payment';
						$template = TOURMASTER_LOCAL . '/single/payment.php';
					}
				}
				*/

			}

			/*
			// check if is authorize for that template
			if( $tourmaster_template == 'user' && !is_user_logged_in() ){
				wp_redirect(tourmaster_get_template_url('login'));
				exit;
			}else if( ($tourmaster_template == 'login' || $tourmaster_template == 'register') && is_user_logged_in() ){
				wp_redirect(tourmaster_get_template_url('user'));
				exit;
			}

			if( $tourmaster_template == 'payment' ){
				do_action('goodlayers_payment_page_init');
			}
			*/
			return $template;
		} // tourmaster_template_registration
	} // function_exists


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

	// apply page template.
	add_filter( 'page_template', 'tourmaster_page_template_booking' );
	if( !function_exists('tourmaster_page_template_booking') ) {
		function tourmaster_page_template_booking( $page_template ) {
			global $tourSettings;
			$booking_page = $tourSettings['tm_tour_page_template'];
			if ( $booking_page && is_page( $booking_page ) ) {
				$page_template = TOURMASTER_SINGLE_LOCAL . '/page-template-booking-tour.php';
			}
			return $page_template;

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