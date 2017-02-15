<footer class="content-info" role="contentinfo">
  <div class="container">
	<div class="row expanded">
		<div class="columns">
			<div class="inside">
				<div class="row expanded" data-equalizer data-equalize-on="large">
					<div class="small-12 medium-9 columns">
						<div class="small-12 medium-2 columns small-only-text-center">
						    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?>" class="logo">
						    	<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.jpg" alt="logo">
						    </a>
					    </div>

					<div class="small-12 medium-10 columns hide-for-small-only">
						<ul class="bottom-menu menu horizontal">
				            <?php if (has_nav_menu('primary_navigation')) :?>
				              <?php  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav','depth' => 1]);?>
				            <?php endif;?>
						</ul>
						</div>
					</div>
					<div class="small-12 medium-3 columns small-only-text-center">
						<div class="menu-centered">
							<ul class="menu horizontal social">
							  <li><a href="<?php the_field('facebook', 'option');?>" title="facebook" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/facebook.svg" alt="facebook"></a></li>
							  <li><a href="<?php the_field('twitter', 'option');?>" title="twitter" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/twitter.svg" alt="twitter"></a></li>
							  <li><a href="<?php the_field('linkedin', 'option');?>" title="linkedin" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/linkedin.svg" alt="linkedin"></a></li>
							  <li><a href="<?php the_field('youtube', 'option');?>" title="youtube" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/youtube.svg" alt="youtube"></a></li>
							</ul>   
						</div>
					</div>
			  	</div>
		  	</div>
	  	</div>
  	</div>
  	<div class="row">
  		<div class="columns small-12">
  			<p class="text-center fotinfo"><?php _e('联系方式 : 日本医学美容高端品牌大波娃娃BOBODOLL全国首家涂抹口服微整形', 'sage'); ?><br/>
			<?php _e('咨询微信 : 48774568', 'sage'); ?></p>
  		</div>
  	</div>
  </div>
</footer>
