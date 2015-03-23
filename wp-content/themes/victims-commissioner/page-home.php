<div class="row">
	<div class="col-sm-6 home-lead-col">
		<?php if( ot_get_option( 'homepage-lead-image', true) != 1 ) :
		   build_homepage_image( 'homepage-lead-image' );  
		 else : ?>
		  	<div class="videoWrapper">
				<script src='//fast.wistia.com/static/iframe-api-v1.js'></script>
				<?php echo ot_get_option( 'homepage-lead-video' ); ?> 
			</div>
		<?php endif ?>
	</div>
	<div class="col-sm-6 home-intro-col">
		<h1 class="no-top-margin">Welcome</h1>
		<?php echo ot_get_option( 'homepage-intro' ); ?>
		<a href="#">Learn more ></a>
	</div>
</div>
<div class="row">
	<div class="col-sm-6 home-actions-col">
		<h1 class="no-top-margin">How you can take action</h1>
		<?php
		for ( $x = 1; $x <= 4; $x++ ) {
			$action_target = ot_get_option( "homepage_cta" . $x . "_target" );
			$action_url = get_permalink( $action_target );
			$action_text = ot_get_option( "homepage_cta" . $x . "_text" );
			if(strlen($action_text)>0) {
			?><a href = "<?php echo $action_url; ?>">
				<div class = "home-action-container">
					<span class='glyphicon glyphicon-<?php echo ot_get_option( "homepage_cta" . $x . "_icon" ); ?>'></span>
					<div class = "action-text">
						<p><?php echo $action_text; ?></p>
						<?php if ( $action_target ) { ?>
																		<!--<a href = "<?php echo $action_url; ?>">Read more ></a>-->
						<?php } ?>
					</div>
				</div>
			</a>
		<?php }
		}
		?>
	</div>
	<div class="col-sm-6 home-images-col">
		<?php build_homepage_image( 'homepage-second-image' ); ?>
		<?php build_homepage_image( 'homepage-third-image' ); ?>
	</div>
</div>
<div class="row new-section">
	<div class="col-sm-6 home-news-col">
		<h2>Latest news</h2>
		<?php
		$news = get_posts( array(
			'post_type' => 'post',
			'post_per_page' => 1
				) );
		foreach ( $news as $newspost ) {
			$news_id = $newspost->ID;
			?>
			<article>
				<a href='<?php echo get_permalink( $news_id ); ?>'><h1><?php echo get_the_title( $news_id ); ?></h1></a>
				<div class='news-meta'>
					<?php echo get_the_date( "j F, Y", $news_id ); ?>
				</div>
				<?php echo wpautop( $newspost->post_excerpt ); ?>
				<a href='<?php echo get_permalink( $news_id ); ?>'>Read more ></a>
			</article>
		<?php }
		?>
		<div class="all-news"><a href="/news">View all news articles</a></div>
	</div>
	<div class="col-sm-6 home-media-col">
		<h2>Follow Us</h2>
		<a class="twitter-timeline"  href="https://twitter.com/HNewlove" data-widget-id="522671864489848834" width="1000">Tweets by @HNewlove</a>
		<script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>
		</textarea>
	</div>
</div>
<!--<div class="row new-section">
	<div class="col-sm-4 home-related-col">
		<h3>Other relates blogs & resources</h3>
		<a href='#'>External link</a>
		<a href='#'>External link</a>
		<a href='#'>External link</a>
		<a href='#'>External link</a>
		<a href='#'>External link</a>
	</div>
	<div class="col-sm-4 home-upcoming-col">
		<h3>Upcoming events</h3>
		<a href='#'>1 Jan, Event title</a>
		<a href='#'>1 Jan, Event title</a>
		<a href='#'>1 Jan, Event title</a>
		<a href='#'>1 Jan, Event title</a>
		<a href='#'>Read more ></a>
	</div>
	<div class="col-sm-4 home-about-col">
		<h3>About Baroness Newlove</h3>
		<p>Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis.</p>
		<a href='#'>Read more ></a>
	</div>
</div>-->