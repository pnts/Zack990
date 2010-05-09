
	<div id="secondary_nav">
		
		
		

		<ul id="widgetlist">
	  <div id="col1">
		<?php if ( !function_exists('dynamic_sidebar')
			  || !dynamic_sidebar("Column 1") ) : ?>
		
		
		<li class="footerlist">
			<h2>Pages</h2>
				<ul>
					<?php wp_list_pages("title_li="); ?>
				</ul>
		</li>
		
		<li class="footerlist">
			<h2>Search</h2>
				<ul>
					<li>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
					</li>
				</ul>
		</li>
		<?php endif; ?>	
		</div><!-- close col1 -->
		
		
		
		
		<div id="col2">
		<?php if ( !function_exists('dynamic_sidebar')
				 || !dynamic_sidebar("Column 2") ) : ?>
		
		<li class="footerlist">	
		<h2>Categories</h2>
			<ul>
				<?php wp_list_categories('orderby=name&title_li='); ?>
			</ul>
		</li>
		
		
		<li class="taglist">
		<h2>Tags</h2>
				<div class="wp-tag-cloud">
				<?php wp_tag_cloud('format=flat&unit=px&smallest=10&largest=24'); ?>
				</div>
		</li>
		<?php endif; ?>
		</div><!-- close col2 -->
		
		
		
		
		<div id="col3">
		<?php if ( !function_exists('dynamic_sidebar')
			 || !dynamic_sidebar("Column 3") ) : ?>
		
		<li class="footerlist">
		<h2>Archives</h2>
			<ul>
				<?php wp_get_archives('format=html'); ?>
			</ul>
		</li>
		<?php endif; ?>
		</div><!-- close col3 -->
		
		
		
		
		
		<div id="col4">
		<?php if ( !function_exists('dynamic_sidebar')
		 	|| !dynamic_sidebar("Column 4") ) : ?>
		
		<li class="footerlist">
		<h2>Blogroll</h2>
			<ul>
				<?php wp_list_bookmarks('categorize=0&title_li=0&title_after=&title_before=');?>
			</ul>

		</li>
		
		<li class="footerlist">
		<h2>Subscribe</h2>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>">rss </a></li>
				<li><a href="<?php bloginfo('atom_url'); ?>">atom </a></li>
				<li><a href="<?php bloginfo('rdf_url'); ?>">rdf</a></li>
			</ul>
		</li>
		<?php endif; ?>
		</div><!-- close col4 -->
	     </ul>
		</div>
		
		
		
	
	
	<div id="footer">
	<div class="copyright">
	<p><a href="http://andreamignolo.com/zack-990">Zack 990</a> by <a href="http://weinbergphoto.com">Joshua Weinberg</a> and <a href="http://andreamignolo.com">Mignolo</a> &sect; Powered by 
		<a href="http://wordpress.org">WordPress</a>
	</p>
	</div>

</div>

<?php wp_footer(); ?>
</body>

</html>