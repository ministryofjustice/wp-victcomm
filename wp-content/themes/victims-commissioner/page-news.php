<?php while (have_posts()) : the_post(); ?>
  	<?php get_template_part('templates/page', 'header'); ?>
  	<?php
  		// Get news posts
  		/**
  		 * The WordPress Query class.
  		 * @link http://codex.wordpress.org/Function_Reference/WP_Query
  		 *
  		 */
  		$args = array(
  			
  			//Category Parameters
  			'category_name'    => 'news',
  			
  			//Type & Status Parameters
  			'post_type'   => 'post',
  			'post_status' => 'publish',
  			
  			//Order & Orderby Parameters
  			'order'               => 'DESC',
  			'orderby'             => 'date',
  			
  			//Pagination Parameters
  			'posts_per_page'         => 10,
  			'nopaging'               => false,
  			'paged'                  => get_query_var('paged'),
  			
  		);
  	
  		$query = new WP_Query( $args );

	  	while ($query->have_posts()) {
	  		$query->the_post(); ?>
	  		<article <?php post_class(); ?>>
		  		<header>
			      	<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?></h2></a>
			      	<div class="news-meta"><?php get_template_part('templates/entry-meta'); ?></div>
			    </header>
			    <div class="entry-content">
			      	<?php the_excerpt(); ?>
			    </div>
			    <footer>
			      	<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
			    </footer>
		  	</article>
	  	<?php }
  	?>
<?php endwhile; ?>