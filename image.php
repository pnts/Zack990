<?php get_header(); ?>

<div id="wrapper">

<div id="single">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      
      <h2 class="gallerytitle"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
      <div class="post">
        <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'large' ); ?></a></p>
      </div>

   <?php endwhile; ?>
   
   <div class="archive_nav gallery">
     <div class="left"><?php previous_image_link( 'thumbnail' ) ?></div><div class="right"><?php next_image_link( 'thumbnail' ) ?></div>
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