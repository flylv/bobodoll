<?php
/**
 * Template Name: Product Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

<section class="product-list slideInUp animated">
	<div class="row" data-equalizer data-equalize-by-row="true">
	<div class="small-12 medium-12 large-12 columns">
	 	<div class="inside-content fadeIn animated">
	 		<h1 class="entry-title"><?php the_title(); ?></h1>
		   	<div class="entry-content">
		      <?php the_content(); ?>
	    	</div>
	 	</div>
	 	
    </div>
		<?php
		$args = array (
			'post_type'              => array( 'product' ),
			'posts_per_page'         => -1,
			'order'                  => 'DESC',
			'orderby'                => 'date'		
		);

		$the_query = new WP_Query( $args );?>

		<?php if ( $the_query->have_posts() ) : ?>


				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part("templates/content-single-list-pro"); ?>

				<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

</section>

<?php endwhile; ?>
