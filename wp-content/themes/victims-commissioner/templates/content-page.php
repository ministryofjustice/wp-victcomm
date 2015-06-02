<?php the_content(); ?>

<?php
	if ( is_page( 'current-review' ) ) {    
    	echo '<script type="text/javascript" src="http://survey.euro.confirmit.com/wix/inline.aspx?p=p1843964285&v=2010&qt=false&xhr=false&__ckey=D29FC91F39B56F8E1C96266CE55E7FD3"></script>';
	} else { 
    	echo '';
	}	
?>
<?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>