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

function mf_previous_image_link( $text ) {
    $i = mf_adjacent_image_link( true );
	if ( $i )
		print $text . $i;
}

function mf_next_image_link( $text ) {
    $i = mf_adjacent_image_link( false );
	if ( $i )
		print $text . $i;
}

function mf_adjacent_image_link($prev = true) {
    global $post;
    $post = get_post($post);
    $attachments = array_values(get_children(
Array('post_parent' => $post->post_parent,
      'post_type' => 'attachment',
      'post_mime_type' => 'image',
      'orderby' => 'menu_order ASC, ID ASC')));

    foreach ( $attachments as $k => $attachment )
        if ( $attachment->ID == $post->ID )
            break;

    $k = $prev ? $k - 1 : $k + 1;

    if ( isset($attachments[$k]) )
        return wp_get_attachment_link($attachments[$k]->ID, 'thumbnail', true);
	else
		return false;
} 

add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
	
}?>
