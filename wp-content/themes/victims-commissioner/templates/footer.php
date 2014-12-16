<footer class="content-info" role="contentinfo">
	<div class="container">
		<?php // dynamic_sidebar('sidebar-footer'); ?>
		<?php
		if ( has_nav_menu( 'primary_navigation' ) ) :
			wp_nav_menu( array( 'theme_location' => 'footer_navigation', 'menu_class' => 'nav navbar-nav' ) );
		endif;
		?>
	</div>
</footer>
