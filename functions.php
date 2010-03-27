<?php
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
