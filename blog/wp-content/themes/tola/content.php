<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>

      <article class="blog_post page">
       <?php if ( is_single() ) : ?>
       <h1><?php the_title(); ?></h1>      
       <?php else : ?>
        <h1><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
       <?php endif; ?>
        <span class="date"><?php the_date('Y-m-d H:i (T)'); ?></span>
        <?php the_content(); ?>
        <?php comments_popup_link(); ?>
      </article>
