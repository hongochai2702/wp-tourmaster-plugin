<?php
/*
Title: Thông tin tour
Post Type: tour
Priority: high
Order: 30
Lock: true
*/
?>

<?php
/*
 * Tạo box nhập giá tour
 * https://piklist.com/learn/doc/text/
 */
	piklist( 'field', array(
				'type'		=> 'select'
				,'field'	=> 'tour_type'
				,'label'	=> __( 'Type of tour', 'pilist-tour' )
				,'description'		=> __( 'Type of tour', 'piklist-tour' )
				,'columns'	=> 12
				,'attributes' => array(
		          'placeholder' => 'Enter the type of tour.'
		        )
		        ,'choices' 	=> array(
						0	=> __( '-- Loại tour --', 'piklist-tour' ) ,
		        		0	=> __( 'Inbound Tour', 'piklist-tour' ) ,
		        		1	=> __( 'Abroad Tour', 'piklist-tour' )
	        		)
			) );

	piklist( 'field', array(
	    'type'          =>  'text',
	    'field'         => 'tour_price',
	    'label'         => 'Price tour',
	    'required' 		=> true,
	    'description'   => 'Nhập giá của tour này',
	    'sanitize'		=> array( 
					array(
						'type'	=> 'text_field'
					)
				)
	    ,'attributes'    => array(
	        'class' => 'tour_price text'
	        ,'placeholder' => 'Enter the price.'
	    ),
	    'columns'       => 12
	) );

	piklist( 'field', array(
		'type'			=> 'group'
		,'field'		=> 'tour_info'
		,'label'		=> __( 'Tour info', 'piklist-tour' )
		,'list'			=> false
		,'description'	=> __( 'A group field enter tour info', 'piklist-tour' )
		,'fields'		=> array(
			array(
				'type'		=> 'select'
				,'field'	=> 'day_time'
				,'label'	=> __( 'Day', 'piklist-tour' )
				,'columns'	=> 6
				,'attributes' => array(
		          'placeholder' => 'Enter the number of days.'
		        )
		        ,'choices' 	=> array(
						0	=> __( '-- Select day', 'piklist-tour' ) ,
		        		1	=> __( '1 day', 'piklist-tour' ) ,
		        		2	=> __( '2 day', 'piklist-tour' ) ,
		        		3	=> __( '3 day', 'piklist-tour' ) ,
		        		4	=> __( '4 day', 'piklist-tour' ) ,
		        		5	=> __( '5 day', 'piklist-tour' ) ,
		        		6	=> __( '6 day', 'piklist-tour' ) ,
		        		7	=> __( '7 day', 'piklist-tour' ) ,
		        		8	=> __( '8 day', 'piklist-tour' ) ,
		        		9	=> __( '9 day', 'piklist-tour' ) ,
		        		10	=> __( '10 day', 'piklist-tour' )
	        		)
			)
			,array(
				'type'		=> 'select'
				,'field'	=> 'night_time'
				,'label'	=> __( 'Night', 'piklist-tour' )
				,'columns'	=> 6
				,'attributes' => array(
		          'placeholder' => 'Enter the number of nights.'
		        )
		        ,'choices' 	=> array(
		        		0	=> '-- Select night --' ,
		        		1	=> __( '1 night', 'piklist-tour' ) ,
		        		2	=> __( '2 night', 'piklist-tour' ) ,
		        		3	=> __( '3 night', 'piklist-tour' ) ,
		        		4	=> __( '4 night', 'piklist-tour' ) ,
		        		5	=> __( '5 night', 'piklist-tour' ) ,
		        		6	=> __( '6 night', 'piklist-tour' ) ,
		        		7	=> __( '7 night', 'piklist-tour' ) ,
		        		8	=> __( '8 night', 'piklist-tour' ) ,
		        		9	=> __( '9 night', 'piklist-tour' ) ,
		        		10	=> __( '10 night', 'piklist-tour' )
	        		)
			)
			,array(
			    'type'          => 'text',
			    'field'         => 'tour_departure_day',
			    'label'         => 'Departure Day',
			    'sanitize'		=> array( 
					array(
						'type'	=> 'text_field'
					)
				)
			    ,'attributes'    => array(
			        'placeholder' => 'Example: T2 & T6 weekly.'
			    ),
			    'columns'       => 6
			)
			,array(
			    'type'          => 'number'
			    ,'field'        => 'tour_number_people'
			    ,'label'        => 'Number of people'
			    ,'description'  => __( 'Enter the date of departure.', 'piklist-tour' )
			    ,'value'		=> 2
			    ,'attributes' 	=> array(
			      'class' => 'small-text'
			      ,'step' => 1
			      ,'min' => 1
			      ,'placeholder' => 'Example: 2.'
			    )
			    ,'columns'       => 6
			)
		)
	) );

	piklist('field', array(
	    'type' => 'checkbox'
	    ,'field' => 'tour_accompanied_service'
	    ,'label' => __('Accompanied service', 'piklist-tour')
	    ,'description'  => __( 'Enter the date of departure.', 'piklist-tour' )
	    ,'choices' => array(
	      'insurrance' => __('Bảo hiểm', 'piklist-tour')
	      ,'meal_program' => __('Bữa ăn theo chương trình', 'piklist-tour')
	      ,'tour_guide' => __('Hướng dẫn viên', 'piklist-tour')
	      ,'tickets_visit' => __('Vé thăm quan', 'piklist-tour')
	      ,'shuttle' => __('Xe đưa đón', 'piklist-tour')
	    )
	  ));

	piklist( 'field', array(
		'type'	=>	'file'
		,'field'	=> 'tour_gallery_images'
		,'description'  => __( 'Enter the date of departure.', 'piklist-tour' )
		,'scope'	=> 'post_meta'
		,'label'	=> __( 'Upload Gallery Images', 'piklist-tour' )
		,'options'	=> array(
				'model_title'	=>	__( 'Add Images(s)', 'piklist-tour' )
				,'button'		=>	__( 'Add', 'pilist-tour' )
			)
	) );
