<?php
/*
Plugin Name: Slideshare Shortcodes
Plugin URI: http://mschuette.name/
Description: Defines a shortcode for a Slideshare logo and link
Version: 0.1
Author: Martin Schuette
Author URI: http://mschuette.name/
Licence: 2-clause BSD
*/

// Example:
// [slideshare url="http://www.slideshare.net/mschuett/20130927-geekend-ipv6introduction"]
function ms_slideshare_shortcode_handler( $atts ) {
    extract(shortcode_atts( array(
        'url' => 'http://www.slideshare.net/',
    ), $atts));
    $pluginurl = plugin_dir_url(__FILE__);

    return '<a href="'.$url.'"><img style="height: 1em; padding: 0; margin: 0;" src="'.$pluginurl.'/slideshare-32x32.png" alt="link to slideshare" /></a>';
}

if ( ! shortcode_exists( 'slideshare' ) ) {
    add_shortcode( 'slideshare', 'ms_slideshare_shortcode_handler');
}

