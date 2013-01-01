<?php
/**
 * The main template file.
 */

get_header(); ?>

    <section id="blog">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php endif; // end have_posts() check ?>     
    </section>

<?php get_footer(); ?>
