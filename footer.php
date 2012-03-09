
  <div class="clear" ></div>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
    
			<?php
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
        <div class="grid_16">
				  <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
				  &bull; <a href="https://github.com/simplementNat/Simplement" ><?php printf( __( 'Theme by %s' ), 'Simplement Nat' ); ?></a>
          &bull; <a href="http://creativecommons.org/licenses/by-sa/3.0/" rel="license" ><?php echo __( 'content license : cc by sa'); ?></a>
			  </div>
    </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
