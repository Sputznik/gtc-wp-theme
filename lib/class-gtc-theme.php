<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class GTC_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS
    add_filter('the_posts', array( $this, 'show_scheduled_posts' ) ); // SHOW SCHEDULED POSTS IN SINGLE.PHP

    /* ADD SOW FROM THE THEME */
    add_action('siteorigin_widgets_widget_folders', function( $folders ){
      $folders[] = GTC_THEME_PATH.'/so-widgets/';
      return $folders;
    } );

  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('gtc-core-css', GTC_THEME_URI.'/assets/css/main.css', array('sp-core-style'), GTC_THEME_VERSION );

  }

  function show_scheduled_posts( $posts ){
    global $wp_query, $wpdb;

    if( is_single() && $wp_query->post_count == 0 ){
      $posts = $wpdb->get_results( $wp_query->request );
    }

    return $posts;
  }

}

new GTC_THEME;
