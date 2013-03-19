<?php 
/*
Plugin Name: Kill Default Description
Description: Either remove or replace the default site description.
Author: Happy Collision
Version: 1.0
Author URI: http://happycollision.com
*/
add_filter('option_blogdescription','kill_default_description');
function kill_default_description($description){
	if( ! is_admin() ){
		switch ($description):
			case 'Just another Happy Collision site':
			case 'Just another Happy Collision Sites site':
			case 'Just another WordPress site':
			case 'Just another WordPress blog':
				$description = "";
				break;
		endswitch;
	}
	return $description;
}
//bloginfo('description');