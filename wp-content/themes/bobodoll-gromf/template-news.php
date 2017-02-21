<?php
/**
 * Template Name: News Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

<section class="product-list slideInUp animated">
	<div class="row" data-equalizer data-equalize-by-row="true">
		<?php
		$args = array (
			'post_type'              => array( 'post' ),
			'posts_per_page'         => -1,
			'order'                  => 'DESC',
			'orderby'                => 'date'		
		);

		$the_query = new WP_Query( $args );?>

		<?php if ( $the_query->have_posts() ) : ?>

			 <h1 class="entry-title"><?php _e('最新消息', 'sage'); ?></h1>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part("templates/content-single-list-pro"); ?>

				<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

</section>

<?php endwhile; ?>
