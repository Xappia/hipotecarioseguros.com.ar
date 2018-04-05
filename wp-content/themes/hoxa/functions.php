<?php

/*
*	Loading DEVN's framework and HUBs library
*	(c) www.devn.co
*
*/

#Load main class
require_once(  get_template_directory().'/cgi/bin.php' );

#Load registration for WP
$devn = new devn();

#To remove xmlrpc.php calls 14-04-2016
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
#jespinoza@xappia.com

#
#
#	END of REGISTRATION
#
#
