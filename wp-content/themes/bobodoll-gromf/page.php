<?php while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="inside-content fadeIn animated">
	  <?php get_template_part('templates/page', 'header'); ?>
	  <?php get_template_part('templates/content', 'page'); ?>
  </div>
</div>
<?php endwhile; ?>
