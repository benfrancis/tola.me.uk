<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>

      <article class="blog_post page">
        <h1><?php the_title(); ?></h1>
        <span class="date"><?php the_date('Y-m-d H:i (T)'); ?></span>
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
      </article>
