<?php

/*  CONSTANTS */
if( !defined( 'GTC_THEME_VERSION' ) ) {
  define( 'GTC_THEME_VERSION', time() );
}

if( !defined( 'GTC_THEME_URI' ) ) {
  define( 'GTC_THEME_URI', get_stylesheet_directory_uri() );
}

if( !defined( 'GTC_THEME_PATH' ) ) {
  define( 'GTC_THEME_PATH', get_stylesheet_directory() );
}

// INCLUDE FILES
$inc_files = array(
  'lib/class-gtc-theme.php',
  'lib/gtc-orbit-cf.php'
);

foreach( $inc_files as $inc_file ){ require_once( $inc_file ); }
