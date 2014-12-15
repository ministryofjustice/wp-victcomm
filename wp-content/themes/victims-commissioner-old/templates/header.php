<header class="banner navbar navbar-default navbar-static-top" role="banner">
	<div class="container">
		<a class="navbar-brand col-sm-3" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/img/new_logo_strap.png"; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
		<div class="col-sm-9">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-search search">
					<form>
						<input type="search" placeholder="Search the site"><input type="submit" value="">
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
