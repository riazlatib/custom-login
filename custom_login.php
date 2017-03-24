<?php
/*
Plugin Name: Custom Login
Plugin URI: http://riazlatib.com
Description: A custom login plugin that allows you to customize the login page
Version: 0.1
Author: Riaz Latib
Author URI: http://riazlatib.com
License: GPL2
*/

function my_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( __FILE__ ) . 'css/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');
?>
