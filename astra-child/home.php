<?php get_header();?>

<?php 
  function echo_nav(){
    echo 'Contact';
  }

  add_action('nav_hook', 'echo_nav');

  do_action('nav_hook');
?>

<div class="heading">
  <h1><?php the_title(); ?>!</h1>
</div>


