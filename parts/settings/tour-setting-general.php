<?php
/*
Title: Cấu hình chung
Order: 20
Tab: General
Sub Tab: General
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
        $pages_data[$page->ID] = $page->post_title;
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