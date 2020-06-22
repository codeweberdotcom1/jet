<?php
global $porto_settings;

$page_header_type = porto_get_meta_value( 'porto_page_header_shortcode_type' );
$page_header_type = $page_header_type ? $page_header_type : porto_get_meta_value( 'breadcrumbs_type' );
$page_header_type = $page_header_type ? $page_header_type : ( $porto_settings['breadcrumbs-type'] ? $porto_settings['breadcrumbs-type'] : '1' );

$breadcrumbs = $porto_settings['show-breadcrumbs'] ? porto_get_meta_value( 'breadcrumbs', true ) : false;
$page_title  = $porto_settings['show-pagetitle'] ? porto_get_meta_value( 'page_title', true ) : false;

if ( ( is_front_page() && is_home() ) || is_front_page() ) {
	$breadcrumbs = false;
	$page_title  = false;
}
?>
