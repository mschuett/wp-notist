<?php
/*
Plugin Name: noti.st Shortcodes
Plugin URI: http://mschuette.name/
Description: Defines a shortcode for a noti.st logo and link
Version: 0.1
Author: Martin Schuette
Author URI: http://mschuette.name/
Licence: 2-clause BSD
*/

// Example:
// [noti.st url="https://noti.st/mschuett/vr02LM/writing-ansible-modules"]
function ms_notist_shortcode_handler( $atts ) {
    extract(shortcode_atts( array(
        'url' => 'http://www.noti.st/',
    ), $atts));
    $pluginurl = plugin_dir_url(__FILE__);

    return '<a href="'.$url.'"><img style="height: .5em; padding: 0; margin: 0;" src="'.$pluginurl.'/notist_32px.png" alt="link to noti.st" /></a>';
}

if ( ! shortcode_exists( 'noti.st' ) ) {
    add_shortcode( 'noti.st', 'ms_notist_shortcode_handler');
}

