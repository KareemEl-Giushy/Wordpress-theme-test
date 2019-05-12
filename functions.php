<?php

  /*
  ** Adding my libs and styles
  ** added by kareem salem
  ** using wp_enqueue_style();
  */

  function adding_style() {

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/all.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');

  }

  /*
  ** Adding my libs and styles
  ** added by kareem salem
  ** using wp_enqueue_style();
  */

  function adding_script() {
    // delete the current stored jquery
    wp_deregister_script('jquery');
    // re-register the jquery but this time in the footer
    // wp_register_script(string, string, array, (bool|string|NULL), bool)
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), [], '', true);
    // enqueue the jquery library again
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/js/popper.min.js', [], false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', ['jquery'], false, true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/all.js', [], false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], false, true);

  }

  /*
  ** Adding a hook
  ** added by kareem
  ** using add_action()
  */

  add_action('wp_enqueue_scripts', 'adding_style');
  add_action('wp_enqueue_scripts', 'adding_script');
