<?php
/**
* Plugin name: Viet share
* Plugin URL: https://www.caodem.com
* Description: Share social Zalo, Facebook, Twitter, Pinterest.
* Domain Path: /languages
* Version: 1.3
* Author: ihoan caodem.com
* Author URL: https://www.caodem.com
* License: GPLv3 or later
/**
* Share social Zalo, Facebook, Twitter, Pinterest.
*/
// add hook css Viet Share
function Viet_share_addcss_head() {
wp_enqueue_style( 'vietshare-css', plugins_url( 'css/vietshare-style.css', __FILE__ ), array(), '1.0');
wp_enqueue_script('vietshare-js', 'https://sp.zalo.me/plugins/sdk.js', array(), '1.0');
}
add_action( 'wp_enqueue_scripts', 'Viet_share_addcss_head' );
// khoi tao bang cai dat
$vietshare_options = get_option('vietshare_settings');
// dua muc luc vao content
include( plugin_dir_path( __FILE__ ) . 'inc/vietshare-content.php');
// trinh quan ly admin
include( plugin_dir_path( __FILE__ ) . 'inc/vietshare-admin-page.php');
// the ngon ngu
function viet_share_load_textdomain() {
  load_plugin_textdomain( 'viet-share', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'plugins_loaded', 'viet_share_load_textdomain' );
