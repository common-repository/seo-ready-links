<?php
/* 
 * Plugin Name:   SEO Ready Links Export URL
 * Version:       1.2
 * Plugin URI:    https://www.ultranoodle.com/ready-links.zip
 * Description:	  Ready Links is an SEO tool that prints a list of all the pages and blog posts in your website. This list can be used for Linking, BackLinking and cross checking for 404's and redirects. The list can be just a URL list, or a list of html links with a specified anchor text. The uses are limitless. - <a href="/wp-admin/options-general.php?page=ready_links.php"><b>=> Go To Settings Page <=</b></a>
 * Author:        Ultranoodle Technologies
 * Author URI:    https://www.ultranoodle.com/
 */
require_once(dirname(__FILE__).'/ready_links.php');
register_activation_hook(__FILE__, array(&$ReadyLinks, 'install'));
//register_deactivation_hook(__FILE__, array(&$ReadyLinks, 'uninstall'));
?>