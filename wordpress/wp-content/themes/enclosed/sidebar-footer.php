<section id="subfooter" class="subfooter">
	<div class="container">		
		<?php if(is_active_sidebar('footer-widgets-1')): ?>
			<div class="column col4">
				<?php dynamic_sidebar('footer-widgets-1'); ?>
			</div>
		<?php endif; ?>

		<?php if(is_active_sidebar('footer-widgets-2')): ?>
			<div class="column col4">
				<?php dynamic_sidebar('footer-widgets-2'); ?>
			</div>
		<?php endif; ?>

		<?php if(is_active_sidebar('footer-widgets-3')): ?>
			<div class="column col4">
				<?php dynamic_sidebar('footer-widgets-3'); ?>
			</div>
		<?php endif; ?>
		
		<?php if(is_active_sidebar('footer-widgets-4')): ?>
			<div class="column col4 col-last">
				<?php dynamic_sidebar('footer-widgets-4'); ?>
			</div>
		<?php endif; ?>
	</div>
</section>