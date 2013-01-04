<?php
/**
 * The main template file.
 */

get_header(); ?>

    <section id="blog">
      <?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part('content'); ?>
	<?php endwhile; ?>

        <nav id="paging_nav">
          <?php previous_posts_link('<span id="newer">&laquo; Newer Posts</span>'); ?>
          <?php next_posts_link('<span id="older">Older Posts &raquo;</span>'); ?>
        </nav>

      <?php endif; // end have_posts() check ?>     
    </section>

    <div id="subscribe">
      <a href="/blog/?feed=rss2"><img src="/blog/wp-content/themes/tola/images/subscribe.png"
      alt="Subscribe">Subscribe</a> <span>(RSS)</span>
    </div>


<?php get_footer(); ?>
