				<div class="clear"></div>
			</div><!-- main -->
		</div><!-- wrapper -->
		
		<?php get_sidebar('footer'); ?>				
		
		<div id="footer" class="footer">
			<div class="container">
				<div id="footermenu" class="footermenu">
					<?php wp_nav_menu(array('menu_class' => 'menu-footer', 'theme_location' => 'footer_menu', 'depth' => '1', 'fallback_cb' => false)); ?>
				</div>
				&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?>. <?php _e('<a href="http://www.cpothemes.com">WordPress Theme</a> developed by CPOThemes.', 'cpotheme'); ?>
			</div>
		</div>
		<div class="clear"></div>
		
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>
