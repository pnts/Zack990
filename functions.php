<?php

$GLOBALS['content_width'] = 990;

add_shortcode('wp_caption', 'zack_img_caption_shortcode');
add_shortcode('caption', 'zack_img_caption_shortcode');

function zack_img_caption_shortcode($attr, $content = null) {

  	// Allow plugins/themes to override the default caption template.
  	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
  	if ( $output != '' )
  		return $output;

  	extract(shortcode_atts(array(
  		'id'	=> '',
  		'align'	=> 'alignnone',
  		'width'	=> '',
  		'caption' => ''
  	), $attr));

  	if ( 1 > (int) $width || empty($caption) )
  		return $content;

  	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

  	return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: ' . (4 + (int) $width) . 'px">'
  	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Column 1',
	'id' => 'column-1',
	'before_widget' => '<li id="%1$s" class="footerlist %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Column 2',
	'id' => 'column-2',
	'before_widget' => '<li id="%1$s" class="footerlist %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Column 3',
	'id' => 'column-3',
	'before_widget' => '<li id="%1$s" class="footerlist %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'name' => 'Column 4',
	'id' => 'column-4',
	'before_widget' => '<li id="%1$s" class="footerlist %2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
	));


add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
	
 


	
}?>
