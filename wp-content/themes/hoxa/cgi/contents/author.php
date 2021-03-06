<?php
/**
 * (c) www.devn.co
 */

?>


			<?php if ( have_posts() ) : ?>

				<?php
	
					the_post();
				?>

				<header>
					<h1 class="page-title author"><?php printf( __( 'Archivos del Autor: %s', 'devn' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
				</header>

				<?php

					rewind_posts();
				?>

				<?php
				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) : ?>
				<div class="about_author">
					
					<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
					
					<h3><?php printf( __( 'About %s', 'devn' ), get_the_author() ); ?></h3>
					
					<?php the_author_meta( 'description' ); ?>
				</div><!-- #author-info -->
				<div class="clearfix divider_dashed3"></div>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						require('content.php');  
						
					?>

				<?php endwhile; ?>

				<?php devn_pagination(); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'devn' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'devn' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
