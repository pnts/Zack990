<?php get_header(); ?>

<div id="wrapper">
	
	<div id="single">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
               
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
                <?php the_content('&#187; Continue Reading'); ?>
				</div>
      <?php endwhile; ?>


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