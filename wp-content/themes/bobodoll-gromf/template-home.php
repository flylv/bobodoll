<?php
/**
 * Template Name: Home Page
 */
?>

<?php while (have_posts()) : the_post(); ?>

<div class="homeslide slideInDown animated">
	<?php
	if( have_rows('slidershow') ):

	 	// loop through the rows of data
	    while ( have_rows('slidershow') ) : the_row();?>
			<?php $link = get_sub_field('url'); ?>
			<?php $image = get_sub_field('slide'); ?>
			
			<?php if ($image): ?>

				<?php if( $link ): ?>
					<a href="<?php echo $link; ?>">
				<?php endif; ?>

					<div class="slide" style="background-image: url('<?php echo $image; ?>')"></div>

				<?php if( $link ): ?>
					</a>
				<?php endif; ?>

			<?php endif ?>
		
	    <?php endwhile;
	endif;?>
</div>

<?php 
	$highlineTitle = get_field( "highline-title" );
	$highlineText = get_field( "highline-text" ); 	
?>

<?php if ($highlineTitle || $highlineText): ?>
<div class="highline slideInUp animated">
	<div class="row">
		<div class="small-12 colums">
			<h2 class="red-point"><?php echo $highlineTitle; ?></h2>
			<div class="text"><?php echo $highlineText ?></div>
		</div>
	</div>
</div>
<?php endif ?>


<section class="product-list slideInUp animated">
	<div class="row" data-equalizer data-equalize-by-row="true">
		<?php
		$args = array (
			'post_type'              => array( 'post' ),
			'posts_per_page'         => '3',
			'order'                  => 'DESC',
			'orderby'                => 'date'		
		);

		$the_query = new WP_Query( $args );?>

		<?php if ( $the_query->have_posts() ) : ?>

			<h2 class="red-point"><?php _e('最新消息', 'sage'); ?></h2>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part("templates/content-single-list-pro"); ?>

				<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

</section>

<section class="product-list slideInUp animated">
	<div class="row" data-equalizer data-equalize-by-row="true">
		<?php
		$args = array (
			'post_type'              => array( 'product' ),
			'posts_per_page'         => '6',
			'order'                  => 'DESC',
			'orderby'                => 'date'		
		);

		$the_query = new WP_Query( $args );?>

		<?php if ( $the_query->have_posts() ) : ?>

			<h2 class="red-point"><?php _e('新品上市', 'sage'); ?></h2>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<?php get_template_part("templates/content-single-list-pro"); ?>

				<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>

		<?php endif; ?>

	</div>

</section>

<?php 
	$custome = get_field( "custome" );
?>

<?php if ($custome): ?>
<div class="suctomediv slideInUp animated">
	<div class="row">
		<div class="small-12 colums">
			<div class="text"><?php echo $custome ?></div>
		</div>
	</div>
</div>
<?php endif ?>

<?php endwhile; ?>
