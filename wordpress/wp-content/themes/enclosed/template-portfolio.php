<?php
/*
  Template Name: Portfolio Page
 */
?>
<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
<div class="container">
	<section id="content" class="content content-wide">
		<?php if(have_posts()) while(have_posts()): the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="page-content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; ?>
		
		<?php get_template_part('element', 'portfolio-navigation'); ?>
		<?php query_posts("post_type=cpo_portfolio&paged=".cpotheme_current_page()."&posts_per_page=12&order=ASC&orderby=menu_order"); ?>
		<?php if(have_posts()): $feature_count = 0; ?>
		<section id="portfolio" class="portfolio">
			<?php while(have_posts()): the_post(); ?>
			<?php $feature_count++; ?>
			<div class="column col4<?php if($feature_count % 4 == 0 && $feature_count != 0) echo ' col-last'; ?>">
				<?php get_template_part('element', 'portfolio'); ?>
			</div>
			<?php endwhile; ?>
			<div class='clear'></div>
		</section>
		<?php endif; ?>
		<?php cpotheme_pagination(); ?>
	</section>
</div>

<?php get_footer(); ?>