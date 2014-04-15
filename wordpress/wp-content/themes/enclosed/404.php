<?php get_header(); ?>

<div class="container">
	<section id="content" class="content content-wide">
		<div class="notfound">
			<div class="column col notfound-image">404</div>
			<div class="column col notfound-content">
				<h1 class="notfound-title"><?php _e('Page Not Found', 'cpotheme'); ?></h1>
				<?php _e('The requested page could not be found. It could have been deleted or changed location. Try searching for it using the search function.', 'cpotheme'); ?>
			</div>
			<div class="col-divide"></div>
		</div>
	</section>
</div>

<?php get_footer(); ?>