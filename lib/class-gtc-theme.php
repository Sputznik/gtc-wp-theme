<?php

/**
 * BOOTSTRAPS THEME SPECIFIC FUNCTIONALITIES
 */
class GTC_THEME {

  public function __construct() {

    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );  // LOAD ASSETS

  }

  function assets() {

    // ENQUEUE STYLES
    wp_enqueue_style('gtc-core-css', GTC_THEME_URI.'/assets/css/main.css', array('sp-core-style'), GTC_THEME_VERSION );

  }

}

new GTC_THEME;
