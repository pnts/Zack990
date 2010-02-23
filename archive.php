<?php get_header(); ?>



<div id="wrapper">

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
		
		<div class="main_meta">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2></div>
		<div class="post">
				<?php the_content('&raquo; Continue Reading...'); ?>
		</div>
			
		
		<div class="main_meta">
				
				<ul>
					<li><?php the_time('F jS, Y'); ?></li>
					<li>Posted in <?php the_category(', ') ?></li> 
					<?php the_tags('<li>Tagged ', ', ', '</li>'); ?> 
					<li><?php comments_popup_link('No Comments', '1
			                Comment', '% Comments'); ?></li>
					<li><?php edit_post_link('Edit', '', ''); ?></li>
				</ul>
				
			
					
		</div>

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