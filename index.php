<?php get_header(); ?>

<div id="wrapper">
		
<!-- <div id="intro">
  <p>Uncomment this section if you want to put some information about your site here.</p>
</div> -->

<div id="page">
	<?php if (is_day()) { ?>
		<h2><?php the_time('l, F jS, Y'); ?> Archives</h2>
	
	<?php } elseif (is_month()) { ?>
		<h2><?php the_time('F, Y'); ?> Archives </h2>
	
	<?php } elseif (is_year ()) { ?>
		<h2><?php the_time('Y'); ?> Archives </h2>
		
	<?php } elseif (is_category()) { ?>
		<h2>Category: <?php single_cat_title(''); ?> </h2>
		
	<?php } elseif (is_tag()) { ?>
		<h2>Tagged: <?php single_tag_title(); ?></h2>
		
	<?php } ?>

</div>

<div id="home_content">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();
      if( $post->ID == $do_not_duplicate ) continue; update_post_caches($posts); ?>
		    
		    <div class="post">  
		      <div class="main_meta">
						  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				  <div class="comments"><?php comments_popup_link('0', '1 Comment', '%'); ?></div>
				  <div class="additional">
				    <span class="date"><?php the_time('F jS, Y'); ?></span><?php if(has_tag()): ?><ul class="tags"><?php the_tags('<li>Tagged ', ', ', '</li>');?></ul><?php endif; ?>
				    <span class="permalink"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>">Permalink</a></span>
				    <?php the_excerpt(); ?>		
				    
				  </div><!-- close additional -->
		    </div><!-- close main_meta -->
		  
		    <div class="content">
		      <?php the_content('More Photos'); ?>
		      <?php wp_link_pages('before=<div class="page-links">&after=</div>'); ?> 
		    </div>
      </div><!-- close post -->
	    <?php endwhile; ?>

		  
		  <?php if(is_single()): else: ?>
		    <div class="archive_nav">
		      <div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div><div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		      </div>
		  <?php endif; ?>


      <?php else : ?>
        <div class="fourohfour">
	        <img src="<?php bloginfo('template_directory'); ?>/images/mal.jpg" alt="a questioning duck" class="notfound" />
	      </div>
	    <?php endif; ?>
	</div>
	
	<?php if(is_single()) : comments_template(); endif; ?>

</div> <!-- end wrapper -->
<?php get_footer(); ?>