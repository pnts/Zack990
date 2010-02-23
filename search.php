<?php get_header(); ?>

<div id="wrapper">
	
	<div id="home_content">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
               
				<div class="post">
                <?php the_content('&#187; Continue Reading'); ?>

				</div>
				
				<div class="main_meta">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<ul>
						<li><?php the_time('F jS, Y'); ?></li>
						<li>Posted in <?php the_category(', ') ?></li>  
						<li><?php comments_popup_link('No Comments', '1
							                Comment', '% Comments'); ?></li>
					</ul>
						<p class="edit"><?php edit_post_link('Edit', '', ''); ?></p>
						</div>

        <?php endwhile; ?>

			<div class="archive_nav">
			<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div><div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>


    <?php else : ?>
		<div class="post">
        <img src="<?php bloginfo('template_directory'); ?>/images/mal.jpg" alt="a questioning duck" class="errorduck" />
		</div>
		
		<div class="main_meta">
			<ul>
				<li>Mal the Error Duck says, "Uh oh! Your search for <em><?php the_search_query(); ?></em> has come up empty!"  You might want to try your search again.</li>
			</ul>
		</div>
		
    
    <?php endif; ?>

	</div>


	<?php comments_template(); ?>

</div> <!-- end wrapper -->
<?php get_footer(); ?>