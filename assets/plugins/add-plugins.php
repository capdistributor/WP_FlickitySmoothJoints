<?php
// Use this file to inlcude certain essential WP plugins

// Include ACF (Advanced Custom Fields)
if( !class_exists('Acf') ) {
    define( 'ACF_LITE' , false ); // change this to TRUE to hide ACF from client
    include_once('acf/acf.php' );
}

// Include Github Updater
if( !class_exists('Fragen\\GitHub_Updater\\Base') ) {
    define( 'GitHub_Updater' , false ); // change this to TRUE to hide from client
    include_once('github-updater/github-updater.php' );
}

?>
