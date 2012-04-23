<?php

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

        <div class="grid_16">
				  <?php twentyeleven_content_nav( 'nav-above' ); ?>
				  <div class="clear"></div>
			  </div>


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

        <div class="grid_16">
				  <?php twentyeleven_content_nav( 'nav-above' ); ?>
				  <div class="clear"></div>
			  </div>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found grid_12 prefix_2 suffix_2">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
