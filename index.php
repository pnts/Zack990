<?php get_header(); ?>

<div id="wrapper">
		
	<!-- <div id="intro">
	 	<p>Uncomment this section if you want to put some information about your site here.</p>
	</div> -->

<div id="home_content">
		<?php if (have_posts()) : ?>
		  <?php while (have_posts()) : the_post();
				if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
		    

		    <div class="main_meta">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="comments"><?php comments_popup_link('0', '1 Comment', '%'); ?></div>
				<div class="additional">
				  <span class="date"><?php the_time('F jS, Y'); ?></span>
				  <span class="permalink"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">Permalink</a></span>
				  <?php the_excerpt(); ?>		
				  <?php if(has_tag()): ?><ul class="tags"><?php the_tags('<li>Tagged ', ', ', '</li>');?></ul><?php endif; ?>
				</div><!-- close additional -->
		  </div><!-- close main_meta -->
		  <div class="post">  
		    <?php the_content('More Photos'); ?>
      </div><!-- close post -->
	    <?php endwhile; ?>

		  <div class="archive_nav">
		    <div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div><div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		  </div>



    <?php else : ?>

        <div class="fourohfour">
	        <img src="<?php bloginfo('template_directory'); ?>/images/mal.jpg" alt="a questioning duck" class="notfound" />
	    </div>
	<?php endif; ?>
	</div>

</div> <!-- end wrapper -->
<?php get_footer(); ?>