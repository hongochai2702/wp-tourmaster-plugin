<?php
if( !defined( 'ABSPATH' ) ) exit; // Exit if acccessed directly.

/**
 * Tourmaster_Admin
 * Controls admin setup post type, taxonomies, setting page.
 *
 * @package     Tourmaster
 * @subpackage  Admin
 * @since       1.0
 */

 class Tourmaster_Admin {

	private $_menuSetting	= 'tour_settings';
	private $_menuAddon		= 'tour_addons';
	private $_postType		= 'tour';

	public function __construct() {
		// Setup Custom Post Tour, Taxonomy.
		add_filter( 'piklist_post_types', array( $this, 'piklist_tour_post_types' ) );
		add_filter( 'piklist_taxonomies', array( $this, 'piklist_tour_taxonomies' ) );

		add_filter( 'piklist_admin_pages', array( $this, 'piklist_tour_admin_pages' ) );
		add_filter( 'piklist_assets', array( $this, 'piklist_tour_assets' ) );
	}


	public function piklist_tour_post_types($post_types) {

		$post_types[ $this->_postType ] = array(
		  'labels' => array(
				'name' 				=> 'Tour',
				'singular_name' 	=> 'Tour',
				'add_new' 			=> 'Thêm mới',
				'add_new_item' 		=> 'Thêm tour mới',
				'all_items' 		=> 'Tất cả tour',
				'edit_item' 		=> 'Sửa tour',
				'featured_image' 	=> 'Ảnh đại diện tour',
				'filter_item_list' 	=> 'Lọc danh sách tour',
				'item_list' 		=> 'Danh sách tour',
				'set_featured_image'=> 'Thiết lập ảnh đại diện'
		  )
		  ,'title' 		=> __('Enter a new tour Title')
		  ,'menu_icon' 	=> TOURMASTER_URL . '/parts/img/place_tour_icon.png'
		  ,'page_icon' 	=> TOURMASTER_URL . '/parts/img/place_tour_icon.png'
		  ,'supports' 	=> array('title', 'thumbnail', 'editor', 'comment')
		  ,'public' 	=> true
		  ,'admin_body_class' => array(
			'tourmaser-body'
		  )
		  ,'has_archive' 	=> true
		  ,'rewrite' 		=> array(
			'slug' => 'tour'
		  )
		  ,'capability_type' 	=> 'post'
		  ,'edit_columns' 		=> array(
		  	'date'		=> __('Date', 'piklist-tour')
			,'title' 	=> __('Tour', 'piklist-tour')
			,'author' 	=> __('Assigned to', 'piklist-tour')

		  )
		  ,'hide_meta_box' => array( 'author', 'slug' )
		);

		return $post_types;
	} /*End post type*/


	public function piklist_tour_taxonomies($taxonomies) {
		$taxonomies[] = array(
			'post_type' => $this->_postType
			,'name' => 'tour_category'
			,'configuration' => array(
				'hierarchical' => true
				,'labels' => piklist('taxonomy_labels', 'Tour Category')
				,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
				,'show_ui' => true
				,'query_var' => true
				,'rewrite' => array(
				  'slug' => 'tour-category'
			)
			,'show_admin_column' => true
			,'list_table_filter' => true
			,'meta_box_filter' => true
			,'comments' => true
			)
		);

		$taxonomies['post_tag'] = array(
			'post_type' => $this->_postType
			,'name' => 'tour_tag'
			,'configuration' => array(
				'hierarchical' => false
				,'labels' => piklist('taxonomy_labels', 'Tour Tags')
				,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
				,'show_ui' => true
				,'query_var' => true
				,'rewrite' => array(
				  'slug' => 'tour-tag'
			)
			,'show_admin_column' => true
			,'list_table_filter' => true
			,'meta_box_filter' => true
			)
		);

	return $taxonomies;
	} /* End Taxonomies */


	
	public function piklist_tour_admin_pages($pages) {
		$pages[] = array(
			'page_title' => __('Tour Settings')
			,'menu_title' => __('Tour Settings', 'piklist-tour')
			,'sub_menu' => 'edit.php?post_type=tour'
			,'capability' => 'manage_options'
			,'menu_slug' => $this->_menuSetting
			,'setting' => $this->_menuSetting
			,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-icon.png'
			,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
			,'default_tab' => 'Common'
			// ,'layout' => 'meta-boxes' // NOTE: Uncomment this to use the meta box layout on this settings page!
			,'save_text' => 'Save tour settings'
		);

		$pages[] = array(
			'page_title' => __('Add-on')
			,'menu_title' => __('Add-on', 'piklist-tour')
			,'sub_menu' => 'edit.php?post_type=tour'
			,'capability' => 'manage_options'
			,'menu_slug' => $this->_menuAddon
			,'menu_icon' => piklist('url', 'piklist') . '/parts/img/piklist-icon.png'
			,'page_icon' => piklist('url', 'piklist') . '/parts/img/piklist-page-icon-32.png'
		);

		return $pages;
	}

	public function piklist_tour_assets($assets) {
		array_push($assets['styles'], array(
		  'handle' => 'piklist-tours'
		  ,'src' => TOURMASTER_URL . piklist('url', 'piklist-tours') . '/parts/css/piklist-demo.css'
		  ,'media' => 'screen, projection'
		  ,'enqueue' => true
		  ,'admin' => true
		));

		return $assets;
	}

 } /* End class*/

 // Setup Class Tourmaster_Admin();
new Tourmaster_Admin();