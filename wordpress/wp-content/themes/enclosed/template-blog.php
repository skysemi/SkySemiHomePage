<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<?php get_template_part('element', 'page-header'); ?>
<div class="container">
	<section id="content" class="content">
		<div class="container">
			<?php if(have_posts()) while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
		
		<?php query_posts("post_type=post&paged=".cpotheme_current_page()."&posts_per_page=".get_option('posts_per_page')); ?>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<?php get_template_part('element', 'blog'); ?>
		<?php endwhile; ?>
		<?php cpotheme_pagination(); ?>
		<?php endif; ?>
	</section>
	<?php get_sidebar(); ?>
	<div class="clear"></div>
</div>

<?php get_footer(); ?>