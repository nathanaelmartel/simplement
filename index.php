<?php

get_header(); ?>
	<div id="main">

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<nav id="nav-local">
					<?php if (is_single()): ?>
						<div class="nav-previous"><?php next_post_link( '%link', '<span class="meta-nav">&larr;</span> Article précédent' ); ?></div>
						<div class="nav-next"><?php previous_post_link( '%link', 'Article suivant <span class="meta-nav">&rarr;</span>' ); ?></div>
					<?php else: ?>
						<div class="nav-previous"><?php next_posts_link( '<span class="meta-nav">&larr;</span> Articles plus anciens' ); ?></div>
						<div class="nav-next"><?php previous_posts_link( 'Articles plus récents <span class="meta-nav">&rarr;</span>' ); ?></div>
					<?php endif ?>
				</nav>


			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</article>

			<?php endif; ?>

			</div>
		</div>

  <div class="clear" ></div>
	</div>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
