<?php
global $YKV;
require dirname(__FILE__).'/class.youku.php';
if(!isset($YKV)){
	$YKV = new youku();
}

function the_youku(){
	global $YKV;
	$YKV->display();
}

// Add shortcode
function ykv_shortcode($atts, $content=null){
	extract(shortcode_atts(array(), $atts));	
	return the_youku();
}
add_shortcode('the_youku','ykv_shortcode');