<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="container">
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/img/new_logo_strap.png"; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
		<div class="">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-search search">
					<form role="search" method="get" class="search-form form-inline" action="<?php echo esc_url(home_url('/')); ?>">
						<input type="search" placeholder="Search the site" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control">
						<input type="submit" value="">
					</form>
				</div>
			</div>

			<nav class="collapse navbar-collapse" role="navigation">
				<?php
				if ( has_nav_menu( 'primary_navigation' ) ) :
					wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav' ) );
				endif;
				?>
			</nav>
		</div>
	</div>
</header>
