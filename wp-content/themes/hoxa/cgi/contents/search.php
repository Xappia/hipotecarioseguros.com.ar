<?php
/**
 * (c) www.devn.co
 */

?>


			<?php if ( have_posts() ) : ?>

				<header>
					<h1 class="page-title">
						<?php printf( __( 'Resultado de la Búsqueda: %s', 'devn' ), '<span>' . get_search_query() . '</span>' ); ?>
					</h1>
				</header>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						require('content.php'); 
					?>

				<?php endwhile; ?>

				<?php devn_pagination(); ?>

			<?php else : ?>
				<br />
				<article id="post-0" class="post no-results not-found">
					<header>
						<h3 class="widget-title">
							<?php _e( 'Sin Resultados', 'devn' ); ?>
						</h3>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'No hay resultados para su búsqueda, vuelva a intentarlo.', 'devn' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>
