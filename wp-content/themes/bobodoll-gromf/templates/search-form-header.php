<form role="search" method="get" class="search" action="<?= esc_url(home_url('/')); ?>">
	<div class="searchtext">
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="<?php _e('查询', 'sage'); ?> <?php bloginfo('name'); ?>">
	</div>
	<div class="searchBouton">
		<input type="submit" class="button expand postfix" value="<?php _e('OK', 'sage'); ?>">
	</div>
</form>