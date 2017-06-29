<?php
/*
Title: Cấu hình trang danh mục
Order: 20
Tab: Layout
Sub Tab: Layouts
Setting: tour_settings
Flow: Tour Workflow
*/
?>
<div class="piklist-demo-highlight">
  <?php _e('Text fields are at the core of most forms, and easily created with Piklist. Tooltip help can be added to any field with one line of code.', 'piklist-demo');?>
</div>
<?php
  function get_all_page_config() {
    $pages = get_pages();
    $pages_data = array();
    foreach ($pages as $page) {
        $pages_data[$page->post_name] = $page->post_title;
    }
    return $pages_data;
  }

  function get_all_post_of_post_type() {
    $args = array(
      'posts_per_page'   => 5,
      'offset'           => 0,
      'category'         => '',
      'category_name'    => '',
      'orderby'          => 'date',
      'order'            => 'DESC',
      'include'          => '',
      'exclude'          => '',
      'meta_key'         => '',
      'meta_value'       => '',
      'post_type'        => 'wpcf7_contact_form',
      'post_mime_type'   => '',
      'post_parent'      => '',
      'author'     => '',
      'author_name'    => '',
      'post_status'      => 'publish',
      'suppress_filters' => true 
    );
    $posts = get_posts($args);
    $posts_data = array();
    foreach ($posts as $post) {
        $posts_data[$post->ID] = $post->post_title;
    }
    return $posts_data;
  }
?>
<?php
  piklist('field', array(
    'type'          => 'select'
    ,'field'        => 'tm_tour_page_template'
    ,'label'        => __('Chọn trang đặt tour', 'piklist-tour')
    ,'description'  => __('Chọn trang đặt tour', 'piklist-tour')
    ,'value'        => ''
    ,'list'         => false
    ,'choices'      => get_all_page_config()
  ));

  piklist('field', array(
    'type'          => 'select'
    ,'field'        => 'tm_tour_contact_form_template'
    ,'label'        => __('Chọn contact form', 'piklist-tour')
    ,'description'  => __('Chọn contact form', 'piklist-tour')
    ,'value'        => ''
    ,'list'         => false
    ,'choices'      => get_all_post_of_post_type()
  ));

  piklist('field', array(
    'type'          => 'radio'
    ,'field'        => 'tm_tour_layout_archive'
    ,'label'        => __('Kiểu bố cục trang danh mục', 'piklist-tour')
    ,'description'  => __('Kiểu bố cục trang danh mục', 'piklist-tour')
    ,'value'        => 'grid'
    ,'list'         => false
    ,'choices'      => array(
      'list'       => __('List', 'piklist-tour')
      ,'grid'       => __('Grid', 'piklist-tour')
      ,'overlay'    => __('Overlay', 'piklist-tour')
    )
  ));
  
  piklist('field', array(
    'type' => 'select'
    ,'field' => 'tm_tour_columns_archive'
    ,'label' => __('Số cột hiện thị', 'piklist-tour')
    ,'description' => __('Hiện thị bao nhiêu cột trong trang.', 'piklist-tour')
    ,'value' => 4
    ,'choices' => array(
                2 => __( '2 cột', 'piklist-tour' ),
                3 => __( '3 cột', 'piklist-tour' ),
                4 => __( '4 cột', 'piklist-tour' ),
            )
    ,'conditions' => array(
      array(
        'field' => 'tm_tour_layout_archive'
        ,'value' => array( 'grid', 'overlay' )
        //,'reset'  => 'false'  By default, any field that is hidden/shown will have their values reset. To prevent this set reset to false.
        //,'compare'  => '==' // 2 option : == , !=
        //,'type'     => 'toggle' // Piklist supports two condition types; toggle and update.
        //'relation' => and // When using multiple conditions, the default logic is AND. Use this parameter to change the logic to OR.
      )

    )
  ));

  piklist( 'field', array(
          'type'          => 'number'
          ,'field'        => 'tm_tour_number_archive'
          ,'label'        => 'Number'
          ,'description'  => __( 'Enter the number tour.', 'piklist-tour' )
          ,'value'    => 16
          ,'attributes'   => array(
            'class' => 'small-text'
            ,'step' => 1
            ,'min' => 2
            ,'max' => 24
            ,'placeholder' => 'Example: 6.'
          )
      ) );

  piklist('shared/code-locater', array(
    'location' => __FILE__
    ,'type' => 'Settings Section'
  ));