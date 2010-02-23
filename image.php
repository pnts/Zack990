<?php get_header(); ?>

<div id="wrapper">
	
	<div id="single">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
               
			<h2 class="gallerytitle"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="post">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a></p>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
			</div>
			
			
				
        <?php endwhile; ?>
		<div class="archive_nav">
		<div class="left"><?php mf_previous_image_link( '&laquo; Previous Image<br/><br/>' ) ?></div><div class="right"><?php mf_next_image_link( 'Next Image&raquo;<br/><br/>' ) ?></div>
		</div>

    	<?php else : ?>

       		<div class="fourohfour">
		        <img src="<?php bloginfo('template_directory'); ?>/images/mal.jpg" alt="a questioning duck" class="notfound" />
		    </div>
   

    <?php endif; ?>
	<div class="clear"></div>
	</div>


<?php comments_template(); ?>

</div> <!-- end wrapper -->
<?php get_footer(); ?>