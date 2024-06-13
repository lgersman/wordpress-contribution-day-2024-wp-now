<?php
/*
Plugin Name: Plugin-B
Description: This is a simple plugin that displays a greeting message when activated.
Version: 1.0
Author: lars.gersmann@ionos.com
*/

namespace playground\contribution\day\plugin_b;

\add_action('wp_footer', fn() => printf('Hello, this is a simple greeting from plugin %s', __NAMESPACE__));

?>
