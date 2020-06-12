<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Susty
 */

get_header();
?>

	<div id="primary">
		<main id="main">

			<header>
				<?php
				echo( '<h1 class="notes-title"><i class="las la-edit la-lg"></i>Notes</h1>' );
				echo( '<p>Notes are shorter posts that I write. They could include passing thoughts, or links to sites that I have found interesting. Basically anything that I consider noteworthy that doesn&#8217;t justify an entire post.</p><br>');
				?>
			</header>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
			?>
			<div class="post-title">
	 			<?php
	 			if ( is_singular() ) :
	 				the_title( '<h1>', '</h1>' );
	 			else :
	 				the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	 			endif;
	 			?>
	 		</div>
			<div class="entry-meta">
				<?php susty_wp_posted_on(); ?>
			</div><!-- .entry-meta -->
			<br>
		<?php

			endwhile;

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div style="text-align:center;" class="pagination">
		<?php posts_nav_link( '  ', 'Newer Notes', 'Older Notes' ); ?>
	</div>

<?php
get_footer();
