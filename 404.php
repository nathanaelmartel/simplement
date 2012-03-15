<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header prefix_1 grid_14 suffix_1">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentyeleven' ); ?></h1>
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'twentyeleven' ); ?></p>
				</header>

				<div class="entry-content">
          
          <div class=" prefix_5 grid_6 suffix_5">
					  <?php get_search_form(); ?>
          </div>

          <div class="grid_5">
					  <?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>
          </div>

          <div class="grid_6">
					  <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
          </div>

          <div class="grid_5">
					  <div class="widget">
						  <h2 class="widgettitle"><?php _e( 'Most Used Categories', 'twentyeleven' ); ?></h2>
						  <ul>
						  <?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						  </ul>
					  </div>
					  <?php
					  /* translators: %1$s: smilie */
					  $archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'twentyeleven' ), convert_smilies( ':)' ) ) . '</p>';
					  the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					  ?>
          </div>
          <div class="clear"></div>

				</div>
			</article>

		</div>
	</div>

<?php get_footer(); ?>
