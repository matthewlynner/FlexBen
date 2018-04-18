<?php
/* ------------------------------------------------------------------------- *
 * Footer template
/* ------------------------------------------------------------------------- */
?>
		<footer id="main-footer" class="footer-wrap clearfix">

			<?php
			/**
			 * Hooked:
			 * ------
			 * businessx_footer_widgets_wrapper() - 10
			 * businessx_footer_creds_wrapper() - 20
			 * ------
			 */
			do_action( 'businessx_main__footer' );
			?>
			
			<p class="custom-footer">
				Flexible Benefit Consulting &copy; 2018
			</p>

		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
