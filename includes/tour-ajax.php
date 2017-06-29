<?php
add_action( 'wp_ajax_postgetInfoTour', 'postgetInfoTour_init' );
add_action( 'wp_ajax_nopriv_postgetInfoTour', 'postgetInfoTour_init' );
/*
 * Admin Ajax select status.
 * HAIHN
 */
function postgetInfoTour_init() {
    $tour_id = sanitize_text_field( $_POST['tour_id'] );
    $tour = array();
    if ( isset( $tour_id ) && !empty( $tour_id ) ) {
    	$tour = get_post( $tour_id, ARRAY_A );

    	if ( $tour ) {
    		$response = json_encode($tour ,true);

    		header( "Content-Type: application/json" );
    		echo $response;
    	}
    }
    exit;
}