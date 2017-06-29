<?php
/*
Title: Lịch trình chi tiết
Description: Lịch trình chi tiết của tour
Post Type: tour
Lock: true
*/
global $tourSettings;
?>
<!-- Descriptions -->
<p class="description"><?php _e( 'Detailed schedule tour', 'piklist-tour' ); ?></p>
<?php
  if ( $tourSettings['tm_layout_detailed_schedule'][0] == 'title_editor' ) {
    piklist('field', array(
        'type' => 'group'
        ,'field' => 'tour_detailed_schedule'
        ,'label' => __('Detailed schedule tour', 'piklist-tour')
        ,'columns' => 12
        ,'add_more' => true
        ,'fields' => array(
          array(
            'type'          => 'text',
            'field'         => 'tour_detailed_schedule_title',
            'label'         => 'Title detailed schedule',
            'columns'      => 12,
            'description'   => __( 'Enter the title.', 'piklist-tour' ),
            'sanitize'    => array( 
                      array(
                        'type'  => 'text_field'
                      )
                  )
            ,'attributes'   => array(
              'class' => 'small-text'
            )
          )
          ,array(
            'type' => 'editor'
            ,'field' => 'tour_detailed_schedule_content'
            ,'label' => __('Content detailed schedule', 'piklist-tour')
            ,'columns' => 12
            ,'value' => sprintf(__('You can remove the left label when displaying the editor by defining %1$s in the field parameters. This will make it look like the default WordPress editor. To learn about replacing the WordPress editor %2$sread our Tutorial%3$s.', 'piklist-demo'), '<code>\'template\'=>\'field\'</code>', '<a href="http://piklist.com/user-guide/tutorials/replacing-wordpress-post-editor/">', '</a>')
            ,'options' => array(
                'wpautop' => true
                ,'media_buttons' => true
                ,'shortcode_buttons' => true
                ,'tabindex' => ''
                ,'editor_css' => ''
                ,'editor_class' => ''
                ,'teeny' => false
                ,'dfw' => false
                ,'tinymce' => array(
                  'resize' => false
                  ,'wp_autoresize_on' => true
              )
              ,'quicktags' => true
              ,'drag_drop_upload' => true
            )
          )
        )
      ));
  } else if ( $tourSettings['tm_layout_detailed_schedule'][0] == 'editor' ) {
    piklist( 'field', array(
            'type' => 'editor'
            ,'field' => 'tour_detailed_schedule_full_content'
            ,'label' => __('Content detailed schedule', 'piklist-tour')
            ,'columns' => 12
            ,'template' => 'field'
            ,'value' => sprintf(__('You can remove the left label when displaying the editor by defining %1$s in the field parameters. This will make it look like the default WordPress editor. To learn about replacing the WordPress editor %2$sread our Tutorial%3$s.', 'piklist-demo'), '<code>\'template\'=>\'field\'</code>', '<a href="http://piklist.com/user-guide/tutorials/replacing-wordpress-post-editor/">', '</a>')
            ,'options' => array(
                'wpautop' => true
                ,'media_buttons' => true
                ,'shortcode_buttons' => true
                ,'tabindex' => ''
                ,'editor_css' => ''
                ,'editor_class' => ''
                ,'teeny' => false
                ,'dfw' => false
                ,'tinymce' => array(
                  'resize' => false
                  ,'wp_autoresize_on' => true
              )
              ,'quicktags' => true
              ,'drag_drop_upload' => true
            )
    ) );

  } else { echo 'Không có dữ liệu !'; }