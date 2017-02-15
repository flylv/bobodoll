<div class="medium-6 large-4 columns end" >
  <article data-equalizer-watch >
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <div class="list-avatar" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);"></div>
      
      <div>        
        <h3><span class="date"><?php echo get_the_date('M-Y'); ?></span> | <?php the_title(); ?></h3>
<!--         <div class="text">
          <?php the_excerpt(); ?>
        </div> -->
      </div>
    </a>
  </article>
</div>