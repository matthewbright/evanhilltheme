			</div> <!-- end #container -->
			<footer id="footer" class="row" role="contentinfo">
				<div class="col-sm-12">
					<hr />
				</div>
				<div id="email" class="col-xs-6">
					<a href="mailto:evan@evanhillscenic.com">evan@evanhillscenic.com</a>
				</div> <!-- end #email -->
				<div id="copyright" class="col-xs-6">
					<?php echo sprintf( __( '%1$s %2$s %3$s', 'evanhill' ), '&copy;', date('Y'), esc_html(get_bloginfo('name')) ); ?>
				</div> <!-- end #copyright -->
			</footer> <!-- end .row -->
		</div> <!-- #wrapper -->
		<?php wp_footer(); ?>
		<script type="text/javascript">
			jQuery("#sitetitletext").fitText(1, { minFontSize: '31px' });
		</script>
	</body>
</html>