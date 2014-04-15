<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>	
<div class="container">
	<div id="content" class="content content-wide">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="page-content">
				<?php echo tag_description(); ?>
			</div>
		</div>
	</div>	
	
	<?php get_template_part('element', 'portfolio-navigation'); ?>
	<?php if(have_posts()): $feature_count = 0; ?>
	<section id="portfolio" class="portfolio">
		<?php while(have_posts()): the_post(); ?>
		<?php if($feature_count % 4 == 0 && $feature_count != 0) echo '<div class="col-divide"></div>'; ?>
		<?php $feature_count++; ?>
		<div class="column col4<?php if($feature_count % 4 == 0 && $feature_count != 0) echo ' col-last'; ?>">
			<?php get_template_part('element', 'portfolio'); ?>
		</div>
		<?php endwhile; ?>
		<div class='clear'></div>
	</section>
	<?php endif; ?>
	<?php cpotheme_pagination(); ?>
</div>

<?php get_footer(); ?>