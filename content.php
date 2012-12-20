
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				</hgroup>
			<?php else : ?>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<time class="entry-date" datetime="<?php echo get_the_date( 'c' ) ?>" pubdate><?php echo get_the_date() ?></time>
				<div class="author"><?php echo get_the_author() ?></div>

				<?php if ( comments_open() && ! post_password_required() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply' ) . '</span>', '1 commentaire', '% commentaires' ); ?>
				</div>
				<?php endif; ?>
				<?php if ( 'post' == get_post_type() ) :  ?>
				<?php
					$categories_list = get_the_category_list( __( ', ' ) );
					if ( $categories_list ):
				?>
				<div class="categories">
					<?php echo $categories_list ;  ?>
				</div>
				<?php endif; ?>
				<?php
					$tags_list = get_the_tag_list( '', __( ', ' ) );
					if ( $tags_list ): ?>
				<div class="tags">
					<?php echo $tags_list; ?>
				</div>
				<?php endif;  ?>
				<?php endif;  ?>
	
				<?php edit_post_link( __( 'Edit' ), '<div class="edit-link">', '</div>' ); ?>
			</div>
			<?php endif; ?>
		</header>

		<?php if ( is_search() ) :  ?>
		<div class="entry-content entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
		
	<div class="clear"></div>
	</article>
