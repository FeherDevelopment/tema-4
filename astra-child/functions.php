<?php
// Concatenation is necessary, because get_stylesheet_directory_uri() only follows path and stop at the astra-child folder. The concatenation command . '/style.css' is necessary to link the path to style.css file. In the function bellow we link our stylesheet file to the WP, so that WP can recongnise and aply the stylesheet code.
function fhr_add_style() {
    wp_enqueue_style('fhr-academy-style', get_stylesheet_directory_uri() . '/style.css');
}

// Next step beside the function fhr_add_style(), because WP still doesn't apply our stylesheet code, it will be to add the what is called Hooks: we have two big cattegories of hooks in WP, like actions and filters hooks. 
add_action('wp_enqueue_scripts', 'fhr_add_style');



// Example to edit header: You can copy the header code from the original theme and paste it on the chid theme.
 function add_before_header(){
     echo '<nav><a href="#" alt="">Contact<a></nav>';
 }
  add_action('astra_header_before', 'add_before_header');

  add_action( 'admin_bar_menu', 'admin_bar_item', 500 );
  function admin_bar_item ( WP_Admin_Bar $admin_bar ) {
      if ( ! current_user_can( 'manage_options' ) ) {
          return;
      }
      $admin_bar->add_menu( array(
          'id'    => 'menu-id',
          'parent' => null,
          'group'  => null,
          'title' => 'Menu Title', //you can use img tag with image link. it will show the image icon Instead of the title.
          'href'  => admin_url('admin.php?page=custom-page'),
          'meta' => [
              'title' => __( 'Menu Title', 'textdomain' ), //This title will show on hover
          ]
      ) );
  } 