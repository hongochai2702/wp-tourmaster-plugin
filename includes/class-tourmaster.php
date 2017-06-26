<?php
if( !defined( 'ABSPATH' ) ) exit; // Exit if acccessed directly.

/**
 * Tourmaster Functions
 * Controls process admin
 *
 * @package     Tourmaster
 * @subpackage  Admin
 * @since       1.0
 */

 class Tourmaster {

	public function __construct() {
		add_filter('piklist_field_templates', array( $this, 'piklist_tour_field_templates' ) );
		add_filter('piklist_post_submit_meta_box_title', array( $this, 'piklist_tour_post_submit_meta_box_title' ), 10, 2);
		add_filter('piklist_post_submit_meta_box', array( $this, 'piklist_tour_post_submit_meta_box' ), 10, 3);
		add_action('piklist_part_process-workflows',  array( $this, 'piklist_tour_change_workflow_layout') );
		add_action('piklist_workflow_flow_append', array( $this, 'piklist_tour_workflow_bar') );
	}

	public function piklist_tour_field_templates($templates) {
		$templates['piklist_tour'] = array(
			'name' => __('User', 'piklist-tour')
			,'description' => __('Default layout for User fields from Piklist tours.', 'piklist-tour')
			,'template' => '[field_wrapper]
			          <div id="%1$s" class="%2$s">
			            [field_label]
			            [field]
			            [field_description_wrapper]
			              <small>[field_description]</small>
			            [/field_description_wrapper]
			          </div>
			        [/field_wrapper]'
		);

		$templates['theme_tight'] = array(
			'name' => __('Theme - Tight', 'piklist-tour')
			,'description' => __('A front end form wrapper example from Piklist tours.', 'piklist-tour')
			,'template' => '[field_wrapper]
			          <div id="%1$s" class="%2$s piklist-field-container">
			            [field_label]
			            <div class="piklist-field">
			              [field]
			              [field_description_wrapper]
			                <span class="piklist-field-description">[field_description]</span>
			              [/field_description_wrapper]
			            </div>
			          </div>
			        [/field_wrapper]'
		);

		return $templates;
	}

	public function piklist_tour_post_submit_meta_box_title($title, $post) {
		switch ($post->post_type) {
			case 'piklist_tour':
			$title = __('Create tour');
			break;
		}
		return $title;
	}


	public function piklist_tour_post_submit_meta_box($show, $section, $post) {
		switch ($post->post_type) {
		  case 'piklist_tour':
		    switch ($section) {
		      /*case 'minor-publishing-actions':
		      case 'misc-publishing-actions':
		      case 'misc-publishing-actions-status':
		      case 'misc-publishing-actions-published':*/
		      case 'misc-publishing-actions-visibility':
	        		$show = false;
		      break;
		    }
		  break;
		}
		return $show;
	}

	public function piklist_tour_workflow_bar($flow) {
	    if ($flow == 'tour_workflow') {
	      $domain = $_SERVER['HTTP_HOST'];
	      $url = 'http://' . $domain . $_SERVER['REQUEST_URI'];
	      $help = piklist::render(
	        'shared/tooltip-help'
	          ,array(
	            'message' => __('By default WorkFlows are setup as TABS. To change them to a BAR, use "Layout : Bar" in your Workflow Header file.', 'piklist-tour')
	          )
	          ,true
	      );

	      if (isset($_REQUEST['piklist_tour_workflow'])) {
	        // remove piklist_tour_workflow parameter
	        $url = preg_replace('/(.*)(?|&)piklist_tour_workflow=[^&]+?(&)(.*)/i', '$1$2$4', $url . '&');
	        
	        echo '<a href="' . $url . '" class="alignright button button-secondary demo-tab-bar">' . __('View as Tabs', 'piklist-tour') . $help . '</a>';
	      }
	      else {
	        echo '<a href="' . $url . '&piklist_tour_workflow=bar" class="alignright button button-secondary demo-tab-bar">' . __('View as Bar', 'piklist-tour') . $help . '</a>';
	      }
	    }
    
  	}

	public function piklist_tour_change_workflow_layout($_part) {
		if (isset($_REQUEST['piklist_tour_workflow']) && $_REQUEST['piklist_tour_workflow'] == 'bar') $_part['data']['layout'] = 'bar';
		return $_part;
	}


} /* End Class */
// Setup Class Tourmaster();
new Tourmaster();
