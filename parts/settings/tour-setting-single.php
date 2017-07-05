<?php
/*
Title: Cấu hình trang chi tiết tour
Order: 20
Tab: Layout
Sub Tab: Single Tour
Setting: tour_settings
Flow: Tour Workflow
*/
?>
<div class="piklist-demo-highlight">
  <?php _e('Text fields are at the core of most forms, and easily created with Piklist. Tooltip help can be added to any field with one line of code.', 'piklist-demo');?>
</div>
<?php
  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'tm_layout_detailed_schedule'
    ,'label' => __('Kiểu bố cục chi tiết tour', 'piklist-tour')
    ,'description' => __('Kiểu bố cục chi tiết tour', 'piklist-tour')
    ,'help' => __('Kiểu bố cục chi tiết tour', 'piklist-tour')
    ,'value' => 'editor'
    ,'list' => false
    ,'choices' => array(
      'editor' => __('Editor Full', 'piklist-tour')
      ,'title_editor' => __('Title Editor', 'piklist-tour')
      ,'hide' => __('Hidden', 'piklist-tour')
    )
  ));
  
  piklist('field', array(
    'type' => 'radio'
    ,'field' => 'tm_single_custom_tab_status'
    ,'label' => __('Hiện thị tab tùy chọn', 'piklist-tour')
    ,'description' => __('Hiện thị tab tùy chọn', 'piklist-tour')
    ,'help' => __('Kiểu bố cục chi tiết tour', 'piklist-tour')
    ,'value' => 0
    ,'list' => false
    ,'choices' => array(
                0 => __( 'No', 'piklist-tour' ),
                1 => __( 'Yes', 'piklist-tour' )
            )
  ));

  piklist('shared/code-locater', array(
    'location' => __FILE__
    ,'type' => 'Settings Section'
  ));